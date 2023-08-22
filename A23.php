<!-- WAP to find factorial of a given number. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find factorial of a number</title>
</head>
<body>
    <form action="" method="post">
        
        <h1>Find factorial</h1>

        <label for="number">
            Enter Number: 
        </label>
        <input type="text" name="number"><br>

        <input type="submit" value="Factorial">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $number = $_POST["number"];
            
            $fact=1;

            while($number>=1){

                $fact=$fact*$number;

                $number = $number - 1;
            }
            
            echo "Factorial is $fact";
                
        
    }
            
    ?>

</body>
</html>