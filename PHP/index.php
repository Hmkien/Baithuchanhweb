<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            margin:0 auto;
            margin-top:10%;
            width: 30%;
            height: 40em;
            text-align: center;
            border: 1px solid black;
        }
        input[type="submit"]{
            width: 10em;
            height: 4em;
            border: none;
            background-color: orange;
            border-radius: 2em;
            margin-top: 3em;
            color: black;
            font-size: large;

        }
       .info{
            width: 25em;
            margin:5px;
            height: 2em;
        }
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
<div class="container"> 
    <form action="index.php" method="post">
        <h1 style="text-align: center;">Thêm sản phẩm</h1>
        <label>Nhập vào mã sản phẩm:</label><br>
        <input class="info" type="text" name="id" required ><br>
        <label>Nhập vào tên sản phẩm:</label><br>
        <input class="info" type="text" name="name" required ><br>
        <label>Nhập vào só lượng sản phẩm:</label><br>
        <input class="info" type="text" name="quality" required ><br>
        <label>Nhập vào giá sản phẩm:</label><br>
        <input class="info" type="text" name="price" required ><br>
        <input type="submit" name="submit" value="Thêm sản phẩm"><br>
        
    </form>
    <form action="index.php" method="post">
        <input type="submit" name="display" value="Hiển thị dữ liệu">

    </form>
</div>
   <?php
   if(isset($_POST["id"]) &&isset( $_POST["name"]) &&isset($_POST["quality"]) &&isset($_POST["price"])){
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $quality = $_POST["quality"];
    require('connect.php');
    $sql="insert into products (id, name, price, quality) values ('$id', '$name', $price, $quality)";
    if($conn->query($sql)===true ){
        echo "<script>alert('Thêm thành công')</script>";
    }
    else{
        echo "lỗi".$conn->error;
    }
   $conn->close();

   }
   
   if (isset($_POST['display'])) {
    require('connect.php');
    mysqli_set_charset($conn, 'UTF-8');
    $sql = 'select * from products';
    $ketqua = $conn->query($sql);
    if ($ketqua->num_rows > 0) {
        echo "<table> 
            <tr>
                <th>mã sản phẩm</th>
                <th>tên sản phẩm</th>
                <th>số lượng</th>
                <th>giá</th>
            </tr>";

        while ($row = $ketqua->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["id"]."</td>
                    <td>".$row["name"]."</td>
                    <td>".$row["quality"]."</td>
                    <td>".$row["price"]."</td>
                  </tr>";
        }
        echo "</table>"; 
    } else {
        echo "không có dữ liệu";
    }
    $conn->close();
}

   ?>
</body>

</html>