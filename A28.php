<!-- WAP to print prime numbers from 1 to 100. -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Numbers from 1 to 100</title>
</head>
<body>
    <form action="" method="post">
        
        <h1>Print Numbers from 1 to 100</h1>

        <input type="submit" value="print">

    </form>

    <?php

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            
            for($num=2; $num<100;$num++){
                $isPrime = true;
            
                for ($i = 2; $i < $num; $i++) {
                    if ($num % $i == 0) {
                        $isPrime = false;
                        break;    
                    }
                }
            
                if($isPrime){
                    echo "$num &nbsp";
                }
            }    
        }    
            
    ?>

</body>
</html>