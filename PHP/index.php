<?php
require('connect.php');
mysqli_set_charset($conn,'UTF8');
$sql="select * from products";
$ketqua=$conn->query($sql);
if($ketqua->num_rows > 0) {
    echo"<table>
    <tr>
    <th>mã sản phẩm</th>
    <th>tên sản phẩm</th>
    <th>số lượng </th>
    <th>giá </th>
    </tr>"
    ;
    while($row = $ketqua->fetch_assoc()) {
        echo"<tr>
        <td>".$row["id"]."</td>
        <td>".$row["name"]."</td>
        <td>".$row["quality"]."</td>
        <td>".$row["price"]."</td>
        </tr>";
    }
    echo "<style>
    table{
        width:100%;
        boder-collapse:collapse;
    }
    tr,th,td{
        border:1px solid black;
        boder-collapse:collapse;
        text-align:center;

    }
    </style>";
}
else {
    echo"không có dữ liệu";
}
$ketqua->close();
?>