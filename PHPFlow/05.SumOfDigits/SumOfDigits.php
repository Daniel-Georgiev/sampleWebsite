<?php
    $ifClicked = false;
    function getSum($arg){
        $sum=0;
        intval($arg);
        while($arg>0)
        {
            $sum=$sum+$arg%10;
            $arg=floor($arg/10);
        }
        return $sum;
    }
    if(isset($_POST['submit'])){
        $ifClicked = true;
        $input = explode(', ',$_POST['input']);

    }
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>SumOfDigits</title>
    <link rel="stylesheet" href="sumOfDigits.css"/>
</head>
<body>
<form method="post">
    <label for="input">Input string:</label>
    <input type="text" name="input" id="input"/>
    <input type="submit" name="submit"/>
</form>
    <p>
        <?php
            if($ifClicked == true){
                echo "<table>";
                for($i=0; $i<count($input); $i++){
                    if(getSum($input[$i])==0){
                        echo "<tr><td>$input[$i]</td><td>I cannot sum that</td></tr>";
                    }
                    else{
                        echo"<tr><td>$input[$i]</td><td>".getSum($input[$i])."</td></tr>";
                    }
                }
                echo "</table>";
            }
        ?>

    </p>
</body>
</html>