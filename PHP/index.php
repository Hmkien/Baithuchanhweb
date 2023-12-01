<?php
require('connect.php');
$addsql="insert into products (id,name,quality,price) values('DU01','Coca Cola','10','15000')";
$conn->query($addsql);
$conn->close();
?>