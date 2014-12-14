<?php
$ifClicked = false;
if(isset($_POST['input'])){
    $name = $_POST['input'];
    $namesArray = explode(', ', $name);
    $count = array_count_values($namesArray);
    $counter = join('',$count);
    $ifClicked = true;
    arsort($count);
    $keys = array_keys($count);
    $i = 0;

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
        foreach($count as $index){

                echo htmlentities($keys[$i])." : ". htmlentities($index) ."times"."<br>";

                $i++;

        }



    } ?> </p>
</body>
</html>