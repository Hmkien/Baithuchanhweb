<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slide 21</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="Toan">Điểm Toán</label><br>
        <input type="text" name="Toan">
        <label for="Ly">Điểm Lý</label><br>
        <input type="text" name="Ly">
        <label for="Hoa">Điểm Hóa</label><br>
        <input type="text" name="Hoa"><br>
        <input type="submit" value="Kết quả">
    </form>
    <?php 
    if(isset($_POST["Toan"]) && isset($_POST["Ly"]) && isset($_POST["Hoa"])){
        $toan=$_POST["Toan"];
        $ly=$_POST["Ly"];
        $hoa = $_POST["Hoa"];
        $tong= $toan+ $ly + $hoa;
        if($tong>=22){
            echo"Bạn đã đỗ  CNTT chất lượng cao với kết quả =$tong";
        }
        elseif(($tong<22)&&($tong>=18)){
            echo "Bạn đã dỗ CNTT và KHDL với kết quả =$tong";
    }
    elseif((18>$tong)&&($tong>=17)){
        echo "Bạn đã dỗ địa chất với kết quả =$tong";
}
elseif((17>$tong)&&($tong>=15)){
    echo "Bạn đã đỗ ngành Môi trường với kết quả =$tong";
}
else{
    echo"Bạn trượt rồi hahahaha với kết quả =$tong";
}
    }
    ?>
</body>
</html>