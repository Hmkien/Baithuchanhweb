<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slide 21</title>
</head>
<body>
    <form action="index.php" method="post">
        <h1>CV công ty</h1>
        <label for="name">Họ tên</label><br>
        <input type="text" name="name" placeholder="họ tên" required><br>
        <input type="radio" name="sex" value="nam">Nam<br>
        <input type="radio"name="sex" value="nữ">Nữ<br>
        <label for="Chieucao">Chiều cao(m)</label><br>
        <input type="text" name="Chieucao"><br>
        <label for="Cannang">cân nặng(kg)</label><br>
        <input type="text" name="Cannang"><br>
        <input  type="submit" value="Kết Quả">

    </form>
    <?php 
    if(isset($_POST["Chieucao"]) && isset($_POST["Cannang"]) && isset($_POST["sex"]) && isset($_POST["name"])){
        $Chieucao=(float)$_POST["Chieucao"];
        $Cannang=(float)$_POST["Cannang"];
        $sex= $_POST["sex"];
        $name = $_POST["name"];
        if(($sex=="nam")&&($Cannang>50)&&($Chieucao>1.5)){
            echo"chào bạn" .$name ."Bạn đã trúng tuyển ";
        }
        elseif(($sex=="nữ")&&($Cannang>40)&&($Chieucao>1.5)&&($Cannang<70)){
        echo"chào bạn" .$name ."Bạn đã trúng tuyển ";
    }
    else 
    echo"bạn".$name ."không đạt các chỉ tiêu của chúng tôi";
    }
    ?>
</body>
</html>