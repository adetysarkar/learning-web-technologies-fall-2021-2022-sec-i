<?php 

    if(isset($_REQUEST['submit'])){
        $email = $_REQUEST['myemail'];
        if($email != ""){
            echo $email;
        }else{
            echo "Null value...";
        }
    }

?>

<html>
<head>
    <title>email</title>
</head>
<body>
<fieldset>
<legend>email</legend>
    <form method="post" >
        <input type="text" name="myemail" value="<?php if(isset($email)){ echo $email; }?>"/> <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>
    </fieldset>
</body>
</html>
