<!-- WAP to print first 15 even numbers. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print 15 even numbers</title>
</head>
<body>
    <form action="" method="post">
        
        <h1>Print 15 Even Numbers</h1>

        <input type="submit" value="print">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $result = 2;
            
            for ($i = 1; $i <= 15; $i++) {

                echo "$result , &nbsp";
                $result=$result+2;

            }    
                
        
    }
            
    ?>

</body>
</html>