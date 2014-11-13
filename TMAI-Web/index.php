<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title> tell me about it ... </title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700">
	
	<link rel="stylesheet" type="text/css" href="styles/main.css">
	<link rel="stylesheet" type="text/css" href="styles/login.css">

	<!-- NOT WORKING <script type="text/javascript" src="js/main.js"></script> -->

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	
	<!-- INSERTED INTO THE HTML -->
	<script>
		$(document).ready(function(){
		  $("#flip").click(function(){
		    $("#panel").slideToggle("slow");
		  });
		});
</script>

</head>

<body>
	<div id="login">


		<form action="login.php" method="post">	
			<fieldset class="clearfix">

				<p class="title"> tell me about it ... </p>

				<p><span class="fontawesome-user"></span>
					<input type="text" value="user_name" name="user_name" onBlur="if(this.value=='') this.value='user_name'" onFocus="if(this.value=='user_name') this.value=''" required></p>
					
				<p><input type="submit" button onClick="location.href='search.html'" value='ok'></p>

			</fieldset>
		</form>


	<div id="flip"> what is 'tell me about it ... '?</div>
	<div id="panel"> This platform will update in 'REAL TIME' to interact with it's users in a specific location with others. Hoping to make this a social tool that will empower the user free from registering and passwords. It is a place to connect, create, and enlighten users.</div>
	
	</div>
	</div>
</body>

</html>

 

