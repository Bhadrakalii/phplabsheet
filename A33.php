<!-- Compound Interest -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compound Interest</title>
</head>
<body>
    <form action="" method="post">
        
        <h1>Find Compound Interest</h1>

        <label for="principal">
            Enter principal: 
        </label>

        <input type="text" name="principal"><br>

        <label for="rate">
            Enter rate: 
        </label>
        
        <input type="text" name="rate"><br>

        <label for="time">
            Enter time: 
        </label>
        
        <input type="text" name="time"><br>

        <label for="compound_frequency">
            Enter Compound Frequency: 
        </label>
        
        <input type="text" name="n"><br>

        <input type="submit" value="Calculate">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            $p = $_POST["principal"];
            $r = $_POST["rate"];
            $t = $_POST["time"];
            $n = $_POST["n"];

            $amount = $p * (1 + ($r / $n)) ** ($n * $t);
            
            echo "Compound Interest: $amount";

        }
            
    ?>

</body>
</html>