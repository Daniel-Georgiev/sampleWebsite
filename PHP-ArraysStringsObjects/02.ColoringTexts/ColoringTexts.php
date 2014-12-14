<?php
    if(isset($_POST['submit'])){
        $input = str_split($_POST['input']);
    }
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Coloring texts</title>
    <link rel="stylesheet" href="ColoringTexts.css"/>
</head>
<body>
    <form method="post">
        <textarea name="input" id="input" cols="40" rows="2"></textarea><br>
        <input type="submit" value="Color text" name="submit"/>
    </form>
    <p>
        <?php
            if(isset($_POST['submit'])) {
                foreach($input as $char){
                    if($char==' ') {
                        continue;
                    }
                    if(ord($char)%2 == 0){
                        echo "<span class='red'>".htmlentities($char)." </span>";
                    }
                    else{
                        echo "<span class='blue'>".htmlentities($char)." </span>";
                    }
                }
            }
        ?>
    </p>

</body>
</html>