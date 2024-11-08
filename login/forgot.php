<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu</title>
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
    <link rel="stylesheet" href="./css/forgot.css">
    <link rel="stylesheet" href="../css/global.css">
</head>
<body>
    <div class="login-container">
        <header>
            <div class="login-logo">
                <img src="../img/dnbike.png" alt="DN Bike Logo">
            </div>
            <div class="login-title">Vui lòng nhập số điện thoại</div>
        </header>

        <main>
            <form class="login-form mt-4" action="password.php" method="POST">
                <div class="input-container mb-3">
                    <span class="input-icon">
                        Số điện thoại
                    </span>
                    <input type="text" class="form-control" placeholder="SỐ ĐIỆN THOẠI" name="phone" required pattern="[0-9]{10}">
                </div>

                <button type="submit" class="login-btn">TIẾP THEO</button>
            </form>
        </main>
    </div>

    <div class="bottom-wave"></div>
</body>
</html>