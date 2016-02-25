<?php

	// we have the id passed in, get all other data and render here

	$servername = "localhost";
	$username = "root";
	$password = "password";
	$dbname = "articlesDB";

	$articleId = $_GET["id"];

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT id, article_text, article_author, article_title FROM Articles where id='$articleId'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$article_author = $row["article_author"];
			$article_text   = $row["article_text"];
			$article_title  = $row["article_title"];
		}

	} else {
		echo "No article found";
	}
	
	$conn->close();

?>

<html>

<head>
	<meta charset="UTF-8">
    <title> 
        <?php echo $article_title; ?>
    </title>
    <link rel="stylesheet" href="/styles.css">
</head>

<body>

    <h1 class="article-title">
        <?php echo $article_title; ?>
    </h1>
    <h2> By
        <?php echo $article_author; ?>
    </h2>
    
	<div class="text-container">
		<p> 
			<?php echo $article_text; ?>
		</p>
	</div>

</body>

</html>
