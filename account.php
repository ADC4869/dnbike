<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tài khoản</title>
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
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/account.css">
</head>
<body>
<div class="profile-page">
        <!-- Header Section -->
        <header class="text-white p-4">
            <div class="header-content d-flex align-items-center">
                <div class="profile-pic bg-light text-dark d-flex align-items-center justify-content-center me-3">
                    LĐ
                </div>
                <div class="profile-info">
                    <h2 class="h5 mb-1">Lê Văn Đạt</h2>
                    <div class="d-flex align-items-center">
                        <p class="mb-1 me-2">0943591351</p>
                        <span class="badge bg-danger">Chưa xác thực</span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content Section -->
        <main class="bg-light p-3">
            <div class="account-section mb-3">
                <h3 class="h6 mb-3">Tài khoản của tôi</h3>
                <ul class="list-unstyled">
                    <li class="item d-flex align-items-center justify-content-between py-2">
                        <div class="d-flex align-items-center">
                            <i class="icon fas fa-heart me-2"></i>
                            <span>Yêu thích</span>
                        </div>
                        <span class="arrow">›</span>
                    </li>
                    <li class="item d-flex align-items-center justify-content-between py-2">
                        <div class="d-flex align-items-center">
                            <i class="icon fas fa-map-marker-alt me-2"></i>
                            <span>Địa điểm đã lưu</span>
                        </div>
                        <span class="arrow">›</span>
                    </li>
                    <li class="item d-flex align-items-center justify-content-between py-2">
                        <div class="d-flex align-items-center">
                            <i class="icon fas fa-credit-card me-2"></i>
                            <span>Quản lí thanh toán</span>
                        </div>
                        <span class="arrow">›</span>
                    </li>
                    <li class="item d-flex align-items-center justify-content-between py-2">
                        <div class="d-flex align-items-center">
                            <i class="icon fas fa-gift me-2"></i>
                            <span>Thẻ quà tặng</span>
                        </div>
                        <span class="arrow">›</span>
                    </li>
                    <li class="item d-flex align-items-center justify-content-between py-2">
                        <div class="d-flex align-items-center">
                            <i class="icon fas fa-user-friends me-2"></i>
                            <span>Giới thiệu VILL</span>
                        </div>
                        <span class="arrow">›</span>
                    </li>
                </ul>
            </div>

            <div class="help-section">
                <h3 class="h6 mb-3">Trợ giúp</h3>
                <ul class="list-unstyled">
                    <li class="item d-flex align-items-center justify-content-between py-2">
                        <div class="d-flex align-items-center">
                            <i class="icon fas fa-envelope me-2"></i>
                            <span>Trung tâm trợ giúp</span>
                        </div>
                        <span class="arrow">›</span>
                    </li>
                    <li class="item d-flex align-items-center justify-content-between py-2">
                        <div class="d-flex align-items-center">
                            <i class="icon fas fa-undo-alt me-2"></i>
                            <span>Chính sách hoàn tiền</span>
                        </div>
                        <span class="arrow">›</span>
                    </li>
                    <li class="item d-flex align-items-center justify-content-between py-2">
                        <div class="d-flex align-items-center">
                            <i class="icon fas fa-file-alt me-2"></i>
                            <span>Điều khoản và điều kiện</span>
                        </div>
                        <span class="arrow">›</span>
                    </li>
                </ul>
            </div>

            <div class="help-section">
                <h3 class="h6 mb-3">Đăng ký đối tác</h3>
                <ul class="list-unstyled">
                    <li class="item d-flex align-items-center justify-content-between py-2">
                        <div class="d-flex align-items-center">
                            <i class="icon fas fa-car me-2"></i>
                            <span>Đăng ký làm tài xế</span>
                        </div>
                        <span class="arrow">›</span>
                    </li>
                    <li class="item d-flex align-items-center justify-content-between py-2">
                        <div class="d-flex align-items-center">
                            <i class="icon fas fa-box-open me-2"></i>
                            <span>Đăng ký dịch vụ giao hàng</span>
                        </div>
                        <span class="arrow">›</span>
                    </li>
                    <li class="item d-flex align-items-center justify-content-between py-2">
                        <div class="d-flex align-items-center">
                            <i class="icon fas fa-users me-2"></i>
                            <span>Đăng ký cộng tác viên</span>
                        </div>
                        <span class="arrow">›</span>
                    </li>
                </ul>
            </div>
        </main>
    </div>

    <!-- Footer -->
    <?php include 'footer.php' ?>
</body>
</html>