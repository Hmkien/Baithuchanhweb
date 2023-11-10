<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <style>
        .login {
            margin: 0 auto;
            border: 1px solid black;
            width: max-content;
            height: max-content;
            margin-top: 20%;
            border-radius: 2em;
            background-color: antiquewhite;
        }

        .login input[type="text"] {
            margin-top: 2em;
        }

        .login input[type="submit"] {
            margin-left: 38%;
            margin-bottom: 2em;
        }
    </style>
</head>

<body>
    <form action="../PHP/index.php" method="get">
        <div class="login">
            <label for="username"> Tên đăng nhập:</label>
            <input type="text" name="username"><br>
            <label for="password">Mật Khẩu</label>
            <input type="password" name="password"><br>
            <br><br>
            <input type="submit" value="Đăng Nhập">
            <br>
        </div>

    </form>
    <?php 
    if(isset($_GET['username'])&& isset($_GET['password'])){
        $name = $_GET['username'];
        $pw=$_GET['password'];
        echo"wellcome" . $name . "có mật khẩu là:". $pw;
    }
    ?>

</body>

</html