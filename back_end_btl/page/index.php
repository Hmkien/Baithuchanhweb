<?php
require('../config/connect.php');


?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <title>HK restaurant</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <div id="main" class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <?php
        include('../config/header.php');
        ?>
        <!-- Navbar & Hero End -->


        <!-- seach area -->
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
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5 ">
            <div class="container ">
                <div class="row g-4 ">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp " data-wow-delay="0.1s ">
                        <div class="service-item rounded pt-3 ">
                            <div class="p-4 ">
                                <i class="fa fa-3x fa-headset text-primary mb-4 "></i>
                                <h5>Bậc thầy đầu bếp</h5>
                                <p>Nơi hội tụ những đầu bếp hàng đầu Việt Nam. Họ là những người trực tiếp làm ra những món ăn cho bạn.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp " data-wow-delay="0.3s ">
                        <div class="service-item rounded pt-3 ">
                            <div class="p-4 ">
                                <i class="fa fa-3x fa-utensils text-primary mb-4 "></i>
                                <h5>Chất Lượng</h5>
                                <p>Sản phẩm của chúng tôi đạt chất lượng tốt đảm bảo vệ sinh an toàn thực phẩm.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp " data-wow-delay="0.5s ">
                        <div class="service-item rounded pt-3 ">
                            <div class="p-4 ">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4 "></i>
                                <h5>Đặt hàng online</h5>
                                <p>Bạn có thể dặt hàng online,chúng tôi sẽ giao hàng hỏa tốc tới bạn trong thời gian sớm nhất</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp " data-wow-delay="0.7s ">
                        <div class="service-item rounded pt-3 ">
                            <div class="p-4 ">
                                <i class="fa fa-3x fa-headset text-primary mb-4 "></i>
                                <h5>24/7 Hỗ trợ</h5>
                                <p>Chúng tôi hỗ trợ khách hàng 24/7 nếu sản phẩm hay dịch vụ chúng tôi có vấn đề</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->


        <!-- About Start -->
        <div class="container-xxl py-5 ">
            <div class="container ">
                <div class="row g-5 align-items-center ">
                    <div class="col-lg-6 ">
                        <div class="row g-3 ">
                            <div class="col-6 text-start ">
                                <img class="img-fluid rounded w-100 wow zoomIn " data-wow-delay="0.1s " src="../image/about-1.jpg ">
                            </div>
                            <div class="col-6 text-start ">
                                <img class="img-fluid rounded w-75 wow zoomIn " data-wow-delay="0.3s " src="../image/about-2.jpg " style="margin-top: 25%; ">
                            </div>
                            <div class="col-6 text-end ">
                                <img class="img-fluid rounded w-75 wow zoomIn " data-wow-delay="0.5s " src="../image/about-3.jpg ">
                            </div>
                            <div class="col-6 text-end ">
                                <img class="img-fluid rounded w-100 wow zoomIn " data-wow-delay="0.7s " src="../image/about.jpg ">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal ">Về chúng tôi</h5>
                        <h1 class="mb-4 ">Chào mừng tới <i class="fa fa-utensils text-primary me-2 "></i>HK restaurant</h1>
                        <p class="mb-4 ">Chào mừng đến với Hk Restaurant, nơi bạn có thể tìm thấy mọi loại món ăn ngon và đặt hàng trực tuyến một cách dễ dàng và thuận tiện. Chúng tôi tự hào là một nhà hàng đặt đồ ăn online, mang đến cho khách hàng những bữa ăn chất lượng
                            và dịch vụ tốt nhất</p>
                        <p class="mb-4 ">Chúng tôi rất mong được phục vụ và làm hài lòng khách hàng. Hãy thử đặt món ăn tại Hk Restaurant ngay hôm nay và trải nghiệm sự tiện lợi và ngon miệng của dịch vụ đặt đồ ăn online của chúng tôi. Xin cảm ơn!</p>
                        <div class="row g-4 mb-4 ">
                            <div class="col-sm-6 ">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3 ">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0 " data-toggle="counter-up ">15</h1>
                                    <div class="ps-4 ">
                                        <p class="mb-0 ">Năm</p>
                                        <h6 class="text-uppercase mb-0 ">Kinh Nghiệm</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 ">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3 ">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0 " data-toggle="counter-up ">20</h1>
                                    <div class="ps-4 ">
                                        <p class="mb-0 ">Nổi tiếng</p>
                                        <h6 class="text-uppercase mb-0 ">Đầu bếp</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2 " href="about.php" style="color:#000000;font-weight:bolder;">Xem Thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Sản Phẩm</h5>
                    <h1 class="mb-5">Sản Phẩm nổi bật</h1>
                </div>

                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <h6 class="mt-n1 mb-0 ">Đồ ăn</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3 ">
                                    <h6 class="mt-n1 mb-0 ">Đồ uống</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3 ">
                                    <h6 class="mt-n1 mb-0 ">Tráng miệng</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="../image/đồ ăn/cá chép om dưa.webp" alt="Cá chép om dưa" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Cá chép om dưa</span>
                                                <span class="text-primary ">400.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/đồ ăn/cá kjo.jpg " alt="Cá Kho" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Cá kho tộ</span>
                                                <span class="text-primary ">250.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/đồ ăn/bánh xeo.jpg " alt="Bánh xèo" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Bánh xèo</span>
                                                <span class="text-primary ">90.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/đồ ăn/bun-bo-1.jpg" alt="Bùn bò huế" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Bún bò huế</span>
                                                <span class="text-primary ">50.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/đồ ăn/kho tàu.jpg " alt="Thịt kho tàu" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Thịt kho tàu</span>
                                                <span class="text-primary ">150.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/đồ ăn/lợn quay.jpg " alt=" lợn quay" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Lợn quay Lạng Sơn</span>
                                                <span class="text-primary ">400.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/đồ ăn/gà chiên mắm tỏi.jpg " alt="GÀ CHIÊN MẮM  tỏi" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Gà chiên mắm tỏi</span>
                                                <span class="text-primary ">230.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/đồ ăn/sườn chua ngọt.jpg " alt="sườn chua ngọt" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Sườn chua ngọt</span>
                                                <span class="text-primary ">250.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="../image/đồ uống/7 up.jpg" alt="7 up" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span> 7 up</span>
                                                <span class="text-primary ">15.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/đồ uống/bia hà nội.jpg " alt=" bia hà nội" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Bia Hà Nội</span>
                                                <span class="text-primary ">25.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/đồ uống/cacacola.png " alt="cocacola" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Coca Cola</span>
                                                <span class="text-primary ">15.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/đồ uống/fanta.jpg " alt=" fanta" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>fanta</span>
                                                <span class="text-primary ">15.000</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/đồ uống/rượu mơ.jpeg " alt="rượu mơ" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Rượu mơ</span>
                                                <span class="text-primary ">75.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/đồ uống/rượu vang đỏ chile.jpg " alt=" rượu  vang đỏ" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Rượu vang chile</span>
                                                <span class="text-primary ">750.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/đồ uống/rượu ngô.jpg " alt="rượu ngô " style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Rượu ngô</span>
                                                <span class="text-primary ">95.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/đồ uống/rượu nếp.png " alt="rượu nếp" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Rượu nếp</span>
                                                <span class="text-primary ">75.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/tráng miệng/cam.jpg " alt=" cam" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Cam đường</span>
                                                <span class="text-primary ">75.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/tráng miệng/dưa hấu.jpg " alt="dưa hấu" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Dưa hấu</span>
                                                <span class="text-primary ">150.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/tráng miệng/kem dâu.jpg " alt="kem dâu " style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Kem dâu</span>
                                                <span class="text-primary ">25.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/tráng miệng/đu đủ đỏ.jpg " alt=" đu đủ" style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Đu đủ đỏ</span>
                                                <span class="text-primary ">75.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/tráng miệng/thanh long.jpg " alt="thanh long " style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Thanh long</span>
                                                <span class="text-primary ">30.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/tráng miệng/hoa quả tổng hợ.jpg " alt="Hoa qủa tôngr hợp " style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Hoa quả tổng hợp</span>
                                                <span class="text-primary ">100.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/tráng miệng/dưa leo.jpg " alt="dưa leo " style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Dưa leo</span>
                                                <span class="text-primary ">25.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 ">
                                    <div class="d-flex align-items-center ">
                                        <img class="flex-shrink-0 img-fluid rounded " src="../image/tráng miệng/dâu tây.jpg " alt="dâu tây " style="width: 80px; ">
                                        <div class="w-100 d-flex flex-column text-start ps-4 ">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2 ">
                                                <span>Dâu tây</span>
                                                <span class="text-primary ">65.000đ</span>
                                            </h5>
                                            <small class="fst-italic ">Sản phẩm bán chạy nhất của cửa hàng</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->



        <!-- Testimonial Start -->
        <div class="container-xxl py-5 wow fadeInUp " data-wow-delay="0.1s ">
            <div class="container ">
                <div class="text-center ">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal ">Đánh Giá</h5>
                    <h1 class="mb-5 ">Khách hàng thân thiết của chúng tôi!!!</h1>
                </div>
                <div class="owl-carousel testimonial-carousel ">
                    <div class="testimonial-item bg-transparent border rounded p-4 ">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3 "></i>
                        <p>Đồ ăn của nhà hàng quá ngon so với tưởng tưởng mà giá cả vô cùng hợp lý</p>
                        <div class="d-flex align-items-center ">
                            <img class="img-fluid flex-shrink-0 rounded-circle " src="../image/NSND Trung anh.jpg " style="width: 50px; height: 50px; ">
                            <div class="ps-3 ">
                                <h5 class="mb-1 ">NSND Trung Anh</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4 ">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3 "></i>
                        <p>Mặc dù là đặt đồ ăn online nhưng không thể cưỡng lại được đồ ăn nơi đây.Tuyệt vời!!</p>
                        <div class="d-flex align-items-center ">
                            <img class="img-fluid flex-shrink-0 rounded-circle " src="../image/công lý.jpg " style="width: 50px; height: 50px; ">
                            <div class="ps-3 ">
                                <h5 class="mb-1 ">NSND Công Lý</h5>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4 ">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3 "></i>
                        <p>Ăn quán xá quá là bất tiện và ồn ào .Vì vậy tại nhà và đặt đồ ăn ở HK restaurant là lựa chọn hoàn hảo </p>
                        <div class="d-flex align-items-center ">
                            <img class="img-fluid flex-shrink-0 rounded-circle " src="../image/qung èo.jpg " style="width: 50px; height: 50px; ">
                            <div class="ps-3 ">
                                <h5 class="mb-1 ">NSND Quang tèo</h5>

                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-transparent border rounded p-4 ">
                        <i class="fa fa-quote-left fa-2x text-primary mb-3 "></i>
                        <p>Tôi quá bất ngờ với những món ăn nơi đây.Nó quá ngon và đa dạng giúp tôi tha hồ lựa chọn</p>
                        <div class="d-flex align-items-center ">
                            <img class="img-fluid flex-shrink-0 rounded-circle " src="../image/xuân bắc.jpg " style="width: 50px; height: 50px; ">
                            <div class="ps-3 ">
                                <h5 class="mb-1 ">NSND Xuân Bắc</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- footer -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn " data-wow-delay="0.1s ">
            <div class="container py-5 ">
                <div class="row g-5 ">
                    <div class="col-lg-3 col-md-6 ">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4 ">Nhà hàng</h4>
                        <a class="btn btn-link " href="about.html">Về chúng tôi</a>
                        <a class="btn btn-link " href="HTML/contact.html">Liên Hệ</a>
                        <a class="btn btn-link " href="menu.html">Mua hàng ngay</a>
                        <a class="btn btn-link " href="# ">Chính sách bảo mật</a>
                        <a class="btn btn-link " href=" #">Điều khoản & Điều kiện</a>
                    </div>
                    <div class="col-lg-3 col-md-6 ">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4 ">Liên Hệ</h4>
                        <p class="mb-2 "><i class="fa fa-map-marker-alt me-3 "></i>123 Phố Trần Duy Hưng,Hà Nội,Việt Nam</p>
                        <p class="mb-2 "><i class="fa fa-phone-alt me-3 "></i>+84 967851017</p>
                        <p class="mb-2 "><i class="fa fa-envelope me-3 "></i>Manhkien203@gmail.com</p>
                        <div class="d-flex pt-2 ">
                            <a class="btn btn-outline-light btn-social " href="# "><i class="fab fa-twitter "></i></a>
                            <a class="btn btn-outline-light btn-social " href=" #"><i class="fab fa-facebook-f "></i></a>
                            <a class="btn btn-outline-light btn-social " href=" #"><i class="fab fa-youtube "></i></a>
                            <a class="btn btn-outline-light btn-social " href="HTML/admin.html "> <i class="fab fa-tiktok "></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 ">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4 ">Hoạt Động</h4>
                        <h5 class="text-light fw-normal ">Thứ hai-Thứ Bảy</h5>
                        <p>07AM - 11PM</p>
                        <h5 class="text-light fw-normal ">Chủ Nhật</h5>
                        <p>9AM - 11.30PM</p>
                    </div>
                    <div class="col-lg-3 col-md-6 ">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4 ">Gửi phản hồi tới chúng tôi</h4>
                        <p>Hãy gửi chúng tôi lời phản hồi của bạn</p>
                        <form action=" ">
                            <div class="position-relative mx-auto " style="max-width: 400px; ">
                                <input class="form-control border-primary w-100 py-3 ps-4 pe-5 " type="text " placeholder="Phản hồi của bạn ">
                                <button type="submit " class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2 ">Gửi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="index.php" class="btn btn-lg btn-primary btn-lg-square back-to-top " aria-label="QUAY LẠI"><i class="bi bi-arrow-up "></i></a>
    </div>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js "></script>
    <script src="../lib/wow/wow.min.js "></script>
    <script src="../lib/easing/easing.min.js "></script>
    <script src="../lib/waypoints/waypoints.min.js "></script>
    <script src="../lib/counterup/counterup.min.js "></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js "></script>
    <script src="../lib/tempusdominus/js/moment.min.js "></script>
    <script src="../lib/tempusdominus/js/moment-timezone.min.js "></script>
    <script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js "></script>

    <!-- Template Javascript -->
    <script src="../js/main.js "></script>

</body>

</html>