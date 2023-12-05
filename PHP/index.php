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
        <h1 style="text-align: center;">Thêm chuyến bay</h1>
        <label>id</label><br>
        <input class="info" type="text" name="id" required ><br>
        <label>origin</label><br>
        <input class="info" type="text" name="origin" required ><br>
        <label>destination</label><br>
        <input class="info" type="text" name="destination" required ><br>
        <label>duration</label><br>
        <input class="info" type="text" name="duration" required ><br>
       
        <input type="submit" name="submit" value="Thêm"><br>
        
    </form>
</div>

<?php
if (isset($_POST['origin']) && isset($_POST['destination']) && isset($_POST['duration']) && isset($_POST['id'])){
    $origin = $_POST['origin'];
    $duration = $_POST['duration'];
    $destination= $_POST['destination'];
    $id = $_POST['id'];
    
    require('connect.php');
    mysqli_set_charset($conn, 'UTF-8');
    $sql = "INSERT INTO passenger (id, origin, destination, duration) VALUES ('$id', '$origin', '$destination', '$duration')";

    if ($conn->query($sql) === true){
        echo "Thêm thành công";
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>


</body>

</html>