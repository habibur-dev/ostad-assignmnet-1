<!DOCTYPE html>
<html>
<head>
    <title>Grade Calculator</title>
</head>
<body>
    <?php
    if(isset($_POST['calculate'])) {
        $subject1 = $_POST['subject1'];
        $subject2 = $_POST['subject2'];
        $subject3 = $_POST['subject3'];


    }
    ?>
    <div class="grade-calculator-section">
        <div class="page-title">
            <h1>Grade Calculator</h1>
        </div>
        <form method="post">
            <div class="form-item">
                <label for="subject1">Subject 1:</label>
                <input type="number" name="subject1" id="subject1" min="0" max="100" required>
            </div>

            <div class="form-item">
                <label for="subject2">Subject 2:</label>
                <input type="number" name="subject2" id="subject2" min="0" max="100" required>
            </div>

            <div class="form-item">
                <label for="subject3">Subject 3:</label>
                <input type="number" name="subject3" id="subject3" min="0" max="100" required>
            </div>

            <div class="form-item">
                <input type="submit" name="calculate" value="Calculate Grade">
            </div>
            
        </form>

        <div class="result">
        <?php

            $totalMarks = 0;
            $average = 0;
            $grade = '';
                
            $totalMarks = $subject1 + $subject2 + $subject3;
            $average = $totalMarks / 3;

            
            if ($average >= 80 && $average <= 100) {
                $grade = 'A+';
            } elseif ($average >= 70 && $average < 80) {
                $grade = 'A';
            } elseif ($average >= 60 && $average < 70) {
                $grade = 'A-';
            } elseif ($average >= 50 && $average < 60) {
                $grade = 'B';
            } elseif ($average >= 40 && $average < 50) {
                $grade = 'C';
            } elseif ($average >= 33 && $average < 40) {
                $grade = 'D';
            } else {
                $grade = 'F';
            }

            //to avoid F grade, each subject need to at least 33
            if ($subject1 < 33 || $subject2 < 33 || $subject3 < 33) {
                $grade = "F (One or more subjects have less than 33)";
            }
            
            $average = number_format($average, 2);

            if($totalMarks && $average && $grade){
                echo "<p>Total Marks: $totalMarks</p>";
                echo "<p>Average: $average</p>";
                echo "<p>Grade: $grade</p>";
            }
            
        ?>
        </div>
    </div>

    
</body>
</html>
