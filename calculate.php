
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = 'Nuk mund të ndahet me zero!';
            }
            break;
        default:
            $result = 'Gabim në zgjedhjen e veprimit.';
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezultati</title>
    <link rel="stylesheet" href="styles.css">
    <div class="container">
        <h2>Rezultati</h2>
        <p>Rezultati është: <?php echo $result; ?></p>
        <a href="index.html">; Kthehu</a>
    </div>
</body>
</html>
