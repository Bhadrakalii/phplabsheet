<!-- WAP to add, subtract, multiply and divide two numbers. -->

<!DOCTYPE html>
<html>
<head>
    <title>Add subtract multiply divide</title>
</head>
<body>
    <h2>Add subtract multiply divide</h2>
    <form method="post">
        
        Enter Number 1: <input type="number" name="num1"><br>
        Enter Number 2: <input type="number" name="num2"><br>
        
        <label for="operator">Choose operator:</label>
        <select id="operator" name="operator" width="200">
            <option value="1" selected>+</option>
            <option value="2">-</option>
            <option value="3">*</option>
            <option value="4">/</option>
        </select>

        <input type="submit" value="Calculate">

    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $operator = $_POST["operator"];
        $result=0;

        switch($operator){
            case 1:
                $result = $num1 + $num2;
                echo "Addition of $num1 and $num2 is $result";
                break;
            case 2:
                $result = $num1 - $num2;
                echo "Subtraction of $num1 and $num2 is $result";
                break;
            case 3:
                $result = $num1 * $num2;
                echo "Multiplication of $num1 and $num2 is $result";
                break;
            case 4:
                $result = $num1 / $num2;
                echo "Division of $num1 and $num2 is $result";
                break;
            default:
                echo "Invalid selection";
        }

    }
    ?>

</body>
</html>
