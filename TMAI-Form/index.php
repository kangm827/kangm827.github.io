<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" type="text/css" href="feedback.css">
        <title>Please tell us what you think ...</title>
    </head>

    <body>

<div class = "feedback">
<fieldset class ="clearfix">
<p class="title"> tell me MORE about it ...</p>
        <form action="feedback.php" method="post">
            <p>first name:</p> <input type="text" name="first_name"><br>
            <p>last name:</p> <input type="text" name="last_name"><br>
            <p>username:</p><input type="text" name="username"><br>
            <p>email: * required</p><input type="text" name="email"><br>
            <p>message: * required</p><textarea rows="20" name="message" cols="57"></textarea><br>
            <input type="submit" name="submit" value="ok">
        </form>
        </fieldset>
</div>

    </body>
</html> 
