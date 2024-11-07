<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ưu đãi</title>
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
    <link rel="stylesheet" href="./css/endow.css">
    <link rel="stylesheet" href="./css/global.css">
</head>
<body>
    <header>
        <i class="fas fa-arrow-left" onclick="window.history.back()"></i> Ưu đãi
    </header>

    <main>
        <input type="text" class="promo-input" placeholder="Nhập mã khuyến mãi hoặc mã quà tặng tại đây">

        <div class="promo-item">
            <img src="./img/car.png" alt="GrabBike">
            <div class="promo-details">
                <h5>Giảm 23% GrabBike | 9-13h</h5>
            </div>
            <div class="promo-radio">
                <input type="radio" name="promo" onclick="toggleRadio(this)">
            </div>
        </div>

        <div class="promo-item">
            <img src="./img/car.png" alt="GrabBike">
            <div class="promo-details">
                <h5>Ưu đãi 10% | Tối đa 30K</h5>
            </div>
            <div class="promo-radio">
                <input type="radio" name="promo" onclick="toggleRadio(this)">
            </div>
        </div>

        <div class="promo-item">
            <img src="./img/car.png" alt="GrabBike">
            <div class="promo-details">
                <h5>Ưu đãi 5% | Tối đa 30K</h5>
            </div>
            <div class="promo-radio">
                <input type="radio" name="promo" onclick="toggleRadio(this)">
            </div>
        </div>
    </main>
</body>
<script src="./js/endow.js"></script>
</html>