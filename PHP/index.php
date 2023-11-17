<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hà Mạnh Kiên</title>
</head>
<body>
    <h1> Hoán đối tiền tệ</h1>
    <form method="post" action="index.php">
        <label for="money">Nhập số tiền</label>
        <input type="text"  name="money">
        <label for="type-money"></label>
        <input type="text" name="type-money">
        <input type="submit" value="Hoán đối">
    </form>
    <?php 
    if(isset($_POST['money'])&& isset($_POST['type-money'])) {
        $giatien=array("USD"=>23000,"EUR"=>27000,"SGP"=>17000,"JPY"=>120);
        $money=$_POST['money'];
        $typemoney=strtoupper($_POST['type-money']);
        echo"$money là bằng " . number_format($money * $giatien[$typemoney]) ."VND";
        
    }
    ?>
</body>
</html>