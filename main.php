<?php require_once(__DIR__.'/math.php');

    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['process'])) {
        $math = new Math;
        $result = 0;
        switch(strtolower($_POST['process'])) {
            case 'add':
                $result = $math->setA($_POST['a'])
                    ->setB($_POST['b'])
                    ->add();
                break;
            case 'subtract':
                $result = $math->setA($_POST['a'])
                    ->setB($_POST['b'])
                    ->subtract();
                break;
            case 'multiply':
                $result = $math->setA($_POST['a'])
                    ->setB($_POST['b'])
                    ->multiply();
                break;
            case 'divide':
                $result = $math->setA($_POST['a'])
                    ->setB($_POST['b'])
                    ->divide();
                break;

        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
    <form method="post">
        <p><input type="text" id="a" name="a" /></p>
        <p><input type="text" id="b" name="b" /></p>
        <p>
            <input type="submit" name="process" value="Add" id="add" />
            <input type="submit" name="process" value="Subtract" id="subtract" />
            <input type="submit" name="process" value="Multiply" id="multiply" />
            <input type="submit" name="process" value="Divide" id="divide" />
        </p>
    </form>
    <div id="result"><?php echo $result; ?></div>
</body>
</html>


