function confirmLocation() {
    const pickup = document.getElementById("pickup").value.trim();
    const destination = document.getElementById("destination").value.trim();

    if (pickup === "" && destination === "") {
        alert("Vui lòng nhập đầy đủ Điểm đón và Điểm đến.");
    } else if (pickup === "") {
        alert("Vui lòng nhập Điểm đón.");
    } else if (destination === "") {
        alert("Vui lòng nhập Điểm đến.");
    } else {
        // Show service info immediately
        document.getElementById("serviceInfo").style.display = "flex";

        // Show buttons container after 1-second delay
        setTimeout(() => {
            document.getElementById("buttonsContainer").style.display = "flex";
        }, 1000);
    }
}

function bookRide() {
    // Show driver info only when the "Đặt Xe" button is clicked
    document.getElementById("driverInfo").style.display = "flex";
}