function openTab(tabName, element) {
    // Ẩn tất cả các tab
    var contents = document.getElementsByClassName("tab-content");
    for (var i = 0; i < contents.length; i++) {
        contents[i].classList.remove("active");
    }
    // Hiển thị tab đã chọn
    document.getElementById(tabName).classList.add("active");

    // Reset tất cả các nút
    var buttons = document.getElementsByClassName("btn");
    for (var i = 0; i < buttons.length; i++) {
        buttons[i].classList.remove("btn-active");
        buttons[i].style.backgroundColor = "#e9f6f2";
        buttons[i].style.color = "#ff6d00";
    }
    // Thêm lớp active vào nút đã chọn
    element.classList.add("btn-active");
    element.style.backgroundColor = "#1a3b34";
    element.style.color = "#fff";
}