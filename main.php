<?php require_once(__DIR__.'/math.php'); ?>
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


