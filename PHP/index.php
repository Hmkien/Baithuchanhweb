<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.php">
        <h1>Hối đoán tiền tệ:</h1><br>
        <label for="money">Số tiền muốn đổi:</label><br>
        <input type="text" name="money" required><br>
        <select name="type">
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
            <option value="SGD">SGD</option>
            <option value="JPY">JPY</option>
        </select>
        <br>
        <input type="submit" value="Chuyển đổi" >
    </form>
    <?php
    if(isset($_POST['money'])&& isset($_POST['type'])){
        $type=$_POST['type'];
        $first=(float)$_POST['money'];

        $usd=23000;
        $jpy=200;
        $eur=27000;
        $sgd=10000;
        switch($type){
            case 'USD': echo $usd *$first;
            break;
            case 'EUR': echo $first * $eur;
            break;
            case 'SGD': echo $first * $sgd;
            break;
            case 'JPY': echo $first * $jpy;

        }

    }
    ?>
</body>
</html>