<?php 

    if(isset($_REQUEST['submit'])){
        $name = $_REQUEST['myname'];
        if($name != ""){
            echo $name;
        }else{
            echo "Null value...";
        }
    }

?>

<html>
<head>
    <title>Name</title>
</head>
<body>
<fieldset>
<legend>Name</legend>
    <form method="post" >
        <input type="text" name="myname" value="<?php if(isset($name)){ echo $name; }?>"/> <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>
    </fieldset>
</body>
</html>
