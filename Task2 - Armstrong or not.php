<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Armstrong Number Check</title>
</head>
<body>
    <form method="post">
        <input type="number" name="num" required>
        <input type="submit" value="Check">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST['num'];
        $sum = array_sum(array_map(function($digit) use ($num) {
            return pow($digit, strlen($num));
        }, str_split($num)));
        
        echo $num == $sum ? "$num is Armstrong" : "$num is not Armstrong";
    }
    ?>
</body>
</html>

