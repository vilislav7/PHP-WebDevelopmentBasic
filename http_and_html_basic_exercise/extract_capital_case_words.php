<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Extract Capital Case Words</title>
</head>
<body>
<form action="extract_capital_case_words.php">
   <textarea name="text" id="text" rows="10"><?php
       if (isset($_GET['extract'])) {
           $text = $_GET['text'];
           $matches = [];
           preg_match_all('/\b([A-Z]+)\b/', $text, $matches);
           echo implode(', ', $matches[0]);
       }
       ?></textarea>
    <br/>
    <input type="submit" name="extract" value="Sort">
</form>
</body>
</html>