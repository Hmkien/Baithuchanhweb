<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hà Mạnh Kiên</title>
</head>
<body>
    <h1>Kiểm tra điểm</h1></h1>
    <form method="post" action="index.php">
        <label for="name">Nhập tên sinh viên</label></label>
        <input type="text"  name="name"  >
        <label for="toan">Nhập điểm Toán</label>
        <input type="text" name="toan">
        <label for="ly">Nhập điểm Lý</label>
        <input type="text" name="ly">
        <label for="hoa">Nhập điểm Hóa</label>
        <input type="text" name="hoa">
        <label for="anh">Nhập điểm tiếng anh</label>
        <input type="text" name="anh">
        <label for="van">Nhập điểm Văn</label>
        <input type="text" name="van">
        <label for="su">Nhập điểm sử</label>
        <input type="text" name="su">
        <input type="submit" value="Kết quả">
    </form>
    <?php 
if(isset($_POST['name']) && isset($_POST['toan']) && isset($_POST['ly']) && isset($_POST['hoa']) && isset($_POST['anh']) && isset($_POST['van']) && isset($_POST['su'])){
    $name = $_POST['name'];
    $diem=array();
    $diem[] =(float) $_POST['toan']; 
    $diem[]  =(float) $_POST['ly'];
    $diem[]= (float)$_POST['hoa'];
    $diem[] =(float) $_POST['anh'];
    $diem[] =(float) $_POST['van'];
    $diem[] = (float)$_POST['su'];
    $diemtb=array_sum($diem)/count($diem);

    $flag = true; 

    for ($i=0; $i<count($diem); $i++){
        if ($diem[$i]<4){
            $flag = false;
            echo 'Chào bạn:' . $name . ", bạn là học sinh yếu vì " . $diem[$i] .' nhỏ hơn 4';
            break;
        }
        elseif ($diem[$i]>10){
            $flag = false;
            echo 'Chào bạn:' . $name . ", bạn là học sinh yếu vì bạn đẫ nhập quá điểm 1 môn.vui lòng keiemr tra lại";
            break;
    }

    if($flag){
        if($diemtb < 5)
            echo 'Chào bạn:' . $name . ", bạn là học sinh yếu với điểm trung bình " . $diemtb;
        elseif($diemtb >= 5 && $diemtb <= 6.4)
            echo 'Chào bạn:' . $name . ", bạn là học sinh trung bình với điểm trung bình " . $diemtb;
        elseif($diemtb >= 6.5 && $diemtb <= 7.9)
            echo 'Chào bạn:' . $name . ", bạn là học sinh khá với điểm trung bình " . $diemtb;
        elseif($diemtb > 7.9)
            echo 'Chào bạn:' . $name . ", bạn là học sinh giỏi với điểm trung bình " . $diemtb;
    }
}

    ?>
</body>
</html>