<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta dob="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task-3</title>
</head>

<body>

    <?php

    $DOB = "";
    $dobError = "";

    if (isset($_POST['Submit'])) {
        $input = $_POST['inputText'];
        $DOB = $input . "<br>";
    }

    if (($_SERVER["REQUEST_METHOD"] == "POST")) {
        $dobday = $_POST["day"];
        $dobmonth = $_POST["month"];
        $dobyear = $_POST["year"];

        if ((empty($_POST["day"])) or (empty($_POST["month"])) or (empty($_POST["year"]))) {
            $dobError = "Enter all the fields";
        } else {
            if (($dobday >= 1 and $dobday <= 31) and ($dobmonth >= 1 and $dobmonth <= 12) and ($dobyear >= 1953 and $dobyear <= 2010)) {
                $DOB = strval($_POST["day"]) . "-" . strval($_POST["month"]) . "-" . strval($_POST["year"]);
            } else {
                $dobError = "Invalid Date Entered [dd - (1-31) mm - (1-12) yy - (1953-2010)]";
            }
        }
    }

    function validateInput($information)
    {
        $information = trim($information);
        $information = stripslashes($information);
        $information = htmlspecialchars($information);
        return $information;
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div>
            <?php if ($dobError == "") {
                echo $DOB;
            }
            ?>
            <fieldset>
                <legend><label>DOB&nbsp;</label></legend>

                <input type="text" id="day" name="day" value="" placeholder="dd" size="3"> -
                <input type="text" id="month" name="month" value="" placeholder="mm" size="3"> -
                <input type="text" id="year" name="year" value="" placeholder="yy" size="5">
                <span class="red">
                    <?php if ($dobError != "") {
                        echo "* - ";
                        echo $dobError;
                    }
                    ?>
                </span>

                <hr>

                <div style=margin-top:20px;>
                    <input type="submit" value="Submit">
                </div>
            </fieldset>
        </div>
    </form>
</body>

</html>