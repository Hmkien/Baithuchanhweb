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
?>
</body>
</html>