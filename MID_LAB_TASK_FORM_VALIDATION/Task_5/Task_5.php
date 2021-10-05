<?php
$BloodGroup = "";
$bloodgrouperror = "";
if (($_SERVER["REQUEST_METHOD"] == "POST")) {
    if (empty($_POST["bloodgroup"])) {
        $bloodgrouperror = "One needs to be Selected";
    } else {
        $BloodGroup = test_input($_POST["bloodgroup"]);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<html>

<head>
    <title>BLOOD GROUP</title>
</head>

<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <div>
                <?php if ($bloodgrouperror == "") {
                    echo $BloodGroup;
                }
                ?>
                <fieldset>
                    <legend><label>BLOOD GROUP&nbsp;</label></legend>

                    <select name="bloodgroup">
                        <option disabled selected value> Select An Option </option>
                        <option value="A Positive">A+</option>
                        <option value="A Negative">A-</option>
                        <option value="B Positive">B+</option>
                        <option value="B Negative">B-</option>
                        <option value="B Negative">B-</option>
                        <option value="AB Positive">AB+</option>
                        <option value="AB Negative">AB-</option>
                        <option value="O Positive">O+</option>
                        <option value="O Negative">O-</option>
                    </select>
                    <span class="red">
                        <?php
                        if ($bloodgrouperror != "") {
                            echo "* - ";
                            echo $bloodgrouperror;
                        }
                        ?>
                    </span>
                    <div style=margin-top:20px;>
                        <input type="submit" value="Submit">
                    </div>
                </fieldset>
            </div>
    </form>

</body>

</html>