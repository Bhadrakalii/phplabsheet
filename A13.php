<!-- WAP to check whether a number is exactly divisible by 5 and 10. -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check whether a number is divisible by 5 and 10</title>
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
            
            if($number%5==0 && $number%10==0)

                echo "<h1>$number is divisible by 5 and 10</h1>";
            
            elseif($number%5==0 && $number%10!=0)
                echo "<h1>$number is divisible by 5 but not 10</h1>";
            
            else
                echo"<h1>$number is not divisible by 5 and 10</h1>";

        }

    ?>
</body>
</html>