function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username === "" || password === "") {
        alert("Vui lòng nhập tên đăng nhập và mật khẩu.");
        return false;
    }
    return true; // Cho phép gửi biểu mẫu nếu tất cả trường đều được điền
}