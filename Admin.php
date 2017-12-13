
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
<img align="center" src="https://upload.wikimedia.org/wikipedia/en/0/09/CSUDH_Seal.jpg"  style="width:350px;height:350px; ">

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "csc583_final";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  echo '<h1 align="center" > CSC583 Final </h1>';
  
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>User ID</th><th>User Name</th><th>Email</th><th>Telephone</th><th>Company</th><th>Visit Type</th><th>Escort Name</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["userId"]. "</td><td>" . $row["userName"]. "</td><td>" . $row["userEmail"]. "</td><td>" . $row["userTelephone"]. "</td><td>" . $row["userCompany"]. "</td><td>" . $row["officialvisit"]. "</td><td>" . $row["escortName"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>

