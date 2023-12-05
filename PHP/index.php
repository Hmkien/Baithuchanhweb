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
<<div class="container">
    <form action="index.php" method="post">
        <h1 style="text-align: center;"> </h1>
        <label>Họ và tên</label><br>
        <input type="text" name="name"required><br>
        <label>origin</label><br>
        <input type="text" name="origin" required><br>
        <label>destination</label><br>
        <input type="text" name="destination" required><br>
        <label> duration</label><br>
        <input type="text" name="duration" required><br>
        <input type="submit" name="submit" value="Đăng kí"><br>
        
    </form>
</div>

<?php
if (isset($_POST['origin']) && isset($_POST['destination'])&& isset($_POST['name'])&& isset($_POST['duration'])){
    $origin = $_POST['origin'];
    $destination= $_POST['destination'];
    $name = $_POST['name'];
    $duration = $_POST['duration'];
    require('connect.php');
    mysqli_set_charset($conn, 'UTF-8');
    $sql = "INSERT  into passenger (origin, destination, duration,name ) values('$origin','$destination','$duration','$name')";
    if($conn->query($sql)===true){
        echo "đăng kí thành công";
    } else {
        echo "lỗi".$conn->error;
    }
    $conn->close();
}


?>


</body>

</html>