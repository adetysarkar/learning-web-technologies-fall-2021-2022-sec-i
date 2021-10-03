<?php 

    if(isset($_REQUEST['submit'])){
        $degree = $_REQUEST['mydegree'];
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
        <input type="checkbox" id="ssc" name="mydegree" value="<?php if(isset($degree)){ echo $degree; }?>">
        <label for="ssc">SSC</label>
        <input type="checkbox" id="hsc" name="mydegree" value="<?php if(isset($degree)){ echo $degree; }?>">
        <label for="hsc">HSC</label>
        <input type="checkbox" id="bsc" name="mydegree" value="<?php if(isset($degree)){ echo $degree; }?>">
        <label for="bsc">BSc</label>
<input type="checkbox" id="msc" name="mydegree" value="<?php if(isset($degree)){ echo $degree; }?>">
        <label for="msc">MSc</label>

        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>
    </fieldset>
</body>
</html>