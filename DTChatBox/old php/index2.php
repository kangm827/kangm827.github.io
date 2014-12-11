<?
session_start();

if(isset($_GET['logout'])){	
	
	//Simple exit message
	$fp = fopen("log.html", 'a');
	fwrite($fp, "<div class='msgln'><i>User ". $_SESSION['name'] ." has left ChatBox!.</i><br></div>");
	fclose($fp);
	
	session_destroy();
	header("Location: index2.php"); //Redirect the user
}

function loginForm(){
	echo'
	<div id="loginform">
	<form action="index2.php" method="post">
		<h1>ChatBox!</h1>
		<p><span class="fontawesome-user"></span>
		<input type="text" name="name" id="name" size="30"/>
		<input type="submit" name="enter" id="enter" value="Continue" />
	</form>
		<div id="panel"><b>What is "ChatBox?"</b>
		<br>Real time chat what interacts with users in a specific location.</div>
	</div>
	';
}

if(isset($_POST['enter'])){
	if($_POST['name'] != ""){
		$_SESSION['name'] = stripslashes(htmlspecialchars($_POST['name']));
	}
	else{
		// echo '<span class="error">Please type in a username to continue</span>';
		echo "<script type='text/javascript'>alert('Please type in a username to continue');</script>";
		
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ChatBox!</title>
<link type="text/css" rel="stylesheet" href="style.css" />
<link type="text/css" rel="stylesheet" href="map.css" />
</head>

<?php
if(!isset($_SESSION['name'])){
	loginForm();
}
else{
?>

<div id="wrapper">
	<div id="menu">
		<p class="welcome">Welcome to <b>BROOKLYN</b> ChatBox!, <b><?php echo $_SESSION['name']; ?></b></p>
		<p class="logout"><a id="exit" href="#">Exit ChatBox!</a></p>
	</div>

	<div id="chatbox">

	<?php
	if(file_exists("log.html") && filesize("log.html") > 0){
		$handle = fopen("log.html", "r");
		$contents = fread($handle, filesize("log.html"));
		fclose($handle);
		
		echo $contents;
	}
	?>
	</div>

	<form name="message" action="">
		<input name="usermsg" type="text" id="usermsg"/>
		<input name="submitmsg" type="submit"  id="submitmsg" value="Send Message" />
	</form>
	</div>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
<script type="text/javascript">

// jQuery Document
$(document).ready(function(){
	//If user submits the form
	$("#submitmsg").click(function(){	
		var clientmsg = $("#usermsg").val();
		$.post("post.php", {text: clientmsg});				
		$("#usermsg").attr("value", "");
		return false;
	});
	
	//Load the file containing the chat log

	function loadLog(){		
		var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
		$.ajax({
			url: "log.html",
			cache: false,
			success: function(html){		
				$("#chatbox").html(html); //Insert chat log into the #chatbox div				
				var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
				if(newscrollHeight > oldscrollHeight){
					$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}				
		  	},
		});
	}
	setInterval (loadLog, 500);	//Reload file every 1/2 seconds
	
	//If user wants to end session
	$("#exit").click(function(){
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = 'index2.php?logout=true';}		
	});
});

</script>
<?php
}
?>

</body>
</html>