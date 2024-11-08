<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
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
    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="../css/global.css">
</head>
<body>
    <div class="login-container">
        <header>
            <div class="login-logo">
                <img src="../img/dnbike.png" alt="DN Bike Logo">
            </div>
            <div class="login-title">XIN CHÀO</div>
        </header>

        <main>
            <form class="login-form mt-4" action="../index.php" method="POST" onsubmit="return validateForm()">
                <div class="input-container mb-3">
                    <span class="input-icon">
                        <i class="fas fa-user"></i>
                    </span>
                    <input type="text" id="username" class="form-control" placeholder="TÊN ĐĂNG NHẬP">
                </div>

                <div class="input-container mb-3">
                    <span class="input-icon">
                        <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" id="password" class="form-control" placeholder="MẬT KHẨU">
                    <span class="toggle-password" onclick="togglePassword()">
                        <i class="fas fa-eye" id="toggleIcon"></i>
                    </span>
                </div>

                <button type="submit" class="login-btn">ĐĂNG NHẬP</button>
            </form>

            <div class="login-links mt-3">
                <a href="forgot.php">Quên mật khẩu?</a><br>
                <a href="register.php" style="float: right; margin-top: 10px;">Bạn chưa có tài khoản?</a>
            </div>
        </main>
    </div>

    <div class="bottom-wave"></div>
</body>
<script src="./js/login.js"></script>
<script>
function togglePassword() {
    const passwordInput = document.getElementById("password");
    const toggleIcon = document.getElementById("toggleIcon");

    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        toggleIcon.classList.remove("fa-eye-slash");
        toggleIcon.classList.add("fa-eye");
    } else {
        passwordInput.type = "password";
        toggleIcon.classList.remove("fa-eye");
        toggleIcon.classList.add("fa-eye-slash");
    }
}
</script>
</html>