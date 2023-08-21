<!-- WAP to find sum of numbers from 5 to 100. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find sum of numbers from 5 to 100</title>
</head>
<body>
    <form action="" method="post">
        
        <h1>Find Sum of numbers from 5 to 100 </h1>

        <input type="submit" value="Find">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $sum = 0;
            
            for ($i=5; $i<=100; $i++){
                $sum=$sum+$i;
            }    
                
        echo "<h1>The sum of numbers from 5 to 100 is $sum";
        
    }
            
    ?>

</body>
</html>