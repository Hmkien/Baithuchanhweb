<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04</title>
</head>
<body>
    <form action="index.php" method="GET">
        <div>
            <label for="dv01">Nhập vào kích thước thứ nhất:</label><br>
            <input type="text" name="dv01"><br>
            <label for="dv02">Nhập vào kích thước thứ hai:</label><br>
            <input type="text" name="dv02"><br>
            <input  type="submit" value="Kết quả"/>

            
        </div>
    </form>
    <?php
    if(isset($_GET['dv01']) && isset($_GET['dv02']))
    { 
    $dv01 =(float) $_GET["dv01"];
    $dv02 =(float) $_GET["dv02"];
    if ($dv01 ==$dv02) {
        echo"đây là hình vuông";
    }
    else
    echo"dây là hình chữ nhật";
}
  
    ?>
</body>
</html>