function validateForm(event) {
    event.preventDefault(); // Prevent form submission
  
    // Get form values
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("confirmPassword").value;
  
    // Perform validation
    if (password !== confirmPassword) {
      alert("Passwords do not match");
      return;
    }
  
    // If validation passes, you can perform further actions like submitting the form or sending data to a server
    alert("Registration successful!");
    document.getElementById("registrationForm").reset(); // Reset the form
  }
  