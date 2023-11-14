<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $T= true;
    $F= false;
    echo"T= $T <br>";
    echo"F= $F <br>";
    $check1= 9>3;
    $check2 = 10<4;
    $check3 = $check1 || $check2;
    $check4= $check1 && $check2;
    echo " Check1 =$check1 <br>";
    echo " Check2 =$check2 <br>";
    echo " Check3 =$check3 <br>";
    echo " Check4 =$check4 ";
    ?>
</body>
</html>