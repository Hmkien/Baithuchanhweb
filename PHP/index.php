<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Hoán đối tiền tệ</h1>
<form method="post" action="index.php">
<label>Nhập vào số muốn hoán đối</label><br>
<input type="text" name="inputt" required><br>
<select name="type-money">
    <option value="USD">USD</option>
    <option value="EUR">EUR</option>
    <option value="JPY">JPY</option>
    <option value="SGP">SGP</option>
</select>
<br>
<input type="submit" value="Chuyển đổi">
</form>
<?php
if(isset($_POST['inputt']) && isset($_POST['type-money'])) {
    $tien = $_POST['inputt'];
    $type = $_POST['type-money'];
    $donVi = array('USD' => 23000, 'EUR' => 27000, 'SGP' => 17000, 'JPY' => 120);
    echo "Với " . $tien."" .$type ." bằng " . $tien * $donVi[$type]."VND";
}
?>

</body>
</html>