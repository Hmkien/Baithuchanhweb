<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<form method='post' action='index.php'>";
    $today = getdate();
    $curyear = $today["year"];
    echo "Ngày <select name='ngay'>";

    for($i=1; $i<=31; $i++){
       echo " <option value='$i'>$i</option> ";
    }
    
    echo "</select> Tháng <select name='thang'>";

    for($i=1; $i<=12; $i++){
       echo " <option value='$i'>$i</option> ";
    }
   
    echo "</select> Năm <select name='nam'>";

    for($i=1990; $i<=$curyear; $i++){
       echo " <option value='$i'>$i</option> ";
    }
   
    echo "</select>";
    echo "    <input type='submit' value='Xác Nhận'>";
    echo "</form>";
    
    if(isset($_POST["ngay"]) && isset($_POST["thang"]) && isset($_POST["nam"])){
        $ngay = $_POST["ngay"];
        $thang = $_POST["thang"];
        $nam = $_POST["nam"];
        echo "Bạn đã chọn ngày " . $ngay . " Tháng " . $thang . " năm " . $nam . " làm ngày cưới";
    }
?>


</body>
</html>