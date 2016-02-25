
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="/styles-editor.css">
  <script src='/tinymce/tinymce.min.js'></script>
  <script>
  tinymce.init({
    selector: '#mytextarea'
  });
  </script>
</head>
<body>

  <div class="editor-wrapper">

    <h1>WYSIWIG Editor</h1>

    <form method="post" action="insert_into_table.php" id="editorForm">

        <fieldset>
            <div class="input-row">
                <span>Title: </span>
                <input type="text" name="article_title">   
            </div>
            <div class="input-row">
                <span>Author Name: </span>
                <input type="text" name="article_author">   
            </div>
            <textarea name="article_text" id="mytextarea">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</textarea>
        </fieldset>

        <button class="submit-article" form="editorForm" type="submit">Submit Article</button>
    </form>

  </div>

</body>
</html>
