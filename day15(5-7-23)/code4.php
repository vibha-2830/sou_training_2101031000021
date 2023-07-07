<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a="123.abc";
    echo "type of a is:".gettype($a)."<br>";
    settype($a,"int");
    echo "After conversion type of a is:".gettype($a);
    ?>
</html>