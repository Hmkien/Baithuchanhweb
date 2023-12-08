<?php
    session_start();
  ?>  
     <form action="header.php" method="post">
     <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><a href="../index.html"><i class="fa fa-utensils me-3"></i>HK Restaurant</a></h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="../page/index.php " class="nav-item nav-link">Trang Chủ</a>
                        <a href="../page/about.php" class="nav-item nav-link ">Giới Thiệu </a>
                        <a href="../page/contact.php" class="nav-item nav-link active">Liên Hệ</a>
                        <a href="../page/product.php" class="nav-item nav-link">sản Phẩm</a>
                        <a href="../page/cart.php" class="nav-item nav-link">
    <i class="fa-solid fa-cart-shopping">
        <?php
        if(isset($_SESSION['username'])) {
            // Kiểm tra nếu đã đăng nhập, lấy số lượng sản phẩm từ giỏ hàng nếu có
            $cartItemCount = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
            echo "<span class='headerCartListCount'>$cartItemCount</span>";
        } else {
            // Xử lý khi không có phiên đăng nhập, hiển thị số lượng sản phẩm từ giỏ hàng (nếu có)
            $cartItemCount = isset($_SESSION['guest_cart']) ? count($_SESSION['guest_cart']) : 0;
            echo "<span class='headerCartListCount'>$cartItemCount</span>";
        }
        ?>
    </i>
</a>


<?php
require('connect.php'); // Đảm bảo rằng bạn đã chỉ định đường dẫn chính xác đến tệp connect.php
if (isset($_SESSION["username"]) || isset($_GET["user_id"])) {
    if(isset($_SESSION["username"])){
        $username = $_SESSION["username"];
    } else {
        $user_id = $_GET["user_id"];
        // Thực hiện truy vấn để lấy thông tin người dùng dựa trên user_id từ URL
        $sql = "SELECT * FROM users WHERE stt=?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "i", $user_id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if ($result && $row = mysqli_fetch_array($result)) {
                $username = $row["username"];
            } else {
                echo "Không tìm thấy thông tin người dùng!";
            }
            mysqli_stmt_close($stmt);
        } else {
            echo "Lỗi trong truy vấn SQL"; // Thông báo lỗi nếu truy vấn không thành công
        }
    }
    // Thay đổi phần in link dựa trên user đã đăng nhập hay chưa
    echo "<a href='../user/info.php?user=$username' class='nav-item nav-link'><i class='fa-regular fa-user'></i></a>";
} else {
    echo "<a href='../user/login.php' class='nav-item nav-link' aria-label='Đăng nhập'><i class='fa-regular fa-user'></i></a>";
}
mysqli_close($conn); // Đóng kết nối

?>



<a class="mobile-hide search-bar-icon nav-item nav-link"><i class="fas fa-search"></i></a>
                    </div>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h4 class="display-3 text-white mb-3 animated slideInDown">Cám Ơn Qúy Khách Đã Ghé Thăm</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="../page/index.php">Trang Chủ</a></li>
                            <li class="breadcrumb-item"><a href="../page/contact.php">Liên Hệ</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Sản Phẩm</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="search-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <span class="close-btn"><i class="fas fa-window-close"></i></span>
                            <div class="search-bar">
                                <div class="search-bar-tablecell">
                                    <h3>Tìm Kiếm Món Ăn Của Bạn:</h3>
                                    <input type="text" placeholder="Từ Khóa">
                                    <button type="submit" class="search-button"><h4 style="padding-bottom: 1em;">Tìm Kiếm<i class="fas fa-search search-icon"></i></h4> </button>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>