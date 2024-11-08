<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập mật khẩu</title>
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
    <link rel="stylesheet" href="./css/password.css">
    <link rel="stylesheet" href="../css/back.css">
    <link rel="stylesheet" href="../css/global.css">
</head>
<body>
    <div class="login-container">
        <header>
            <div class="login-logo">
                <img src="../img/dnbike.png" alt="DN Bike Logo">
            </div>
            <div class="login-title">Nhập lại mật khẩu</div>
        </header>

        <main>
            <form class="login-form mt-4" action="success-password.php" method="POST">
                <div class="input-container mb-3">
                    <span class="input-icon">Nhập mật khẩu mới</span>
                    <input type="password" name="new-password" id="new-password" class="form-control"
                        placeholder="NHẬP MẬT KHẨU" pattern=".{6,}" title="Mật khẩu phải chứa ít nhất 6 ký tự" required>
                    <span class="toggle-password">
                        <i class="fas fa-eye" id="toggle-icon"></i>
                    </span>
                </div>

                <button type="submit" class="login-btn">XÁC NHẬN</button>
            </form>
        </main>
    </div>

    <?php include '../back.php' ?>
</body>
<script src="./js/dongmo.js"></script>
</html>