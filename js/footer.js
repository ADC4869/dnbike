// Function to set active footer item based on current URL
function setActiveFooterItem() {
    // Get current URL path
    const currentPath = window.location.pathname;

    // Reset active class for all footer items
    document.querySelectorAll('.footer-item').forEach(item => {
        item.classList.remove('active');
    });

    // Set active class based on URL path
    if (currentPath.includes("index") || currentPath === "/") {
        document.getElementById("home").classList.add("active");
    } else if (currentPath.includes("activate")) {
        document.getElementById("activity").classList.add("active");
    } else if (currentPath.includes("video")) {
        document.getElementById("video").classList.add("active");
    } else if (currentPath.includes("notification")) {
        document.getElementById("notification").classList.add("active");
    } else if (currentPath.includes("account")) {
        document.getElementById("account").classList.add("active");
    }
}

// Call function on page load
window.onload = setActiveFooterItem;