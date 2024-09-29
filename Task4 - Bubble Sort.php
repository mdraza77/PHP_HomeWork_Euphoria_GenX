<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bubble Sort</title>
</head>
<body>
    <h1>Bubble Sort</h1>
    <form method="post">
        <label for="numbers">Enter numbers (comma-separated):</label>
        <input type="text" id="numbers" name="numbers" required>
        <input type="submit" value="Sort">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['numbers'];
        $arr = array_map('intval', explode(',', $input));
        
        $n = count($arr);
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
        
        echo "<p>Sorted array: " . implode(', ', $arr) . "</p>";
    }
    ?>
</body>
</html>
