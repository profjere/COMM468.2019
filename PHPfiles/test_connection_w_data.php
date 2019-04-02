<!DOCTYPE html>
<html>
<body>

<?php
$servername = "yourInfo";
$username = "yourInfo";
$password = "yourInfo";
$dbname = "yourInfo";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM commschedule WHERE dept = 'COMM'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["dept"]." ".$row["number"]. ": " . $row["title"] . " with Professor " . $row["professor"]."<br/>";
    }
} else {
    echo "<br/>0 results";
}

$conn->close();
?> 

</body>
</html>
