
<?php

$servername = "localhost";
$username   = "root";
$password   = "password";
$dbname     = "articlesDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$article_text   = $_POST["article_text"];
$article_author = $_POST["article_author"];
$article_title  = $_POST["article_title"];

$sql = "INSERT INTO Articles (article_title, article_author, article_text)
VALUES ('$article_title', '$article_author', '$article_text')";

if ($conn->query($sql) === TRUE) {
	
	// New record added successfully
	$last_id = $conn->insert_id;
	header("Location: http://162.243.247.79:8081/article.php?id=" . $last_id);
	$conn->close();
	die();

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

