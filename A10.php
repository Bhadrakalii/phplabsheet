<!-- WAP to find smallest among three numbers. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smallest Among three numbers</title>
</head>
<body>
    <form action="" method="post">
        <label for="first_number">
            Enter First Number: 
        </label>
        <input type="text" name="num1"><br>

        <label for="second_number">
            Enter Second Number
        </label>
        <input type="text" name="num2"><br>

        <label for="third_number">
            Enter Third Number
        </label>
        <input type="text" name="num3"><br>

    
        <input type="submit" value="check">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $num3 = $_POST["num3"];

            $min = ($num1 <= $num2) 
                    ? (($num1 <= $num3) ? $num1 : $num3) 
                    : (($num2 <= $num3) ? $num2 : $num3);

            echo "<h1>The smallest number is: $min</h1>";
        }

    ?>
</body>
</html>