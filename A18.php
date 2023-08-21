<!-- 5, 10, 15, 20, ...... 50 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table of Five</title>
</head>
<body>
    <form action="" method="post">
        
        <h1>Table of Five</h1>

        <input type="submit" value="print">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            
            for ($i = 1; $i <= 10; $i++) {
                $result = 5 * $i;
                echo "$result , &nbsp";
            }    
                
        
    }
            
    ?>

</body>
</html>