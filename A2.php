<!-- WAP to find sum of two numbers. -->

<!DOCTYPE html>
<html>
<head>
    <title>Product of Two Numbers</title>
</head>
<body>
    <h2>Product of Two Numbers</h2>
    <form method="post">
        Enter Number 1: <input type="number" name="num1"><br>
        Enter Number 2: <input type="number" name="num2"><br>
        <input type="submit" value="Calculate Sum">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $product = $num1 * $num2;
        echo "<h3>The Product of $num1 and $num2 is: $product</h3>";
    }
    ?>
</body>
</html>

