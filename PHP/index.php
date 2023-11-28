<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function HienThi($List_image){
        foreach ($List_image as $key) {
            echo"<img src='../image/$key' width='150px' height='150px' alt='$key'>";
    }
}
$images=array('team-1.jpg','team-2.jpg','team-3.jpg','team-4.jpg');
HienThi($images);

    ?>
    <h1>function</h1>
    <?php
    $images=array('team-1.jpg','team-2.jpg');
    HienThi($images);
    ?>
</body>
</html>