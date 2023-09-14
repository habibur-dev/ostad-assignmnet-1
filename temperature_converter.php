<!DOCTYPE html>
<html>
<head>
    <title>Temperature Converter</title>
    <style>
        body {
            background-color: #6E7889;
            color: #E6EBEE;
        }

        section.temp-form-wrapper {
            background-color: #393B45;
            height: auto;
            width: 500px;
            margin: 10vh auto;
            border-radius: 25px;
            padding-bottom: 1px;
            box-shadow: 2px 2px 5px #4069E2;
        }

        .page-title {
            text-align: center;
            width: 100%;
            background-color: #E6EBEE;
            border-radius: 25px 25px 0 0;
            color: #393B45;
            padding: 30px 0;
            font-weight: 800;
            margin: 0;
        }

        .page-title h1{
            margin: 0;
            padding: 0;
        }

        form {
            padding: 40px 30px;
            max-width: 200px;
            margin: auto;
            overflow: hidden;
        }

        form * {
            display: block;
            margin: auto;
            text-align: center;
            margin-bottom: 15px;
            width: 100%;
        }

        input#temperature, select#conversion, input[type="submit"] {
            border: none;
            outline: none;
            padding: 10px;
            font-size: 17px;
        }

        input#temperature {
            width: 180px !important;
        }

        input[type="submit"] {
            background: #4069E2;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
            $temperature = floatval($_POST["temperature"]);
            $conversionType = $_POST["conversion"];
            $result = 0;

        }
    ?>
    <section class="temp-form-wrapper">
        <div class="page-title">
            <h1>Temperature Converter</h1>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="temperature">Enter Temperature:</label>
            <input type="number" name="temperature" id="temperature" required step="0.01">
            
            <label for="conversion">Select Conversion:</label>
            <select name="conversion" id="conversion" required>
                <option value="celsiusToFahrenheit">Celsius to Fahrenheit</option>
                <option value="fahrenheitToCelsius">Fahrenheit to Celsius</option>
            </select>
            
            <input type="submit" name="submit" value="Convert">
            <div class="result">
                <?php
                
                if ($conversionType === "celsiusToFahrenheit") {
                    $result = ($temperature * 9/5) + 32;
                    echo "<p>{$temperature} degrees Celsius is equal to {$result} degrees Fahrenheit.</p>";
                } elseif ($conversionType === "fahrenheitToCelsius") {
                    $result = ($temperature - 32) * 5/9;
                    echo "<p>{$temperature} degrees Fahrenheit is equal to {$result} degrees Celsius.</p>";
                } else {
                    echo "<p>Invalid conversion type selected.</p>";
                }
                
                ?>
            </div>
        </form>
    </section>

    
</body>
</html>
