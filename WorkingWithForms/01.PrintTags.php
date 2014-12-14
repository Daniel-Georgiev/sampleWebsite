<?php
$ifClicked = false;
if(isset($_POST['input'])){
    $name = $_POST['input'];
    $namesArray = explode(', ', $name);
    $i = 0;

$ifClicked = true;
}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<form method="post">
    <label for="input1">Enter Tags:</label>
    <br>
    <input id="input1"   type="text" name="input"/>
    <input type="submit" />
</form>
<p><?php if($ifClicked == true) {
        foreach($namesArray as $names){
            echo $i.": ".htmlentities($names)."<br>";
            $i++;
        }
    } ?> </p>
</body>
</html>