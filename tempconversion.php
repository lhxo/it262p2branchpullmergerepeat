<!--tempconversion.php-->
<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>P1 - Temperature Conversion</title>
        <meta name="robots" content="noindex,nofollow" />
        <meta name="viewport" content="width=device-width" />
        <meta charset="utf-8" />
        <link rel="stylesheet" href="temp.css"/>
    </head>
    <body>
        <h1>Temperature Converter</h1>
        <form action="" method="POST">
            <p>Temperature to Convert: <input type="text" name="tTemperature" /></p>
            <!--Error message appears clear until validation-->
            <p class="error-message"><?php echo $errorMessage?></p>
            <fieldset>
                <legend>Please Select A Conversion Type</legend>
                <p><input type="radio" name="rRadio" value="F" />Fahrenheit</p>
                <p><input type="radio" name="rRadio" value="C" />Celsius</p>
                <p><input type="radio" name="rRadio" value="K" />Kelvin</p>
            </fieldset>
            <p><input type="submit" value="Convert"/></p>
        </form>
    </body>
    <?php
        //Output
        if(isset($_POST["tTemperature"]) && isset($_POST["rRadio"])) {
                if(is_numeric($inputtedTemperature) && $inputtedRadio == "F") {
                        echo "<p>Your inputted temperature is: $inputConcat</p>";
                        echo "<p>$inputConcat converts to $results1$D$C and $results2$K</p>";
                        } elseif (is_numeric($inputtedTemperature) && $inputtedRadio == "C") {
                        echo "<p>Your inputted temperature is: $inputConcat</p>";
                        echo "<p>$inputConcat converts to $results1$D$F and $results2$K</p>";
                        } elseif (is_numeric($inputtedTemperature) && $inputtedRadio == "K") {
                        echo "<p>Your inputted temperature is: $inputConcat</p>";
                        echo "<p>$inputConcat converts to $results1$D$F and $results2$D$C</p>";
                        } else {
                        echo "<p>Your inputted temperature is: ___</p>";
                        echo "<p>___ converts to ___ and ___</p>";
                        }
        }
        ?>
</html>
