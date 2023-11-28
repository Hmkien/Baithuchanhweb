<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form method="post" action="index.php">
    <label>Nhập vào tên bạn</label><br>
    <input type="text" name="name" required><br>
    <label> Toán:</label><br>
    <input type="text" name="toan"  required><br>
    <label>Lý:</label><br>
    <input type="text" name="ly"  required><br>
    <label> Hóa:</label><br>
    <input type="text" name="hoa"  required><br>
    <label> Tiếng anh:</label><br>
    <input type="text" name="anh"  required><br>
    <label> Văn:</label><br>
    <input type="text" name="van"  required><br>
    <label> Sử:</label><br>
    <input type="text" name="su"  required><br>
    <input type="submit" value="Kết Quả">
</form>
<?php 
function ketQua($name,$list){
    $temp=true;
    foreach ($list as $diem){
        if($diem<4){
            $temp=false;
        echo"Chàp bạn ".$name."bạn đã đúp vì có điểm".$diem."<4";
        break;
        }
        elseif($diem>10){
            echo"bạn".$name."đã nhập điểm 1 môn quá điểm tối đa".$diem;
            $temp=false;
            break;
        }
    }
    if($temp){
            $trungBinh=array_sum($list)/count($list);
            if($trungBinh<5){
            echo"chào bạn".$name."đã là đạt học sinh yếu và có điểm trung bình là".$diem;
      
            }
            elseif ($trungBinh>=5 && $trungBinh< 6.5){
            echo "chào bạn".$name."đã dạt học sinh trung bình vì có diểm trung bình là:".$diem;
           
            }
            elseif($trungBinh>= 6.5&& $trungBinh< 8){
                echo "chào bạn".$name."đã dạt học sinh giỏi với điêm trung bình:".$diem;
        }
        else{
            echo"chào bạn ".$name."đã dạt học sinh giỏi với điểm trung bình:".$diem;
        }
    }
    }

?>
<?php 
if(isset($_POST["name"])&&isset($_POST["toan"])&&isset($_POST["ly"])&&isset($_POST["hoa"])&&isset($_POST["anh"])&&isset($_POST["van"])&&isset($_POST["su"])){
    $diem=array();
    $name=$_POST["name"];
    $diem[]=(float)$_POST["toan"];
    $diem[]=(float)$_POST["ly"];
    $diem[]=(float)$_POST["hoa"];
    $diem[]=(float)$_POST["anh"];
    $diem[]=(float)$_POST["van"];
    $diem[]=(float)$_POST["su"];
    ketQua($name,$diem);
}
?>

</body>
</html>