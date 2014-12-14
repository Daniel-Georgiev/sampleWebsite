<?php
    if(isset($_POST['submit'])){
        $input = $_POST['input'];
        $banList = explode(', ',$_POST['banlist']);
        $output = '';
        foreach ( $banList as $banWord) {
            $censor =
             $input = preg_replace("/$banWord/",str_repeat('*',strlen($banWord)),$input);

        }


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
        <textarea name="input" id="" cols="30" rows="5"></textarea><br>
        <label for="banlist">Banlist</label>
        <input type="text" name="banlist" id="banlist"/>
        <input type="submit" name="submit"/>
    </form>
    <p>
        <?php if(isset($_POST['submit'])){
         echo $input;
        }
        ?>
    </p>
</body>
</html>