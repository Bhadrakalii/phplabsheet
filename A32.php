<!-- WAP to generate Armstrong number from 1 to 100. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Armstrong Number</title>
</head>
<body>
    <form action="" method="post">
        
        <h1> Print Armstrong Number from 1 to 100</h1>

        <input type="submit" value="print">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){

            for($number = 1; $number<=100;$number++){
                
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
                    echo "$number &nbsp";
                }

            }
        }       
            
    ?>

</body>
</html>