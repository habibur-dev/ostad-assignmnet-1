<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post">
        <label for="num1">Enter Number 1:</label>
        <input type="number" name="num1" id="num1" required><br>

        <label for="num2">Enter Number 2:</label>
        <input type="number" name="num2" id="num2" required><br>

        <label for="operation">Select Operation:</label>
        <select name="operation" id="operation">
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
        </select><br>

        <input type="submit" name="calculate" value="Calculate">
    </form>

    <?php
    if(isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        $result = 0;

        switch($operation) {
            case 'addition':
                $result = $num1 + $num2;
                break;
            case 'subtraction':
                $result = $num1 - $num2;
                break;
            case 'multiplication':
                $result = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p>Error: Division by zero is not allowed.</p>";
                }
                break;
            default:
                echo "<p>Error: Invalid operation selected.</p>";
                break;
        }

        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>
