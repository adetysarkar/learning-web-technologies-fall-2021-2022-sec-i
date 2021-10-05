<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $Name = "";
    $nameError = "";

    if (isset($_POST['Submit'])) {
        $input = $_POST['inputText'];
        $Name = $input . "<br>";
    }

    if (($_SERVER["REQUEST_METHOD"] == "POST")) {
        $name_words = $_POST["name"];


        if (empty($_POST["name"])) {
            $nameError = "Name is required";
        } else {
            $Name = validateInput($_POST["name"]);
            if ((!preg_match("/^[a-zA-Z-'._ ]*$/", $Name))) {
                $nameError = "Name Must Start with a letter";
            } else {
                $Name = validateInput($_POST["name"]);
                if ((str_word_count($name_words) < 2)) {
                    $nameError = "Minimum Two Words Needed";
                }
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
            <?php if ($nameError == "") {
                echo $Name;
            }
            ?>
            <fieldset>
               
                <input type="text" id="name" name="name" value="" placeholder="NAME" size="15"><span class="red">
                    <?php if ($nameError != "") {
                        echo "* - ";
                        echo $nameError;
                    }
                    ?>
                </span>
                <br>
                <div style=margin-top:20px;>
                    <input type="submit" value="Submit">
                </div>
            </fieldset>

        </div>
    </form>
</body>

</html>