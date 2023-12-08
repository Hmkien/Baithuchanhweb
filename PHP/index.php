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
<form method="post" action="index.php">
    <label>id</label><br>
    <input type="text" name="id" required ><br>
    <label>Name</label><br>
    <input type="text" name="name" placeholder="name"><br>
    <label>quantity</label><br>
    <input type="text" name="quantity" placeholder="quantity"><br>
    <label>price</label><br>
    <input type="text" name="price" ><br>
    <input type="submit" value="Cập nhật">

</form>
<?php
if(isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["quantity"]) && isset($_POST["price"])){
    $id = $_POST["id"];
    require('connect.php');
    
    // Tạo câu lệnh cập nhật
    $sql = "UPDATE products SET";
    
    // Kiểm tra và thêm các trường cần cập nhật nếu có giá trị từ biểu mẫu
    if(!empty($_POST["name"])){
        $newname = $_POST["name"];
        $sql .= " name='$newname',";
    }
    if(!empty($_POST["quantity"])){
        $newquantity = $_POST["quantity"];
        $sql .= " quality='$newquantity',";
    }
    if(!empty($_POST["price"])){
        $newprice = $_POST["price"];
        $sql .= " price='$newprice',";
    }
    
    $sql = rtrim($sql, ',');
    $sql .= " WHERE id='$id'";
    
    // Thực hiện câu lệnh UPDATE
    if($conn->query($sql) === TRUE){
        echo "Cập nhật thành công";
    } else {
        echo "Thất bại: ".$conn->error;
    }
    
    $conn->close();
}
?>


</body>
</html>