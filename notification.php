<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông báo</title>
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
    <link rel="stylesheet" href="./css/notification.css">
</head>
<body>
    <header>
        <div class="activity-title">Thông báo</div>
        <div class="tab-bar">
            <div class="tab active" onclick="showTab('messages')">Tin nhắn</div>
            <div class="tab" onclick="showTab('notifications')">Thông báo</div>
        </div>
    </header>

    <main>
        <div id="messages" class="content active">
            <img src="./img/tb.png" alt="icon" class="message-icon">
            <div class="text">Bạn chưa có tin nhắn</div>
            <div class="subtext">Bạn sẽ nhận được tin nhắn khi bắt đầu 1 cuộc trò chuyện</div>
            <div class="reload" onclick="reloadPage()">Tải lại</div>
        </div>

        <div id="notifications" class="content">
            <div class="text">Không có thông báo</div>
        </div>
    </main>

    <!-- Footer -->
    <?php include 'footer.php' ?>
</body>
<script src="./js/notification.js"></script>
</html>