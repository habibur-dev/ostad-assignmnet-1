<!DOCTYPE html>
<html>
<head>
    <title>Odd Even Checker</title>
</head>
<body>
    <h1>Odd Even Checker</h1>
    <form method="post">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" id="number" required><br>
        <input type="submit" name="check" value="Check">
    </form>

    <?php
    if(isset($_POST['check'])) {
        $number = $_POST['number'];

        if ($number % 2 == 0) {
            echo "<p>{$number} is an even number.</p>";
        } else {
            echo "<p>{$number} is an odd number.</p>";
        }
    }
    ?>
</body>
</html>
