<?php
    if(isset($_POST['submit'])):
$input = $_POST['input'];
$input = str_replace('<a href="', '[URL=', $input);
$input = str_replace('</a>', '[/URL]', $input);
$input = str_replace('">', ']', $input);



?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="post">
    <textarea name="input" id="input" cols="50" rows="5"></textarea>
    <input type="submit" name="submit"/>
</form>
<p>
    <?php
    echo $input;
    endif;
    ?>
    </p>
</body>
</html>