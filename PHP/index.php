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
<?php
echo "<form action='index.php' method='post'>";
  require('connect.php');
  mysqli_set_charset($conn,'utf8');
  $sql = "select * from passenger";
  $ketqua = $conn->query($sql);
      if ($ketqua->num_rows > 0) {
          echo "<table> 
              <tr>
              <td>option</td>
                  <th>id</th>
                  <th>origin</th>
                  <th>destination</th>
                  <th>duration</th>
                  <th>Name</th>
              </tr>";
  
          while ($row = $ketqua->fetch_assoc()) {
              echo "<tr>
              <td><input type='checkbox' name='checkbox[]' value='".$row['id']."'></td>
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
      echo"<input type='submit' name='submit'>";

?>
<?php
        if(isset($_POST["submit"])){
            if(isset($_POST["checkbox"])){
                $abc=$_POST["checkbox"];
                foreach( $abc as $id) {
        $sql= "DELETE FROM passenger WHERE id=$id";
       
        }
        if($conn->query($sql)===TRUE){
            echo "<script>alert('XÓa thành công')</script>";
    }
}
$conn->close();
        }
  ?>

</body>
</html>