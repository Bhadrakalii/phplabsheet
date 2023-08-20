<!-- WAP to find area of circle. [area=pi*r*r] (use pi as constant) -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of circle</title>
</head>
<body>
    <form action="" method="post">
        <label for="radius">
            Enter radius: 
        </label>
        <input type="text" name="radius"><br>

        <input type="submit" value="calculate">
    </form>

    <?php
        define("PI", 3.14);
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $radius = $_POST["radius"];
            

            $area = 0;

            $area = PI*$radius*$radius;

            echo"<h1>The Area of Circle is is $area</h1>";
          
        }

    ?>
</body>
</html>