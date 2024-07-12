<?php
// Connect to your MySQL database
$conn = mysqli_connect("localhost", "root", "", "bridging_lives");

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Check if form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Get username (email) and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Prepare a SQL query to check if the user exists with the provided email and password
    $sql = "SELECT * FROM donor WHERE D_email = '$email' AND D_pass = '$password'";
    
    // Execute the query
    $result = mysqli_query($conn, $sql);
    
    // Check if any rows were returned
    if(mysqli_num_rows($result) == 1){
        // User exists, set session or redirect with success message
        // For demonstration, I'm echoing 'success' as the response
        echo 'success';
        exit();
    } else {
        // No matching user found, echo 'error' as the response
        echo 'error';
        exit();
    }
}
?>
