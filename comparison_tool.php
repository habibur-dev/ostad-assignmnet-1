<!DOCTYPE html>
<html>
<head>
    <title>Number Comparison Tool</title>
</head>
<body>
    <h1>Number Comparison Tool</h1>
    <form method="post">
        <label for="num1">Enter Number 1:</label>
        <input type="number" name="num1" id="num1" required><br>

        <label for="num2">Enter Number 2:</label>
        <input type="number" name="num2" id="num2" required><br>

        <input type="submit" name="compare" value="Compare">
    </form>

    <?php
    if(isset($_POST['compare'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $largerNumber = ($num1 > $num2) ? $num1 : $num2;

        echo "<p>The larger number is: $largerNumber</p>";
    }
    ?>
</body>
</html>
