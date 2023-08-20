<!-- WAP to area of rectangle. [area=l*b] -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area of rectangle</title>
</head>
<body>
    <form action="" method="post">
        <label for="length">
            Enter Length: 
        </label>
        <input type="text" name="length"><br>

        <label for="breadth">
            Enter breadth
        </label>
        <input type="text" name="breadth"><br>

        <input type="submit" value="calculate">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $length = $_POST["length"];
            $breadth = $_POST["breadth"];
            

            $area = 0;

            $area = $length*$breadth;

            echo"<h1>The Area of Rectangle is $area</h1>";
          
        }

    ?>
</body>
</html>