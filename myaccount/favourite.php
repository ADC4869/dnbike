<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yêu thích</title>
    <!-- Fontawesome css -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/brands.min.css">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/css/fontawesome.min.css">
    <!-- Fontawesome js -->
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/all.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/brands.min.js">
    <link rel="stylesheet" href="../fontawesome-free-6.6.0-web/js/fontawesome.min.js">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
    <!-- Bootstrap js -->
    <link rel="stylesheet" href="../bootstrap/dist/js/bootstrap.bundle.min.js">
    <!-- Css -->
    <link rel="stylesheet" href="./css/favourite.css">
    <link rel="stylesheet" href="../css/global.css">
</head>
<body>
    <header>
        <div class="container">
            <!-- Header -->
            <div class="header">
                <i class="fas fa-arrow-left" onclick="goBack()"></i> Yêu thích
            </div>

            <!-- Cards Section -->
            <div class="cards">
                <div class="content">
                    <img src="../img/yt.jpg">
                </div>
            </div>

            <!-- Footer Text -->
            <div class="footer">
                <span>Chưa tìm được quán yêu thích?</span>
                <br> Khám phá thêm quán ở các đề xuất bên dưới
            </div>
        </div>
    </header>

    <main>
        <div class="container my-4">
            <h5 class="fw-bold">Lựa chọn đặt món hàng đầu</h5>
            <div class="scroll-container">
                <div class="food-card position-relative">
                    <img src="../img/bun.jpg" alt="Bún Bò Gốc Huế">
                    <span class="discount-tag">Giảm 50%</span>
                    <div class="food-content">
                        <p class="food-title">Bún Bò Gốc Huế OMI</p>
                        <p class="food-details">1.6 km 
                            <span class="text-warning"><i class="fas fa-star"></i> 4.7</span>
                        </p>
                        <p class="text-success">Lên đến 50%</p>
                    </div>
                </div>

                <div class="food-card position-relative">
                    <img src="../img/bun1.webp" alt="Bún Măng Vịt">
                    <span class="discount-tag">Giảm 20%</span>
                    <div class="food-content">
                        <p class="food-title">BÚN MĂNG VỊT - BÚN CHẢ GIÒ ĐÌ LOAN</p>
                        <p class="food-details">2.5 km 
                            <span class="text-warning"><i class="fas fa-star"></i> 4.2</span>
                        </p>
                        <p class="text-success">Giảm 20%</p>
                    </div>
                </div>

                <div class="food-card position-relative">
                    <img src="../img/com.webp" alt="Cơm Tấm Sườn">
                    <span class="discount-tag">Giảm 10%</span>
                    <div class="food-content">
                        <p class="food-title">Cơm Tấm Sườn Bì Chả</p>
                        <p class="food-details">5.0 km 
                            <span class="text-warning"><i class="fas fa-star"></i> 4.5</span>
                        </p>
                        <p class="text-success">Lên đến 10%</p>
                    </div>
                </div>

                <div class="food-card position-relative">
                    <img src="../img/hutieu.jpg" alt="Hủ Tiếu Mì">
                    <span class="discount-tag">Giảm 40%</span>
                    <div class="food-content">
                        <p class="food-title">Hủ tiếu mì thập cẩm</p>
                        <p class="food-details">3.0 km 
                            <span class="text-warning"><i class="fas fa-star"></i> 4.8</span>
                        </p>
                        <p class="text-success">Lên đến 40%</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
<script src="../js/back.js"></script>
</html>