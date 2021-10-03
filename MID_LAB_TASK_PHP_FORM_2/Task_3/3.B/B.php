<?php 

    if(isset($_REQUEST['submit'])){
        $date = $_REQUEST['mydate'];
        if($date != ""){
            echo $date;
        }else{
            echo "Null value...";
        }
    }

?>

<html>
<head>
    <title>date of birth</title>
</head>
<body>
<fieldset>
<legend>date of birth</legend>
    <form method="post" >
        <input type="date" name="mydate" value=""/> <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>
    </fieldset>
</body>
</html>