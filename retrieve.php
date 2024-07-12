
<?php
// Establish database connection
$conn = mysqli_connect("localhost", "root", "", "bridging lives");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select data from the request table
$sql = "SELECT Req_id, R_id, R_phn, R_town_city, R_district, R_blood FROM request";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/style_login_d.css" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;subset=devanagari,latin-ext" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #31363F;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        td{
            background-color: #DDDDDD;
        }
    </style>
</head>
<body>

<h2><center>Requests</center></h2>

<table>
    <thead>
        <tr>
            <th>Request ID</th>
            <th>R ID</th>
            <th>R Phone</th>
            <th>R Town/City</th>
            <th>R District</th>
            <th>R Blood</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Fetch rows from the result set
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['Req_id'] . "</td>";
            echo "<td>" . $row['R_id'] . "</td>";
            echo "<td>" . $row['R_phn'] . "</td>";
            echo "<td>" . $row['R_town_city'] . "</td>";
            echo "<td>" . $row['R_district'] . "</td>";
            echo "<td>" . $row['R_blood'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>

<?php
// Close database connection
mysqli_close($conn);
?>
