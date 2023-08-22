<!-- 100, 98, 96, 94, ............. Upto 10 terms. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Pattern</title>
</head>
<body>
    <form action="" method="post">
        
        <h1>Even pattern</h1>

        <input type="submit" value="print">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $result=100;
            for ($i = 1; $i <= 10; $i++) {
                echo "$result , &nbsp";
                $result=$result-2;

            }    
                
        
    }
            
    ?>

</body>
</html>