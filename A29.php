<!-- WAP to show the use of ternary operator. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternary Operator</title>
</head>
<body>
    <form action="" method="post">
        
        <h1>Ternary Operator</h1>

        <label for="number">
            Enter Number: 
        </label>
        <input type="text" name="number"><br>

        <input type="submit" value="check">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $number = $_POST["number"];
            

            $message = ($number % 2 == 0) ? "Even" : "Odd";

            echo "$number is $message.";

        }   
            
    ?>

</body>
</html>