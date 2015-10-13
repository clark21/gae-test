<?php require_once(__DIR__.'/math.php');
$result = '0';
if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['process'])) {
    $math = new Math;
    switch(strtolower($_POST['process'])) {
        case 'add':
            try {
                $result = $math->setA($_POST['a'])
                    ->setB($_POST['b'])
                    ->add();
            } catch(Exception $e) {
                $msg = $e->getMessage();
            }

            break;
        case 'subtract':
            try {
                $result = $math->setA($_POST['a'])
                    ->setB($_POST['b'])
                    ->subtract();
            } catch(Exception $e) {
                $msg = $e->getMessage();
            }

            break;
        case 'multiply':
            try {
                $result = $math->setA($_POST['a'])
                    ->setB($_POST['b'])
                    ->multiply();
            } catch (Exception $e) {
                $msg = $e->getMessage();
            }

            break;
        case 'divide':
            try {
                $result = $math->setA($_POST['a'])
                    ->setB($_POST['b'])
                    ->divide();
            } catch(Exception $e) {
                $msg = $e->getMessage();
            }
            break;

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>
    <?php if(isset($msg)): ?>
    <p><?php echo $msg; ?></p>
    <?php endif; ?>
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


