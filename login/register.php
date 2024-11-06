<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
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
    <link rel="stylesheet" href="./css/register.css">
    <link rel="stylesheet" href="../css/global.css">
</head>
<body>
    <header>
        <img src="../img/dnbike.png" alt="DN Bike Logo" class="logo">
        <div class="title">ĐĂNG KÝ TÀI KHOẢN KHÁCH HÀNG</div>
    </header>

    <main>
        <div class="form-group">
            <input type="text" id="phone" placeholder="Số điện thoại">
        </div>
        
        <div class="form-group">
            <input type="password" id="password" placeholder="Mật khẩu">
            <i class="fa fa-eye eye-icon" onclick="togglePassword('password', this)"></i>
        </div>
        
        <div class="form-group">
            <input type="password" id="confirm-password" placeholder="Nhập lại mật khẩu">
            <i class="fa fa-eye eye-icon" onclick="togglePassword('confirm-password', this)"></i>
        </div>
        
        <button class="btn-submit" onclick="submitForm()">TẠO TÀI KHOẢN</button>
    </main>
</body>
<script src="./js/register.js"></script>
</html>