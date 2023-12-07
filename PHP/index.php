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
        <label> Name</label><br>
        <input type="text" name="Name" required><br>
        <input type="submit" value="Tìm kiếm"><br>
    </form>
    <?php
    require('connect.php');
    if(isset($_POST['Name'])) {
        $name = $_POST['Name'];
        $sql= "SELECT * FROM passenger WHERE Name='$name'";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            echo "<table> 
            <tr>
                <th>id</th>
                <th>origin</th>
                <th>destination</th>
                <th>duration</th>
                <th>Name</th>
            </tr>";
            while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td>".$row["id"]."</td>
                <td>".$row["origin"]."</td>
                <td>".$row["destination"]."</td>
                <td>".$row["duration"]."</td>
                <td>". $row["Name"]."</td>
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