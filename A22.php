<!-- WAP to find sum of odd numbers from 1 to 100. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sum of odd numbers</title>
</head>
<body>
    <form action="" method="post">
        
        <h1>Sum of odd numbers from 1 to 100</h1>

        <input type="submit" value="print">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $result = 0;
            
            for ($i = 1; $i <= 100; $i=$i+2) {
                
                $result = $result+$i;

            }
            
            echo "The sum of odd numbers from 1 to 100 is $result  , &nbsp";
                
        
    }
            
    ?>

</body>
</html>