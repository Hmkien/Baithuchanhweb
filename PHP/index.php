<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="index.php">
<label>First Number</label><br>
<input type="text" name="first"><br>
<label>Second Number</label><br>
<input type="text" name="second"><br>
<input type="submit" value="+"name="+">
<input type="submit" value="-"name="-">
<input type="submit" value="x"name="x">
<input type="submit" value="/"name="/">
</form>
<?php 
if(isset($_POST['+'])){
$kq=$_POST['first']+$_POST['second'];
echo $kq;

}
if(isset($_POST['-'])){
    $kq=$_POST['first']+$_POST['second'];
    echo $kq;
    
    }
if(isset($_POST['x'])){
    $kq=$_POST['first']+$_POST['second'];
    echo $kq;
        
        }
if(isset($_POST['/'])){
    $kq=$_POST['first']+$_POST['second'];
    echo $kq;
            
}

?>


</body>
</html>