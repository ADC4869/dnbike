<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đồ ăn</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="./fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="./bootstrap/dist/css/bootstrap.min.css">
    <!-- Bootstrap js -->
    <link rel="stylesheet" href="./bootstrap/dist/js/bootstrap.bundle.min.js">
    <!-- Css -->
    <link rel="stylesheet" href="./css/food.css">
    <link rel="stylesheet" href="./css/global.css">
</head>

<body>
    <header>
        <div class="header">
            <div class="top-row">
                <i class="fas fa-arrow-left" onclick="goBack()"></i>
                <div class="address">Giao tới
                    <p>Gần 299/18 Lê Quang Sung<i class="fas fa-caret-down"></i></p>
                </div>
                <div>
                    <i class="fas fa-heart"></i>
                    <i class="fas fa-list"></i>
                </div>
            </div>

            <div class="search-bar">
                <input type="text" placeholder="Bạn đang thèm gì nào?">
            </div>
        </div>
    </header>

    <main>
        <div class="buttons">
            <button class="btn btn-delivery btn-active" onclick="openTab('delivery', this)"><i
                    class="fas fa-motorcycle"></i> Giao hàng</button>
            <button class="btn btn-voucher" onclick="openTab('voucher', this)"><i class="fas fa-percent"></i> Voucher
                Nhà Hàng</button>
        </div>

        <div id="delivery" class="tab-content active">
            <div class="container mt-3">
                <!-- Category Section -->
                <div class="d-flex justify-content-around category-icons">
                    <div class="text-center">
                        <img src="./img/com.png" alt="Cơm">
                        <div class="category-text">Cơm</div>
                    </div>

                    <div class="text-center">
                        <img src="./img/pho.png" alt="Bún - Phở - Cháo">
                        <div class="category-text">Bún - Phở - Cháo</div>
                    </div>

                    <div class="text-center">
                        <img src="./img/cafe.webp" alt="Cà Phê - Trà - Sinh Tố">
                        <div class="category-text">Cà Phê - Trà - Sinh Tố</div>
                    </div>

                    <div class="text-center">
                        <img src="./img/trasua.png" alt="Trà Sữa">
                        <div class="category-text">Trà Sữa</div>
                    </div>

                    <div class="text-center">
                        <img src="./img/anvat.webp" alt="Ăn Vặt">
                        <div class="category-text">Ăn Vặt</div>
                    </div>
                </div>

                <!-- Promo Section -->
                <div class="row mt-4">
                    <div class="col-6 mb-3">
                        <div class="promo-card promo-nearby">
                            <div>Gần tôi</div>
                            <small>Giao đến ngay</small>
                            <img src="./img/vtn.png" alt="Gần tôi">
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <div class="promo-card promo-half-price">
                            <div>Bữa tối nửa giá</div>
                            <small>QC · Chốt deal ngay!</small>
                            <img src="./img/giuagia.jpg" alt="Bữa tối nửa giá">
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <div class="promo-card promo-flash-sale">
                            <div>Triệu Món Flash Sale</div>
                            <small>Giảm đến 50%</small>
                            <img src="./img/flash.png" alt="Flash Sale">
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <div class="promo-card promo-grab-discount">
                            <div>GrabNgonRẻ</div>
                            <small>QC · Bao tiết kiệm</small>
                            <img src="./img/grab.jpg" alt="GrabNgonRẻ">
                        </div>
                    </div>
                </div>

                <div class="scroll-container">
                    <div class="scroll-item">
                        <div class="header text-start mb-2">
                            Đặt ngay <i class="fas fa-arrow-right"></i>
                        </div>
                        <div class="card-custom d-flex flex-column align-items-center">
                            <img src="./img/banner1.jpg" class="img-fluid mb-3" alt="Kiểu Ký Mì Gia Promotion">
                        </div>
                        <div class="description mt-3 text-center">Vui đặt món chung, hưởng ưu đãi hời
                            <p>QC Quán ngon mới nổi</p>
                        </div>
                    </div>

                    <div class="scroll-item">
                        <div class="header text-start mb-2">
                            Đặt ngay <i class="fas fa-arrow-right"></i>
                        </div>
                        <div class="card-custom d-flex flex-column align-items-center">
                            <img src="./img/banner2.jpg!w700wp" class="img-fluid mb-3" alt="Kiểu Ký Mì Gia Promotion">
                        </div>
                        <div class="description mt-3 text-center">Càng đặt càng hời cùng Dn bike
                            <p>QC Trái cây tươi cắt sẵn</p>
                        </div>
                    </div>

                    <div class="scroll-item">
                        <div class="header text-start mb-2">
                            Đặt ngay <i class="fas fa-arrow-right"></i>
                        </div>
                        <div class="card-custom d-flex flex-column align-items-center">
                            <img src="./img/momo.jpg" class="img-fluid mb-3" alt="Kiểu Ký Mì Gia Promotion">
                        </div>
                        <div class="description mt-3 text-center">Momo giảm thêm đến 15K
                            <p>QC MoMo</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="voucher" class="tab-content">
                <p>Nội dung cho tab Voucher Nhà Hàng.</p>
            </div>
    </main>
</body>
<script src="./js/food.js"></script>
<script src="./js/back.js"></script>
</html>