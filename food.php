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

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Ưu đãi chớp nhoáng!</h5>
                    <span class="time-badge">12:34</span>
                    <i class="fas fa-arrow-right arrow-icon"></i>
                </div>
                <p class="text-muted">Ưu đãi giờ vàng, đặt ngay kẻo lỡ!</p>

                <!-- Scrollable container for sale cards -->
                <div class="scroll-container1">
                    <div class="sale-card d-flex">
                        <img src="./img/sale1.jpg" alt="Sale Image" class="sale-image">
                        <div class="sale-info">
                            <h6>Trà Sữa Gong Ting - Lý Thường Kiệt</h6>
                            <p class="discount-price">Giảm 20.000₫</p>
                            <p class="text-muted">Đặt ít nhất 50.000₫</p>
                        </div>
                    </div>

                    <div class="sale-card d-flex">
                        <img src="./img/lau.jpg" alt="Sale Image" class="sale-image">
                        <div class="sale-info">
                            <h6>Lẩu Gà Lá É 78</h6>
                            <p class="discount-price">Giảm 25.000₫</p>
                            <p class="text-muted">Đặt ít nhất 25.000₫</p>
                        </div>
                    </div>

                    <div class="sale-card d-flex">
                        <img src="./img/ga.png" alt="Sale Image" class="sale-image">
                        <div class="sale-info">
                            <h6>Gà Ủ Muối - Chân Gà Sốt Thái</h6>
                            <p class="discount-price">Giảm 20.000₫</p>
                            <p class="text-muted">Đặt ít nhất 50.000₫</p>
                        </div>
                    </div>
                    <!-- Add more .sale-card items as needed -->
                </div>

                <!-- First Food Item -->
                <div class="d-flex food-item">
                    <img src="./img/maycha.jpg" alt="Trà Sữa MayCha">
                    <div class="food-info">
                        <h6>Trà Sữa MayCha</h6>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-star text-warning me-1"></i>
                            <span>4.4 (325)</span>
                            <span class="text-muted ms-2">• $$$$ • Trà Sữa</span>
                        </div>
                        <p class="mb-1">
                            <span class="discount-badge">Miễn phí <span class="price">13.000₫</span></span>
                            <span class="text-muted">• 15 phút trở lên</span>
                        </p>
                        <div class="d-flex">
                            <button class="btn btn-light offer-button">Giảm 20%</button>
                            <button class="btn btn-light offer-button ms-2">Giảm 21.000₫</button>
                        </div>
                    </div>
                </div>

                <div class="d-flex food-item">
                    <img src="./img/banhuot.webp" alt="Bánh ướt">
                    <div class="food-info">
                        <h6>Bánh ướt, bánh cuốn nóng - Phú Lâm</h6>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-star text-warning me-1"></i>
                            <span>4.7 (731)</span>
                            <span class="text-muted ms-2">• $$$$ • Bánh Việt Nam</span>
                        </div>
                        <p class="mb-1">
                            <span class="discount-badge">Miễn phí <span class="price">13.000₫</span></span>
                            <span class="text-muted">• 20 phút trở lên</span>
                        </p>
                        <div class="d-flex">
                            <button class="btn btn-light offer-button">Giảm 20%</button>
                            <button class="btn btn-light offer-button ms-2">Giảm 14.000₫</button>
                        </div>
                    </div>
                </div>

                <div class="d-flex food-item">
                    <img src="./img/dai.png" alt="DAI LOU">
                    <div class="food-info">
                        <h6>DAI LOU Thiểm Tây Bánh</h6>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-star text-warning me-1"></i>
                            <span>4.7 (60)</span>
                            <span class="text-muted ms-2">• $$$$ • Món Quốc Tế</span>
                        </div>
                        <p class="mb-1">
                            <span class="discount-badge">Miễn phí <span class="price">13.000₫</span></span>
                            <span class="text-muted">• 25 phút trở lên</span>
                        </p>
                        <div class="d-flex">
                            <button class="btn btn-light offer-button">Giảm 20%</button>
                            <button class="btn btn-light offer-button ms-2">Nhận tặng kèm!</button>
                        </div>
                    </div>
                </div>

                <div class="d-flex food-item">
                    <img src="./img/phobo.jpg" alt="DAI LOU">
                    <div class="food-info">
                        <h6>Phở Bò - Phở Cuốn Gia Lan</h6>
                        <div class="d-flex align-items-center">
                            <i class="fas fa-star text-warning me-1"></i>
                            <span>4.7 (392)</span>
                            <span class="text-muted ms-2">• $$$$ • Bún - Phở - Cháo</span>
                        </div>
                        <p class="mb-1">
                            <span class="discount-badge">Miễn phí <span class="price">13.000₫</span></span>
                            <span class="text-muted">• 15 phút trở lên</span>
                        </p>
                        <div class="d-flex">
                            <button class="btn btn-light offer-button">Giảm 20%</button>
                            <button class="btn btn-light offer-button ms-2">Giảm 14.000₫</button>
                        </div>
                    </div>
                </div>

                <div id="voucher" class="tab-content">
                    <p>Nội dung cho tab Voucher Nhà Hàng.</p>
                </div>
            </div>
    </main>
</body>
<script src="./js/food.js"></script>
<script src="./js/back.js"></script>

</html>