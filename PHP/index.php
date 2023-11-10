T4 22:59
Bạn đã gửi
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính phương trình bậc 2</title>
    <style>
        .tinh-toan {
            width: 40em;
            height: 20em;
            background: lightyellow;
            margin: 0 auto;
            text-align: center;
            margin-top: 10%;
            border-radius: 5em;
        }
        .tinh-toan label {
            margin-right: 35%;
        }
        .tinh-toan input{
            margin: 2em 0 0 0 ;
        }
    </style>
</head>
<body>
    <form action="./index.php" method="GET">
        <div class="tinh-toan">
            <label for="soA">Nhập vào số a:</label><br>
            <input type="text" name="soA" style="width:24em;height:2.5em"><br>
            <label for="soB">Nhập vào số b:</label><br>
            <input type="text" name="soB" style="width:24em;height:2.5em"><br>
            <label for="soC">Nhập vào số c:</label><br>
            <input type="text" name="soC" style="width:24em;height:2.5em">
            <br>
            <input type="submit" name="tinhToan" value="Tính Toán" style="width:7em;height:3em;background:lightblue;border-radius:3em;margin-top:2em">
        </div>
    </form>
    <?php 
    if( isset($_GET['soA']) && isset($_GET['soB']) && isset($_GET['soC']) ){ 
         $soA = (float) $_GET["soA"];
        $soB = (float) $_GET["soB"];
        $soC = (float) $_GET["soC"];
        
        if($soA == 0){
            echo "Phương trình không phải phương trình bậc 2";
        } else {
            $delta = ($soB * $soB) - (4 * $soA * $soC);
            
            if($delta > 0){
                $x1 = (-$soB + sqrt($delta)) / (2 * $soA);
                $x2 = (-$soB - sqrt($delta)) / (2 * $soA);
                echo "Phương trình có hai nghiệm phân biệt x1=" . $x1 . ", x2=" . $x2;
            } elseif($delta == 0){
                $x1 = -$soB / (2 * $soA);
                echo "Phương trình có nghiệm kép x1=x2=" . $x1;
            } else {
                echo "Phương trình vô nghiệm";
            }
        }
    }
      
    ?>
</body>
</html>