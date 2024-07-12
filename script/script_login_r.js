document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
        const username = document.querySelector("input[type='email']").value;
        const password = document.querySelector("input[type='password']").value;

        // Validate empty fields
        if (username.trim() === "" || password.trim() === "") {
            alert("Please fill in all fields.");
            event.preventDefault();
            return;
        }
        window.location.href = "rec_home.php";

    });

 
});
