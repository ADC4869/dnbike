<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoạt động</title>
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
    <link rel="stylesheet" href="./css/activate.css">
    <link rel="stylesheet" href="./css/footer.css">
</head>
<body>
    <header>
        <div class="activity-container">
            <div class="activity-title">Hoạt động gần đây</div>
            <div class="tab-list">
                <div class="tab active" onclick="activateTab(this, 'food')">
                    <i class="fas fa-utensils"></i>
                    <span>Đồ ăn</span>
                </div>
                <div class="tab" onclick="activateTab(this, 'transport')">
                    <i class="fas fa-motorcycle"></i>
                    <span>Di chuyển</span>
                </div>
                <div class="tab" onclick="activateTab(this, 'delivery')">
                    <i class="fas fa-box"></i>
                    <span>Giao hàng</span>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="activity-container" style="margin-top: -40px;">
            <!-- Tab Content -->
            <div id="food" class="tab-content active">
                <div class="order-card">
                    <div class="order-header">
                        <span>Cơm Phần Gia Hân – Lý Văn Lâm</span>
                        <span class="reorder">Đặt lại</span>
                    </div>
                    <div class="order-details">
                        <div class="order-info">
                            <span><i class="fas fa-calendar-alt"></i> Tổng đơn</span>
                            <span class="order-value">53.000đ</span>
                        </div>
                        <div class="order-info">
                            <span><i class="fas fa-clock"></i> Thời gian</span>
                            <span class="order-value">18:02, 11-09-2024</span>
                        </div>
                        <div class="status">Đã đến nơi</div>
                    </div>
                </div>

                <div class="order-card">
                    <div class="order-header">
                        <span>Cơm Gà Xối Mỡ – Lý Chiêu Hoàng</span>
                        <span class="reorder">Đặt lại</span>
                    </div>
                    <div class="order-details">
                        <div class="order-info">
                            <span><i class="fas fa-calendar-alt"></i> Tổng đơn</span>
                            <span class="order-value">50.000đ</span>
                        </div>
                        <div class="order-info">
                            <span><i class="fas fa-clock"></i> Thời gian</span>
                            <span class="order-value">19:00, 12-09-2024</span>
                        </div>
                        <div class="status">Đã đến nơi</div>
                    </div>
                </div>
            </div>

            <div id="transport" class="tab-content">
                <div class="order-card">
                    <div class="order-header">
                        <span>GrabBike – Nguyễn Trung Trực</span>
                        <span class="reorder">Đặt lại</span>
                    </div>
                    <div class="order-details">
                        <div class="order-info">
                            <span><i class="fas fa-calendar-alt"></i> Tổng đơn</span>
                            <span class="order-value">33.000đ</span>
                        </div>
                        <div class="order-info">
                            <span><i class="fas fa-clock"></i> Thời gian</span>
                            <span class="order-value">17:09, 10-06-2024</span>
                        </div>
                        <div class="status">Đã đến nơi</div>
                    </div>
                </div>
            </div>

            <div id="delivery" class="tab-content">
                <div class="order-card">
                    <div class="order-header">
                        <span>Giao Hàng Nhanh – Tân Bình</span>
                        <span class="reorder">Đặt lại</span>
                    </div>
                    <div class="order-details">
                        <div class="order-info">
                            <span><i class="fas fa-calendar-alt"></i> Tổng đơn</span>
                            <span class="order-value">45.000đ</span>
                        </div>
                        <div class="order-info">
                            <span><i class="fas fa-clock"></i> Thời gian</span>
                            <span class="order-value">14:32, 15-07-2024</span>
                        </div>
                        <div class="status">Đã đến nơi</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?php include 'footer.php' ?>
</body>
<script src="./js/tab.js"></script>
</html>