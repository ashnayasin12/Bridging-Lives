document.addEventListener("DOMContentLoaded", function() {
    // Function to validate form fields
    function validateForm() {
        var firstName = document.getElementById("firstName").value;
        var lastName = document.getElementById("lastName").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var district = document.getElementById("district").value;
        var dob = document.getElementById("dob").value;
        var bloodType = document.getElementById("bloodType").value;
        var phoneNumber = document.getElementById("phoneNumber").value;
        var townCity = document.getElementById("townCity").value;

        if (firstName === "") {
            alert("Please enter your first name.");
            return false;
        }

        if (lastName === "") {
            alert("Please enter your last name.");
            return false;
        }

        if (email === "") {
            alert("Please enter your email.");
            return false;
        }

        if (password.length < 8) {
            alert("Password should be at least 8 characters long.");
            return false;
        }

        if (district === "") {
            alert("Please select your district.");
            return false;
        }

        if (dob === "") {
            alert("Please enter your date of birth.");
            return false;
        }

        if (bloodType === "") {
            alert("Please select your blood type.");
            return false;
        }

        if (phoneNumber.length !== 10) {
            alert("Phone number should be exactly 10 digits long.");
            return false;
        }

        if (townCity === "") {
            alert("Please enter your town/city.");
            return false;
        }

        return true; // Return true if all validations pass
    }

    // Event listener for form submission
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        // Prevent the default form submission action
        event.preventDefault();
        
        // Validate form fields before submission
        if (validateForm()) {
            // Prepare form data for submission
            var formData = new FormData(this);
            // Submit form data to PHP script for database insertion
            fetch('insert_rec.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (response.ok) {
                    // Redirect to donor login page after successful submission
                    window.location.href = "login_r.php";
                } else {
                    throw new Error('Error occurred during form submission.');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('An error occurred during form submission.');
            });
        }
    });

    // Event listener for password toggle
    const togglePasswordButton = document.querySelector('.toggle-password');
    togglePasswordButton.addEventListener('click', function() {
        const passwordInput = document.getElementById('password');
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);

        // Toggle the eye icon class based on the password visibility
        togglePasswordButton.classList.toggle('fa-eye-slash');
        togglePasswordButton.classList.toggle('fa-eye');
    });
});
