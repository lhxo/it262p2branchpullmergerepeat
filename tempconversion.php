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
</html>
