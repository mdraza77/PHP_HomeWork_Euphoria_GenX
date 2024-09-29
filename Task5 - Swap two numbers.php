<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Number Swapping</title>
</head>
<body>
    <h1>Number Swapping</h1>
    <form method="post">
        <label for="num1">Enter first number:</label>
        <input type="number" id="num1" name="num1" required><br><br>
        <label for="num2">Enter second number:</label>
        <input type="number" id="num2" name="num2" required><br><br>
        <input type="submit" value="Swap Numbers">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        echo "<p>Before swapping: num1 = $num1, num2 = $num2</p>";

        // Swapping logic
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;

        echo "<p>After swapping: num1 = $num1, num2 = $num2</p>";
    }
    ?>
</body>
</html>
