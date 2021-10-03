<?php 

    if(isset($_REQUEST['submit'])){
        $date = $_REQUEST['mydate'];
    }

?>

<html>
<head>
    <title>Date of birth</title>
</head>
<body>
<fieldset>
<legend>date of birth</legend>
    <form method="post" >
        <input type="date" name="mydate" value="<?php if(isset($date)){ echo $date; }?>"/> <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>
    </fieldset>
</body>
</html>