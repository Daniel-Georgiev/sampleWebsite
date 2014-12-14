<?php
    if(isset($_POST['submit'])){
        $input = $_POST['input'];
        $word = $_POST['word'];
        preg_match_all('/[^.!?]*[.!?]/',$input,$matches);




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
        <textarea name="input" id="" cols="30" rows="10"></textarea><br>
        <input type="text" name="word"/>
        <input type="submit" name="submit"/>
    </form>
    <p>
        <?php
        if(isset($_POST['submit'])){
            foreach ($matches[0] as $match) {
                if(preg_match("/[^\\w]".$word."[^\\w]/",$match)>0){
                    echo "$match<br>";
                }
            }
        }
        ?>
    </p>
</body>
</html>