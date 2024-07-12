document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        const username = document.querySelector("input[type='email']").value;
        const password = document.querySelector("input[type='password']").value;

        // Validate empty fields
        if (username.trim() === "" || password.trim() === "") {
            alert("Please fill in all fields.");
            event.preventDefault(); // Prevent form submission
            return;
        }

        // Redirect only if fields are filled
        window.location.href = "donor_home.html";
    });

    
});

document.addEventListener("DOMContentLoaded", function() {
    // Event listener for form submission
    document.getElementById('loginForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent form submission

        // Get form data
        var formData = new FormData(this);

        // Validate form fields
        var email = formData.get('email');
        var password = formData.get('password');

        if (!email || !password) {
            alert('Please enter both email and password.');
            return;
        }

        // Perform login validation
        fetch('login_valid.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (response.ok) {
                // Redirect to dashboard or another page upon successful login
                window.location.href = "donor_home.php";
            } else {
                throw new Error('Invalid email or password.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Invalid email or password.');
        });
    });
});

