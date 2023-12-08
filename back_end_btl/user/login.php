<?php
require('../config/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        echo("username: " . $username . " password: " . $password ."");

        // Sử dụng Prepared Statements để tránh SQL Injection
        $query = "SELECT * FROM users WHERE username = ? AND password = ?";
        $stmt = mysqli_prepare($conn, $query);

        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);
            $user_id = $row['stt']; // Thay 'id' bằng cột ID của người dùng trong cơ sở dữ liệu của bạn
            $_SESSION['username'] = $username;
        
            // Đăng nhập thành công, chuyển hướng đến trang index với ID người dùng
            echo "<script>window.open('demo.php?user_id=?','_self')</script>";
            exit();
        } else {
            // Sai thông tin đăng nhập
            echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    document.getElementById('error_message').style.display = 'block';
                });
            </script>";
        }
        
        mysqli_stmt_close($stmt);
    }
    $conn->close();
}
?>
<?php
require('../config/connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['create_username']) && isset($_POST['create_password']) && isset($_POST['numberphone'])) {
        $username = $_POST['create_username'];
        $password = $_POST['create_password'];
        $numberphone = $_POST['numberphone'];
        $sql="select * from users where username = '$username' ";
        $kq=$conn->query($sql);
        if($kq->num_rows > 0) {
            echo"<script>alert('Tài Khoản đã tồn tại')</script>";
        }
        else{
        $query = "INSERT INTO users (username, password, sdt) VALUES ('$username', '$password', '$numberphone')";
        $sql1 = mysqli_query($conn, $sql1);

        if ($result) {
            echo "<script>alert('Tạo tài khoản thành công')</script>";
            echo "<script>setTimeout(function() { window.location.href = 'login.php'; }, 1000);</script>"; // Chuyển hướng sau 2 giây (2000 milliseconds)
            exit();
        } else {
            // Xử lý lỗi khi thêm người dùng vào CSDL
            echo "Lỗi: " . mysqli_error($conn);
        }
        
    }
}
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>đăng nhập</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/login.css">

</head>

<body>
    <div class="back-button">
        <a href="javascript:history.go(-1)" style="text-decoration: none;padding-right:90%;color:black;">Back</a>
    </div>
    <div class="logo">
        <h1 class="text-primary m-0"><i class="fa fa-utensils me-3"></i>HK Restaurant</h1>
        <p class="logo1">Nơi cung cấp một loạt sản phẩm đa dạng, từ thời trang đến đồ gia dụng,<br> <span style="margin-left: 5em;">với dịch vụ giao hàng nhanh chóng và chăm sóc khách hàng tận tình.</span></p>
    </div>

    <div class="login-box">
        <h1> Đăng Nhập</h1>
        <form action="login.php" method="post" id="login-form">
            <div class="user-box">
                <input type="text" name="username" required>
                <label>Tên Đăng Nhập</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required=>
                <label>Mật Khẩu</label>
             <p style="color: red; display: none;" id="error_message">Sai thông tin đăng nhâp,vui lòng thử lại</p>

            </div>
            <div class="col3">
                <input type="submit" class="login" value="Đăng nhập"><br>
                <a href="#" class="forget" style="color:blue">Quên mật khẩu</a><br>
                <hr>
                <button class="register" id="register-button">Tạo Tài Khoản</button>
            </div>

        </form>
    </div>
    <div class="login-box" id="register-form" style="display:none;">
        <span id="close-button" style="cursor: pointer; position: absolute; top: 0; right: 0; font-size: 2em;">&times;</span>
        <h1>Đăng Kí </h1>
        <form action="./login.php" method="post">
            <div class="user-box">
                <input type="text" name="create_username" required="" id="username">
                <label>Tên Đăng Nhập</label>
            </div>
            <div class="user-box">
                <input type="password" name="create_password" required="" id="password" minlength="8">
                <label>Mật Khẩu</label>
            </div>
            <div class="user-box">
                <input type="text" name="numberphone" required="" id="numberphone" minlength="10">
                <label>Số Điện Thoại</label>
            </div>
            <div class="user-box">
                <input type="password" name="repassword" required="" minlength="8" id="repassword">
                <label>Nhập Lại Mật Khẩu</label>
                <p id="remote" style="color: red;"></p>
            </div>
            <div class="col3">
                <input type="submit" class="login" style="background-color: #42b72a" value="Tạo Tài Khoản"><br>
            </div>
        </form>
    </div>

    <script src="../js/login.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</body>
<script>
    document.getElementById("login-form").addEventListener("submit", function(event) {
        var errorMessage = document.getElementById('error_message');
        errorMessage.style.display = 'none'; // Ẩn thông báo lỗi khi submit lại form

        // Kiểm tra thông tin trước khi submit
        var username = document.getElementsByName('username')[0].value;
        var password = document.getElementsByName('password')[0].value;

        if (username === '' || password === '') {
            errorMessage.innerText = 'Vui lòng điền đầy đủ thông tin';
            errorMessage.style.display = 'block'; // Hiển thị thông báo lỗi
            event.preventDefault(); // Ngăn chặn việc submit form
        }
    });
</script>
<script>
    document.getElementById('error_message').style.display = 'none'; 
</script>

</html>
