<!-- WAP to find sum of two numbers. -->

<!DOCTYPE html>
<html>
<head>
    <title>Sum of Two Numbers</title>
</head>
<body>
    <h2>Sum of Two Numbers</h2>
    <form method="post">
        Enter Number 1: <input type="number" name="num1"><br>
        Enter Number 2: <input type="number" name="num2"><br>
        <input type="submit" value="Calculate Sum">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $sum = $num1 + $num2;
        echo "<h3>The sum of $num1 and $num2 is: $sum</h3>";
    }
    ?>
</body>
</html>

