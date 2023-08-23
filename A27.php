<!-- WAP to check whether a number is prime or not. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Prime</title>
</head>
<body>
    <form action="" method="post">
        
        <h1>Check Prime</h1>

        <label for="number">
            Enter Number: 
        </label>
        <input type="text" name="number"><br>

        <input type="submit" value="check">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $number = $_POST["number"];
            
            $isPrime = true;
            
            if ($number <= 1) {
                $isPrime = false;
            } else {
                for ($i = 2; $i < $number; $i++) {
                    if ($number % $i == 0) {
                        $isPrime = false;
                        break;
                    }
                }
            }
            
            if ($isPrime) {
                echo "$number is a prime number.";
            } else {
                echo "$number is not a prime number.";
            }
        }   
            
    ?>

</body>
</html>