<?php

// Establish database connection

$conn = mysqli_connect("localhost", "root", "", "bridging lives");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from AJAX request
$bloodType = $_POST['bloodType'];
$location = $_POST['location'];

// Insert data into the request table
 $sql = "INSERT INTO request (R_id,R_phn,R_town_city,R_district,R_blood)
         SELECT R_id,R_phn,R_town_city,R_district,R_blood
         FROM recipient
         WHERE R_blood = '$bloodType' AND R_town_city = '$location'";

 //Execute the SQL query
 if (mysqli_query($conn,$selectQuery,$insertQuery)) {
     echo "Record inserted successfully";
 } else {
     echo "Error inserting record: " . mysqli_error($conn);
 }
 // Close database connection
mysqli_close($conn);

?>
