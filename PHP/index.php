<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 
if(isset($_GET['username']) && isset($_GET['password'])){
$a = (float)$_GET['username'];
$b=(float)$_GET['password'];
$tong=$a + $b;
echo $tong ;}

?>  
</body>
</html>

