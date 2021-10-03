<?php 

    if(isset($_REQUEST['submit'])){
        $degree = $_REQUEST['mydegree'];
        if($degree != ""){
            echo $degree;
        }else{
            echo "Null value...";
        }
    }

?>

<html>
<head>
    <title>degree</title>
</head>
<body>
<fieldset>
<legend>degree</legend>
    <form method="post" >
        <input type="checkbox" id="Ssc" name="mydegree" value="SSC">
        <label for="Ssc">ssc</label>
        <input type="checkbox" id="Hsc" name="mydegree" value="HSC">
        <label for="Hsc">hsc</label>
        <input type="checkbox" id="Bsc." name="mydegree" value="BSc">
        <label for="Bsc.">bsc</label>
<input type="checkbox" id="Msc." name="mydegree" value="MSc">
        <label for="Msc.">msc</label>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>
    </fieldset>
</body>
</html>