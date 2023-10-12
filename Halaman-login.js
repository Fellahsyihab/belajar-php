// login.js
// Custom JavaScript for the login page

// Simulated user credentials (static)
const validUsername = "fellahsyihab";
const validPassword = "12345678";

document.addEventListener("DOMContentLoaded", function () {
    const loginForm = document.getElementById("login-form");
    loginForm.addEventListener("submit", function (event) {
        event.preventDefault();

        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;

        if (username === validUsername && password === validPassword) {
            // Redirect to the dashboard on successful authentication
            window.location.href = "dashboard.php";
        } else {
            alert("Authentication failed. Please try again.");
        }
    });
});
