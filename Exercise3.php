<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function test($x,$y)
    {
        return($x<=20 || $y>+50)||($y <=20||$x>+50);
    }
    var_dump(test(20,84));echo"<br>";
    var_dump(test(11,45));echo"<br>";
    var_dump(test(25,40));echo"<br>";

?>
</body>
</html>s