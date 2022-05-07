<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    
    <form action="simpleCalculator.php" method="post">
        Number 1 <input type="number" name="num1" /><br><br>
        Number 2 <input type="number" name="num2"><br><br>
        Operator <input type="text" name="op"> <br><br>
        <input type="submit" value="Submit" />
    </form>

    <?php
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];

        switch($op) {
            case '+':
                echo $num1 + $num2;
                break;
            case '-':
                echo $num1 - $num2;
                break;
            case '*':
                echo $num1 * $num2;
                break;
            case '/':
                echo $num1 / $num2;
                break;
            default:
                echo "Enter valid operator";
                break;
        }
    ?>
</body>
</html>