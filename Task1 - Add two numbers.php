<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum Calculator</title>
</head>
<body>
    <h1>Sum Calculator</h1>
    <form method="post">
        <label for="num1">Enter first number:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        <label for="num2">Enter second number:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        <input type="submit" value="Calculate Sum">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Input two numbers from the user
        $num1 = isset($_POST['num1']) ? (float)$_POST['num1'] : 0;
        $num2 = isset($_POST['num2']) ? (float)$_POST['num2'] : 0;

        // Calculate the sum
        $sum = $num1 + $num2;

        // Output the result
        echo "<p>Sum: " . htmlspecialchars($sum) . "</p>";
    }
    ?>
</body>
</html>