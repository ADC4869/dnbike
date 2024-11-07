<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt xe</title>
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
    <link rel="stylesheet" href="./css/drive.css">
    <link rel="stylesheet" href="./css/global.css">
</head>
<body>
    <header>
        <!-- Map Section -->
        <div class="map-container">
            <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.682229252896!2d106.68026341526073!3d10.76262299232847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175292922f4c3af%3A0xb48d7f267989d2f!2sHo%20Chi%20Minh%20City!5e0!3m2!1sen!2s!4v1618892763689!5m2!1sen!2s"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </header>

    <main>
        <!-- Service Info Section -->
        <div class="service-info">
            <img src="./img/car.png" alt="Service Icon">
            <div>
                <p class="mb-0">DIDI24H Lái Xe Hộ <br> <small>5 KM</small></p>
            </div>
            <div class="text-end">
                <p class="mb-0 text-danger">14,000đ</p>
            </div>
        </div>

        <!-- Buttons Section -->
        <div class="buttons-container">
            <button class="btn btn-custom offer-btn"  onclick="window.location.href='endow.php'">Ưu đãi</button>
            <button class="btn btn-custom book-btn">Đặt Xe</button>
        </div>

        <!-- Driver Info Section -->
        <div class="driver-info">
            <img src="./img/avt.jpg" alt="Driver Image">
            <div class="driver-details">
                <p class="mb-0">Phạm Văn Hùng <i class="fas fa-star text-warning"></i> 5.0</p>
                <p class="mb-0">50H-283.63 - VFE34 • Xanh</p>
                <p class="mb-0 text-danger">Tài Xế Sẽ Đến Sau 3 phút</p>
            </div>
        </div>
    </main>

    <footer>
        <!-- Back Button in the Footer -->
        <button class="back-btn" onclick="history.back()">
            <i class="fas fa-arrow-left"></i>
        </button>
    </footer>
</body>
</html>