<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="main.css">
        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" type="text/css" href="feedback.css">
        <title>Form submission</title>
    </head>

    <body>

<div class = "feedback">
<fieldset class ="clearfix">
<p class="title"> tell me more about it ...</p>
        <form action="feedback.php" method="post">
            first name: <input type="text" name="first_name"><br>
            last name: <input type="text" name="last_name"><br>
            username: <input type="text" name="username"><br>
            email: <br><input type="text" name="email"><br>
            message:<br><textarea rows="5" name="message" cols="57"></textarea><br>
            <br>
            <input type="submit" name="submit" value="ok">
        </form>
        </fieldset>
</div>

    </body>
</html> 
