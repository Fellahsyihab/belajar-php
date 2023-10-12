// dashboard.js
// Custom JavaScript for the dashboard

// Function to handle a click event on the "New Product" button
function handleNewProductClick() {
    alert("New Product button clicked!");
}

// Add an event listener to the "New Product" button
document.addEventListener("DOMContentLoaded", function () {
    const newProductButton = document.querySelector(".nav-link[href='newproduct.html']");
    newProductButton.addEventListener("click", handleNewProductClick);
});