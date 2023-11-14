<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <h1> Hoán đổi tiền tệ</h1>
    <label for="first">nhập vào số tiền cần đổi</label><br>
    <input type="text" name="firt" required>
    <label>Loại tiền:</label><br>
    <select name="name">
        <option value="USD">USD</option>
        <option value="AUD">AUD</option>
        <option value="JPY">JPY</option>
        <option value="EUR">EUR</option>
    </select>
    <input type="submit" value="Chuyển đổi">
</form>
<?php 
if(isset($_POST["firt"]) &&isset($_POST["name"])){
    $tien=(float)$_POST["firt"] ;
    $ten=$_POST["name"] ;
    if($_POST["name"]== "USD"){
        $kq=23000*$tien;
        echo"Kết quả=$kq";
        }
    elseif($_POST["name"]== "AUD"){
        $kq= 17000*$tien;
        echo "Kết quả=$kq";
    }
    elseif($_POST["name"]== "JPY"){
        $kq=200*$tien;
        echo "Kết quả=$kq";
    }
    else{
        $kq= 27000*$tien;
        echo"Kết quả=$kq";
    }
    }
?>
</body>
</html>