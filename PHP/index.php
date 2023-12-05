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
        <h1 style="text-align: center;">Tìm chyuến bay</h1>
        <label>origin</label><br>
        <input class="info" type="text" name="origin" required ><br>
        <label>destination</label><br>
        <input class="info" type="text" name="destination" required ><br>
        
        <input type="submit" name="submit" value="Tìm"><br>
        
    </form>
</div>

<?php
if (isset($_POST['origin']) && isset($_POST['destination'])){
    $origin = $_POST['origin'];
    $destination= $_POST['destination'];
    
    require('connect.php');
    mysqli_set_charset($conn, 'UTF-8');
    $sql = "select * from passenger where destination='$destination' and origin='$origin'";
    $ketqua = $conn->query($sql);
    if ($ketqua->num_rows > 0) {
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
    $conn->close();
}


?>


</body>

</html>