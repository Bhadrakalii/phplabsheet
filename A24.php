<!-- WAP to print following Fibonacci series. 1, 1, 2, 3, 5, 8, ........ upto 15 terms. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci series</title>
</head>
<body>
    <form action="" method="post">
        
        <h1>Fibonacci Series upto 15th term</h1>

        <input type="submit" value="Print">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $first = 0;
            $second = 1;

            echo "$first, $second";

            for ($i = 2; $i < 15; $i++) {
            $next = $first + $second;
            echo ", $next";
            $first = $second;
            $second = $next;

            } 
    }
            
    ?>

</body>
</html>