<!--tempconversion.php-->
<?php
    //Setting the error message variable
    $errorMessage='';
    //Shows results if data is filled in
    if(isset($_POST["tTemperature"])) {
        //Validation
        //Error message if both inputs are empty
        if(!is_numeric($_POST["tTemperature"]) && !$_POST["rRadio"]){
                $errorMessage='Please input a temperature and conversion type.';
        //Error message if temperature is empty
        } else if(!is_numeric($_POST["tTemperature"])){
                $errorMessage='Please input a temperature.';
        //Error message if radio is empty
        } else if(!$_POST["rRadio"]){
                $errorMessage='Please select a conversion type';
        }

        if(isset($_POST["tTemperature"]) && isset($_POST["rRadio"])){

                //Defining Variables
                $inputtedTemperature = $_POST["tTemperature"]; // This is the number the user inputs
                $inputtedRadio = $_POST["rRadio"]; // this is the temperature type chosen
                $inputConcat="$inputtedTemperature$inputtedRadio";
                $results1=0; //Variable to store results in
                $results2=0; //Variables to store results in
                $D = '&#176'; //This is a string for degree symbol
                $K = '&#8490'; //K symbol
                $F = 'F';
                $C = 'C';

                //Input checker & Calculations
                //Check's what kind radio button you inputted and does the specific calculations.
                if($_POST["rRadio"]=='F'){    //Fahrenheit Calculations
                        //Fahrenheit to Celsius
                        $FtoC = (($inputtedTemperature - 32) * (5/9));
                        //Fahrenheit to Kelvin
                        $FtoK = (($inputtedTemperature - 32) * (5/9) + 273.15);
                } else if($_POST["rRadio"]=='C') {   //Celsius Calculations
                        //Celsius to Fahrenheit
                        $CtoF = ($inputtedTemperature * (9/5) + 32);
                        //Celsius to Kelvin
                        $CtoK = ($inputtedTemperature + 273.15);
                } else if($_POST["rRadio"]=='K') {    //Kelvin Calculations
                        //Kelvin to Fahrenheit
                        $KtoF = ($inputtedTemperature - 273.15) * (9/5) + 32;
                        //Kelvin to Celsius
                        $KtoC = ($inputtedTemperature - 273.15);
                }
                
                //Results
                //Checks the inputted radio button and stores the results
                if($_POST["rRadio"]=='F'){
                        $results1 = $FtoC;
                        $results2 = $FtoK;
                } else if($_POST["rRadio"]=='C') {
                        $results1 = $CtoF;
                        $results2 = $CtoK;
                } else if($_POST["rRadio"]=='K') {
                        $results1 = $KtoF;
                        $results2 = $KtoC;
                }

                //Formatting
                //Grabs the result and formats to X.00 + the Radio type + Degree
                if($_POST["rRadio"]=='F'){
                        $results1 = number_format($results1, 2);
                        $results2 = number_format($results2, 2);
                } else if($_POST["rRadio"]=='C') {
                        $results1 = number_format($results1, 2);
                        $results2 = number_format($results2, 2);
                } else if($_POST["rRadio"]=='K') {
                        $results1 = number_format($results1, 2);
                        $results2 = number_format($results2, 2);
                }
        }
        
}
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
    </body>
</html>