<?php
require('connect.php');
$addsql="insert into products (id,name,quality,price) values('DU05','Pepsi','10','5000')";
if($conn->query($addsql) === TRUE) {
    echo "Thành công";
}
else {
echo"thêm ".$addsql."bị lỗi".$conn->error;
    }

$conn->close();
?>