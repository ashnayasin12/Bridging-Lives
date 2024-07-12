<!DOCTYPE html>
<html>
 
<body>
    <center>
        <?php
 
         //servername => localhost
         //username => root
        // password => empty
         //database name => bridging lives
        $conn = mysqli_connect("localhost", "root", "", "bridging lives");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $fname =  $_REQUEST['firstName'];
        $email = $_REQUEST['email'];
        $weight = $_REQUEST['weight'];
        $district = $_REQUEST['district'];
        $lname = $_REQUEST['lastName'];
        $dob = $_REQUEST['dob'];
        $blood = $_REQUEST[ 'bloodType'] ;
        if($blood=='other')
        $blood = $_REQUEST[ 'otherBloodType'] ;
        $phone_number = $_REQUEST[ 'phoneNumber' ];
        $town = $_REQUEST[ 'townCity'] ;
        $pass = $_REQUEST[ 'password' ] ;

     
         
        // Performing insert query execution
        // here our table name is donor
        $sql = "INSERT INTO  donor (D_fname,D_lname,D_dob,D_email,D_Phn,D_town_city,D_district,D_blood,D_weight,D_pass) VALUES ('$fname', 
            '$lname','$dob','$email','$phone_number','$town','$district','$blood','$weight','$pass')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>"; 
 
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>
