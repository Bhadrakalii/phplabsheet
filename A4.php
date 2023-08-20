<!-- WAP to find simple interest. [si=(p*t*r)/100] -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Simple Interest</title>
</head>
<body>
    <form action="" method="post">
        <label for="principal">
            Enter Principal Amount in Rs: 
        </label>
        <input type="text" name="principal"><br>

        <label for="time">
            Enter Time in Years
        </label>
        <input type="text" name="time"><br>

        <label for="">
            Enter Rate
        </label>
        <input type="text" name="rate"><br>

        <input type="submit" value="calculate">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $principal = $_POST["principal"];
            $time = $_POST["time"];
            $rate = $_POST["rate"];

            $si = 0;

            $si = ($principal*$time*$rate)/100;

            echo"<h1>The Simple Interest is  Rs $si</h1>";
          
        }

    ?>
</body>
</html>