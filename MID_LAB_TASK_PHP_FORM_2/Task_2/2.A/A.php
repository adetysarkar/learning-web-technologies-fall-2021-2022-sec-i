<?php 

    $email = $_GET['myemail'];

?>

<html>
<head>
    <title>Email</title>
</head>
<body>
<fieldset>
<legend>Email</legend>
    <form method="get" >
        <input type="email" name="myemail" value=""/> <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>
    </fieldset>
</body>
</html>