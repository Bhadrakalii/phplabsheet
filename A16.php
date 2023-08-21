<!-- WAP to find print numbers from 1 to 10. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Numbers from 1 to 10</title>
</head>
<body>
    <form action="" method="post">
        
        <h1>Print Numbers from 1 to 10 </h1>

        <input type="submit" value="print">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            for ($i=1; $i<=10; $i++)
                echo "$i<br>";
        }
        
        
    ?>

</body>
</html>