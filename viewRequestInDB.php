<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 2px solid black;
    padding:10px 20px 10px 20px;
    margin-left:300px ;
}
</style>
</head>
<body>

<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "hospital_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, FullName, Gender, Age, Phone, ReqBloodSample FROM reqsample_datails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>FullName</th><th>Gender</th><th>Age</th><th>Phone</th><th>ReqBloodSample</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["FullName"].  "</td><td>" . $row["Gender"].  "</td><td>" . $row["Age"].  "</td><td>" . $row["Phone"].  "</td><td>" . $row["ReqBloodSample"].  "</td></tr>";
       
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
