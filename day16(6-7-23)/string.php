<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <?php
    $a="Welcome to PHP Function";
    echo $a."<br>";
    echo strlen($a)."<br>";
    echo strtoupper($a)."<br>";
    echo ord($a)."<br>";
    echo str_replace("o","@",$a);
    ?>
</body>
</html>