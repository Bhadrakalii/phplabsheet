<!-- WAP to read a no. & find out if it is Armstrong no. or not. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number</title>
</head>
<body>
    <form action="" method="post">
        
        <h1> Check Armstrong Number</h1>

        <label for="number">
            Enter Number: 
        </label>
        <input type="text" name="number"><br>

        <input type="submit" value="check">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $number = $_POST["number"];

            $number_copy  = $number;
            
            $result = 0;
            
            $len = strlen((string)$number_copy);

            (int)$number_copy;

            while($number_copy!=0){
                $digit = $number_copy % 10;
                
                $mul_count = 0;
                $mul_result = 1;
                
                while($mul_count != $len){
                    $mul_result = $mul_result * $digit;
                    $mul_count++;
                }
                
                $result = $result+$mul_result;
                
                $number_copy = $number_copy / 10; 
            }

            if($number == $result){
                echo "$number is Armstrong Number";
            }

            else{
                echo"$number is not Armstrong Number";
            }
            

        }   
            
    ?>

</body>
</html>