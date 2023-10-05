// login.js
$(document).ready(function() {
  // Function to handle login form submission
  $("#login-form").submit(function(e) {
    e.preventDefault(); // Prevent the default form submission
    
    // Get input values
    var email = $("#email").val();
    var password = $("#password").val();
    
    // Perform login validation here (you can send an AJAX request to your server)
    // For this example, we'll just show an alert
    if (email === "user@example.com" && password === "password") {
      alert("Login successful!");
      // Redirect to another page or perform additional actions as needed
    } else {
      alert("Login failed. Please check your credentials.");
    }
  });
});
