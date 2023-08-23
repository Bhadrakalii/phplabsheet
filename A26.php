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

    <textarea name="" id="" cols="30" rows="10">
        <?php

            if($_SERVER["REQUEST_METHOD"]=="POST"){


                    for($i=1;$i<=5;$i++){
                        
                        echo "\n";

                        for($j=1;$j<=5;$j++){
                    
                            if($j>=$i)
                                echo "*";
                            else
                                echo " ";

                        }

                        
                    }
                    
            }
                
        ?>

    </textarea>

</body>
</html>