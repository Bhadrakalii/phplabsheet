<!-- Pattern B -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern B</title>
</head>
<body>
    <form action="" method="post">
        
        <h1>Pattern B</h1>

        <input type="submit" value="Print">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            for($i=5;$i<=1;$i--){

                for($j=$i;$j<=$i;$j--)
                    echo"*";
                echo "<br>";
            }
                

    }
            
    ?>

</body>
</html>