<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           table {
            border-collapse: collapse;
            border:1px solid black;

        }
        th,td{
            border: 1px solid black;
        }
        tr:nth-child(odd){
            background-color: lightblue;
        }
        tr:nth-child(even){
            background-color: lightyellow;
        }
    </style>
</head>
<body>

<?php
require('connect.php');
mysqli_set_charset($conn,'utf8');
$sql = "select * from passenger";
$result = mysqli_query($conn, $sql);
$ketqua = $conn->query($sql);
    if ($ketqua->num_rows > 0) {
        if($ketqua->fetch_assoc()) {
        echo "<table> 
            <tr>
                <th>id</th>
                <th>origin</th>
                <th>destination</th>
                <th>duration</th>
            </tr>";

        while ($row = $ketqua->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["origin"]."</td>
                    <td>".$row["destination"]."</td>
                    <td>".$row["duration"]."</td>
                  </tr>";
        }
        echo "</table>"; 
    } else {
        echo "không có dữ liệu";
    }
}
    $conn->close();
    ?>
    </body>
</html>