
<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "articlesDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE Articles (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	article_author VARCHAR(30) NOT NULL,
	article_title VARCHAR(30) NOT NULL,
	article_text VARCHAR(5000)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

