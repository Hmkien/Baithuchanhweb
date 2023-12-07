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
        <lable>Name</lable><br>
        <input type="text" name="Name" required>  <br>
        <lable>Origin</lable> <br>
        <input type="text"  name="Origin" required> <br>
        <label>Destination</label> <br>
        <input type="text" name="Destination" required> <br>
        <input type="submit" value="Xóa" /> <br>
  </form>
  <?php
  require('connect.php');
  mysqli_set_charset($conn,'utf8');
  if(isset($_POST['Name'])&&isset($_POST['Origin'])&&isset($_POST['Destination'])){
    $name=$_POST['Name'];
    $origin=$_POST['Origin'];
    $destination=$_POST['Destination'];
    $sql1="select * from passenger where name='$name' and origin='$origin' and destination='$destination'";
    $result1=mysqli_query($conn,$sql1);

    if($mysqli_num_rows> 0){
  $sql="DELETE FROM passenger WHERE Name='$name' AND Origin='$origin' AND Destination='$destination";
    if($conn->query($sql)){
        echo"<script>alert('xóa thành công')</script>";
  }
  else{
    echo "lõi".$conn->error;
  }
}
else{
    echo "không có dữ liệu";
}
}
  ?>
</body>
</html>