<?php function Palindrome($arg){

    if ((strlen($arg) == 1) || (strlen($arg) == 0)) {
        return true;
    }

    else {

        if (substr(strtolower($arg),0,1) == substr(strtolower($arg),(strlen(strtolower($arg)) - 1),1)) {
            return Palindrome(substr(strtolower($arg),1,strlen(strtolower($arg)) -2));
        }
        else { return false; }
    }
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="modifyString.css"/>
</head>
<body>
    <form method="post">
        <input type="text" name="input"/>
        <input type="radio" name="action" value="palindrome" checked> Check Palindrome
        <input type="radio" name="action" value="reverse" > Reverse String
        <input type="radio" name="action" value="split"> Split
        <input type="radio" name="action" value="hash" > Hash String
        <input type="radio" name="action" value="shuffle"> Shuffle String
        <input type="submit" name="submit"/>
    </form>
    <p>

        <?php
        if(isset($_POST["input"],$_POST["action"])){

            $input = htmlentities($_POST["input"]);
            $choice = $_POST["action"];
            $inputArr = str_split($input);


            if ($choice == "palindrome") {
                if(Palindrome($input)==true){
                    echo "$input <span>is palindrome!</span>";
                }
                elseif(Palindrome($input)==false){
                    echo "$input <span>is not palindrome!</span>";
                }
            } elseif ($choice == "reverse") {
                echo strrev($input);
            } elseif ($choice == "split") {
                $arr= str_split($input);
                echo join(" ",$arr);
            } elseif ($choice == "hash") {
                echo crypt($input);
            } elseif ($choice == "shuffle") {
                $arr = str_split($input);
                shuffle($arr);
                $output = implode($arr);
                echo $output;
            }
        }
        ?>
    </p>
</body>
</html>