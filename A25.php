<!-- Pattern A -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern A</title>
</head>
<body>
    <form action="" method="post">
        
        <h1>Pattern A</h1>

        <input type="submit" value="Print">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            for($i=1;$i<=5;$i++){

                for($j=1;$j<=$i;$j++)
                    echo"*";
                echo "<br>";
            }
                

    }
            
    ?>

</body>
</html>