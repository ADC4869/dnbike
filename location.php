<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Địa điểm</title>
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
    <link rel="stylesheet" href="./css/location.css">
    <link rel="stylesheet" href="./css/global.css">
</head>
<body>
    <div class="location-container">
        <!-- Điểm đón -->
        <div class="location-input" style="border: 2px solid #7ae4d2;">
            <i class="fas fa-dot-circle icon"></i>
            <input type="text" id="pickup" placeholder="Điểm đón">
            <button class="remove-btn"><i class="fas fa-times"></i></button>
        </div>

        <!-- Điểm đến -->
        <div class="location-input">
            <i class="fas fa-map-marker-alt icon" style="color: #ffa500;"></i>
            <input type="text" id="destination" placeholder="Điểm đến">
            <button class="remove-btn"><i class="fas fa-plus"></i></button>
        </div>

        <!-- Nút xác nhận -->
        <button class="confirm-button" onclick="confirmLocation()">XÁC NHẬN ĐỊA ĐIỂM</button>
    </div>
</body>
<script src="./js/location.js"></script>
</html>