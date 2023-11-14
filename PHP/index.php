<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
$date=date('d');
$month =date('m');
if(($date== '24')&&($month== '12')){
    echo'<h1>ĐÚNG</h1>';
}else 
echo"<h1> Sai</h1>";

?>  
</body>
</html>

