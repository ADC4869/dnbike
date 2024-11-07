function confirmLocation() {
    // Lấy giá trị từ các ô input
    const pickup = document.getElementById("pickup").value.trim();
    const destination = document.getElementById("destination").value.trim();

    // Kiểm tra nếu cả hai ô đều không rỗng
    if (pickup !== "" && destination !== "") {
        // Nếu đã nhập đủ, chuyển đến trang mới
        window.location.href = "./drive.php"; // Thay "newpage.html" bằng trang bạn muốn chuyển đến
    } else {
        // Nếu chưa nhập đủ, hiển thị cảnh báo
        alert("Vui lòng nhập đầy đủ Điểm đón và Điểm đến.");
    }
}