<!-- WAP to input CP and SP and check profit or loss. Also find profit or loss amount. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Profit or Loss</title>
</head>
<body>
    <form action="" method="post">
        <label for="cost_price">
            Enter Cost Price: 
        </label>
        <input type="text" name="cp"><br>

        <label for="selling_price">
            Enter Selling Price
        </label>
        <input type="text" name="sp"><br>

        <input type="submit" value="check">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $cp = $_POST["cp"];
            $sp = $_POST["sp"];

            $profit = $sp-$cp;
            $loss= $cp-$sp;
            
            if($sp>$cp){
                echo"<h1>Profit of Rs $profit</h1>";
            }
            elseif($sp==$cp) {
                echo"<h1>Nor profit Nor loss</h1>";
            }

            else
                echo"<h1>Loss of Rs $loss</h1>";
        
        }

    ?>
</body>
</html>