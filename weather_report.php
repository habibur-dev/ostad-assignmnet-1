<!DOCTYPE html>
<html>
<head>
    <title>Weather Report</title>
</head>
<body>
    <h1>Weather Report</h1>
    <form method="post">
        <label for="temperature">Enter Temperature (Celsius):</label>
        <input type="number" name="temperature" id="temperature" required><br>
        <input type="submit" name="check" value="Check Weather">
    </form>

    <?php
    if(isset($_POST['check'])) {
        $temperature = $_POST['temperature'];

        if ($temperature <= 0) {
            echo "<p>It's freezing!</p>";
        } elseif ($temperature <= 15) {
            echo "<p>It's cool.</p>";
        } else {
            echo "<p>It's warm.</p>";
        }
    }
    ?>
</body>
</html>
