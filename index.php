<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
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
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>

<body>
    <!-- Header -->
    <header>
        <!-- Only the banner image is in the header, no text -->
    </header>

    <!-- Main -->
    <main>
        <div class="container">
            <div class="search-bar">
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Hãy nhập tên món ăn/ cửa hàng">
                </div>
            </div>

            <div class="icon-section">
                <a href="food.php">
                    <div>
                        <i class="fas fa-utensils"></i>
                        <p>Đồ ăn</p>
                    </div>
                </a>

                <a href="location.php">
                    <div>
                        <i class="fas fa-car"></i>
                        <p>Ô tô</p>
                    </div>
                </a>

                <a href="location.php">
                    <div>
                        <i class="fas fa-motorcycle"></i>
                        <p>Xe máy</p>
                    </div>
                </a>

                <a href="#">
                    <div>
                        <i class="fas fa-shipping-fast"></i>
                        <p>Giao hàng</p>
                    </div>
                </a>

                <a href="#" onclick="togglePopup()" class="icon-btn">
                    <div>
                        <i class="fas fa-th-large"></i>
                        <p>Tất cả</p>
                    </div>
                </a>
            </div>

            <!-- Popup content -->
            <div id="popup" class="popup">
            <span class="close-btn" onclick="togglePopup()">&times;</span>
                <div class="popup-header">Dành cho bạn</div>
                <div class="service-list">
                    <div class="service-item">
                        <img src="./img/giaohang.png" alt="Giao hàng">
                        <p>Giao hàng</p>
                    </div>

                    <div class="service-item">
                        <img src="./img/dicho.png" alt="Đi chợ">
                        <p>Đi chợ</p>
                    </div>

                    <div class="service-item">
                        <img src="./img/qua.png" alt="Quà tặng">
                        <p>Quà tặng</p>
                    </div>

                    <div class="service-item">
                        <img src="./img/hoivien.png" alt="Gói Hội Viên">
                        <p>Gói Hội Viên</p>
                    </div>
                </div>
                <hr>
                <div class="popup-header">Tất cả dịch vụ</div>
                <div class="service-list">
                    <div class="service-item">
                        <img src="./img/nhahang.png" alt="Voucher Nhà Hàng">
                        <p>Voucher Nhà Hàng</p>
                    </div>

                    <div class="service-item">
                        <img src="./img/baohiem.png" alt="Bảo hiểm">
                        <p>Bảo hiểm</p>
                    </div>

                    <div class="service-item">
                        <img src="./img/xemay.png" alt="Xe máy">
                        <p>Xe máy</p>
                    </div>

                    <div class="service-item">
                        <img src="./img/oto.png" alt="Ô tô">
                        <p>Ô tô</p>
                    </div>

                    <div class="service-item">
                        <img src="./img/doan.png" alt="Đồ ăn">
                        <p>Đồ ăn</p>
                    </div>

                    <div class="service-item">
                        <img src="./img/thuthach.png" alt="Thử thách">
                        <p>Thử thách</p>
                    </div>

                    <div class="service-item">
                        <img src="./img/rewards.png" alt="Rewards">
                        <p>Rewards</p>
                    </div>

                    <div class="service-item">
                        <img src="./img/khachsan.png" alt="Khách sạn">
                        <p>Khách sạn</p>
                    </div>
                    <!-- Add more services as needed -->
                </div>
            </div>

            <!-- Mã ưu đãi, tích xu -->
            <div class="promo-section">
                <a href="endow.php">
                    <div>
                        <i class="fas fa-tag"></i>
                        <p>46</p>
                        <p>Mã ưu đãi</p>
                    </div>
                </a>

                <a href="#">
                    <div>
                        <i class="fas fa-gift"></i>
                        <p>1</p>
                        <p>Tích xu đổi quà</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Hot Deal -->
        <div class="deal-container">
            <!-- Deal Header -->
            <div class="deal-header">
                <i class="fas fa-tags"></i>
                <span>Hot Deal - Khao Nàng 12k <i class="fas fa-heart"></i></span>
            </div>
            <div class="deal-subtitle">✨ Thế giới ẩm thực siêu ngon và nhiều deal hời</div>

            <!-- Scrollable Deals -->
            <div class="scroll-container">
                <!-- Deal Card 1 -->
                <a href="#">
                    <div class="deal-card">
                        <img src="./img/av1.jpeg" alt="Deal 1 Image"> <!-- Replace with actual image path -->
                        <div class="deal-info">
                            <div class="title">Tré Trộn Trần Linh - Trần Văn Bình</div>
                            <div>
                                <span class="rating"><i class="fas fa-star"></i> 5.0 (57+)</span>
                                <span class="distance"><i class="fas fa-map-marker-alt"></i> 2.6 km</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Deal Card 2 -->
                <a href="#">
                    <div class="deal-card">
                        <img src="./img/av2.jpg" alt="Deal 2 Image"> <!-- Replace with actual image path -->
                        <div class="deal-info">
                            <div class="title">My Trần Gà Ủ Muối Hoa Tiêu - Kinh Rạch</div>
                            <div>
                                <span class="rating"><i class="fas fa-star"></i> 5.0 (26+)</span>
                                <span class="distance"><i class="fas fa-map-marker-alt"></i> 0.5 km</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Deal Card 3 -->
                <a href="#">
                    <div class="deal-card">
                        <img src="./img/av3.jpg" alt="Deal 3 Image"> <!-- Replace with actual image path -->
                        <div class="deal-info">
                            <div class="title">Tré Trộn Trần Linh - Trần Văn Bình</div>
                            <div>
                                <span class="rating"><i class="fas fa-star"></i> 5.0 (40+)</span>
                                <span class="distance"><i class="fas fa-map-marker-alt"></i> 1.2 km</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Deal Card 4 -->
                <a href="#">
                    <div class="deal-card">
                        <img src="./img/av4.jpg" alt="Deal 3 Image"> <!-- Replace with actual image path -->
                        <div class="deal-info">
                            <div class="title">Tré Trộn Trần Linh - Trần Văn Bình</div>
                            <div>
                                <span class="rating"><i class="fas fa-star"></i> 5.0 (40+)</span>
                                <span class="distance"><i class="fas fa-map-marker-alt"></i> 1.2 km</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Add more deal cards as needed -->
            </div>

            <!-- Điểm du lịch -->
            <div class="deal-header1">
                <span>🚗 Điểm HOT nên đi VILLBike - VILLCar 🛵</span>
            </div>
            <div class="scrollable-cards">
                <a href="#">
                    <div class="card">
                        <img src="./img/honda.jpg" alt="Hòn Đá Bạc">
                        <p>Hòn Đá Bạc</p>
                    </div>
                </a>

                <a href="#">
                    <div class="card">
                        <img src="./img/chua.jpg" alt="Chùa Thiên Hậu">
                        <p>Chùa Thiên Hậu</p>
                    </div>
                </a>

                <a href="#">
                    <div class="card">
                        <img src="./img/camau.jpg" alt="Mũi Cà Mau">
                        <p>Mũi Cà Mau</p>
                    </div>
                </a>

                <a href="#">
                    <div class="card">
                        <img src="./img/vt.jpg" alt="Mũi Cà Mau">
                        <p>Vũng Tàu</p>
                    </div>
                </a>
                <!-- Add more cards as needed -->
            </div>

            <!-- Ưu đãi khác -->
            <div class="deal-header1">
                <span1>Những ưu đãi khác từ VILL</span1>
            </div>

            <div class="promo-container">
                <a href="#">
                    <div class="promo-card">
                        <img src="./img/ha.jpg" alt="Halloween Mở Tiệc Cùng VILL">
                        <div class="promo-card-content">
                            <p class="promo-card-title">HALLOWEEN Mở Tiệc Cùng VILL</p>
                            <div class="promo-card-time">
                                <i class="fas fa-clock"></i>
                                <span>1 phút đọc</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="promo-card">
                        <img src="./img/sale.webp" alt="Vạn Món Ngon Giảm Sâu Tới 60%">
                        <div class="promo-card-content">
                            <p class="promo-card-title">Vạn Món Ngon Giảm Sâu Tới 60%</p>
                            <div class="promo-card-time">
                                <i class="fas fa-clock"></i>
                                <span>1 phút đọc</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="promo-card">
                        <img src="./img/deal.jpg" alt="Chớp Deal Tẹt Ga">
                        <div class="promo-card-content">
                            <p class="promo-card-title">Chớp Deal Tẹt Ga cùng VILL</p>
                            <div class="promo-card-time">
                                <i class="fas fa-clock"></i>
                                <span>1 phút đọc</span>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="#">
                    <div class="promo-card">
                        <img src="./img/vill.jpg" alt="Đồng Hành Cùng VILLExpress">
                        <div class="promo-card-content">
                            <p class="promo-card-title">Đồng Hành Cùng VILLExpress</p>
                            <div class="promo-card-time">
                                <i class="fas fa-clock"></i>
                                <span>1 phút đọc</span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Add more cards as needed -->
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include 'footer.php' ?>
</body>
<script>
    function togglePopup() {
        document.getElementById("popup").classList.toggle("active");
    }
</script>
</html>