<html>

<head>
	<meta charset="UTF-8">
    <title> 
        <?php echo $_POST["article_title"]; ?>
    </title>
    <link rel="stylesheet" href="/styles.css">
</head>

<body>

    <h1 class="article-title">
        <?php echo $_POST["article_title"]; ?>
    </h1>
    <h2> By
        <?php echo $_POST["article_author"]; ?>
    </h2>
    

    <p> 
        <?php echo $_POST["article_text"]; ?>
    </p>

</body>

</html>
