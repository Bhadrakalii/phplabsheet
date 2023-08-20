<!-- WAP to find largest among two numbers. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of rectangle</title>
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

        <input type="submit" value="check">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            
            if($num1>$num2){
                echo"<h1>$num1 is greater than $num2</h1>";
            }
            elseif($num1==$num2) {
                echo"<h1>Equal</h1>";
            }

            else
                echo"<h1>$num2 is greater than $num1</h1>";
        
        }

    ?>
</body>
</html>