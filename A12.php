<!-- WAP to check whether a number is divisible by 7 or not. -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check whether a number is divisible by 7 or not</title>
</head>
<body>
    <form action="" method="post">
        <label for="number">
            Enter Number: 
        </label>
        <input type="text" name="number"><br>

        <input type="submit" value="check">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $number = $_POST["number"];
            
            if($number%7==0)
                echo "<h1>$number is divisible by 7</h1>";

            else
                echo"<h1>$number is not divisible by 7</h1>";

        }

    ?>
</body>
</html>