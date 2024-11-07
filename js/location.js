function confirmLocation() {
    // Lấy giá trị từ các ô input
    const pickup = document.getElementById("pickup").value.trim();
    const destination = document.getElementById("destination").value.trim();

    // Kiểm tra nếu cả hai ô đều không rỗng
    if (pickup !== "" && destination !== "") {
        // Nếu đã nhập đủ, hiển thị phần main
        document.querySelector("main").style.display = "block";
    } else {
        // Nếu chưa nhập đủ, hiển thị cảnh báo
        alert("Vui lòng nhập đầy đủ Điểm đón và Điểm đến.");
    }
}