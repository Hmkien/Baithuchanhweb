<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index2.php">
        <label>A:</label><br>
        <input type="text" name="a" required><br>
        <label>B:</label><br>
        <input type="text" name="b" required><br>
        <label>C:</label><br>
        <input type="text" name="c" required><br>
        <input type="submit" value="Kết Quả"><br>

    </form>
    <?php
    function PTB2($a,$b,$c){
        if($a==0)
        echo"Bạn đã nhập 1 phương trình không phải phương trình bậc 2";
    else{
        $delta=$b*$b -4*$a*$c;
        if($delta< 0){
            echo"Phương trình vô nghiệm";
        }
        else if($delta> 0){
            $x1=(-$b-sqrt($delta))/2*$a;
            $x2=(-$b+sqrt($delta))/2*$a;
            echo"Phương trình có hai nghiệm phân biệt x1=".$x1."x2=".$x2;
        }
        else{
            $x1=-$b/2*$a;
            echo"Phương trinh có nghiệm kép x1=x2=".$x1;
        }

    }
    }
    if(isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])){
        $a=$_POST["a"];
        $b=$_POST["b"];
        $c=$_POST["c"];
        PTB2($a,$b,$c);
    }
    ?>
</body>
</html>