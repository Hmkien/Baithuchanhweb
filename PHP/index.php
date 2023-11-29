<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="index.php">
    <label>First Number</label><br>
    <input type="text" name="first" required><br>
    <label> Second Number</label><br>
    <input type="text" name="second" required><br>
    <input type="submit" name="+" value="+" />
    <input type="submit" name="-" value="-" />
    <input type="submit" name="x" value="x" />
    <input type="submit" name="/" value="/" />
    </form>
    <?php 
    
    if(isset($_POST["+"])){
            $ketqua=$_POST["first"]+$_POST["second"];
            echo $ketqua;

    }
    if(isset($_POST["-"])){
        $ketqua=$_POST["first"]-$_POST["second"];
        echo $ketqua;
    }
    if(isset($_POST["x"])){
        $ketqua=$_POST["first"]*$_POST["second"];
        echo $ketqua;
    }
    if(isset($_POST["/"])){
        $ketqua=$_POST["first"]/$_POST["second"];
        echo $ketqua;
    }
    ?>

</body>
</html>