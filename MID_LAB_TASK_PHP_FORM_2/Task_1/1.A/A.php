<?php 

    $name = $_GET['myname'];

?>

<html>
<head>
    <title>Name</title>
</head>
<body>
<fieldset>
<legend>Name</legend>
    <form method="get" >
        <input type="text" name="myname" value=""/> <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>
    </fieldset>
</body>
</html>