<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bài tập</title>
</head>
<body>
    <?php 
    $images=array('team-1.jpg','team-2.jpg','team-3.jpg','team-4.jpg');
    foreach($images as $image){
        echo "<img src='../image//$image' width='150px' height='150px' alt='$image'>";
    }

    ?>
<h1>Function</h1>
<?php
    $image=array('team-1.jpg','team-2.jpg');
    foreach($image as $i){
        echo "<img src='../image//$i' width='150px' height='150px' alt='$i'>";
    }

    ?>
</body>
</html>