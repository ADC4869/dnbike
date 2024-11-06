function togglePassword(inputId, icon) {
    const input = document.getElementById(inputId);
    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
    } else {
        input.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
    }
}

function submitForm() {
    // Get input values
    const phone = document.getElementById("phone").value.trim();
    const password = document.getElementById("password").value.trim();
    const confirmPassword = document.getElementById("confirm-password").value.trim();

    // Check if all fields are filled
    if (phone === "" || password === "" || confirmPassword === "") {
        alert("Vui lòng điền vào tất cả các thông tin để đăng ký.");
        return;
    }

    // Check if passwords match
    if (password !== confirmPassword) {
        alert("Mật khẩu và xác nhận mật khẩu không khớp.");
        return;
    }

    // Redirect to another page if all checks are successful
    window.location.href = "success.php"; // Replace with the actual page URL
}