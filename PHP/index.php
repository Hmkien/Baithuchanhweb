<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <form action="index.php" method="post">
    <h1>Quite The Game</h1>
    <select name ="traloi">
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
    <input type="submit" value="submit">
 </form>
 <?php 
 if(isset($_POST["traloi"])) {
 echo" THe Game";
 if($_POST['traloi']=='Yes') {
    echo" Thoát Game";
 }
 else
 {
    echo "Game sẽ tiếp tục sau 3s <br>";
 }
 echo"game dang tiếp tục";
}
 ?>
</body>
</html>