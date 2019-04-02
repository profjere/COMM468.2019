<!DOCTYPE html>
<html>
<body>

<?php
$servername = "yourinfo";
$username = "yourinfo";
$password = "yourinfo";
$dbname = "yourinfo";


$theSubject = $_POST['subject'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM commschedule WHERE dept = '$theSubject'";
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
<form method="post">
<input name="subject">
<button>Department Search</button>
</form>
</body>
</html>
