<!-- WAP to check whether a number is odd or even. -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>check whether a number is odd or even</title>
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
            
            if($number%2==0)
                echo "<h1>$number is Even number</h1>";

            else
                echo"<h1>$number is odd number</h1>";

        }

    ?>
</body>
</html>