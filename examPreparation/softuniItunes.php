<?php
    if(isset($_GET['submit'])) {
        $pattern = "/([A-Z\s*a-z]+)\s*\|\s*(.*)\s*\|\s*(.*)\s*\|\s*(\d+)\s*\|\s*(\d\.\d)";
        $input = $_GET['input'];
        preg_match_all($pattern, $input, $matches);
        var_dump($matches);
    }
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form action="get">
    <textarea name="input" id="input" cols="30" rows="10"></textarea>
    <input type="submit" name="submit"/>
</form>
</body>
</html>