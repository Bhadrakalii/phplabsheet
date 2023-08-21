<!-- WAP to check whether a number a number is divisible by 7 but not by 13. -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check whether a number is divisible by 7 and 13</title>
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
            
            if($number%7==0 && $number%13==0)
                echo "<h1>$number is divisible by 7 and 13</h1>";
            elseif($number%7==0 && $number%13!=0)
                echo "<h1>$number is divisible by 7 but not 13</h1>";
            elseif($number%7!=0 && $number%13==0)
                echo "<h1>$number is divisible by 13 but not 7</h1>";
            else
                echo"<h1>$number is not divisible by 7 and 13</h1>";

        }

    ?>
</body>
</html>