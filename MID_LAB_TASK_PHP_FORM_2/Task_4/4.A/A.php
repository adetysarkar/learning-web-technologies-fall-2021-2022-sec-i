<?php 

    $gender = $_GET['mygender'];

?>

<html>
<head>
    <title>gender</title>
</head>
<body>
<fieldset>
<legend>gender</legend>
    <form method="get" >
        <input type="radio" id="male" name="mygender" value="MALE">
        <label for="male">Male</label>
        <input type="radio" id="female" name="mygender" value="FEMALE">
        <label for="female">Female</label>
        <input type="radio" id="other" name="mygender" value="OTHER">
        <label for="other">Other</label>
        <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>
    </fieldset>
</body>
</html>
