<?php
        $text = $_GET['text'];
        $minFontSize = $_GET['minFontSize'];
        $maxFontSize = $_GET['maxFontSize'];
        $currentSize = $minFontSize;
        $step =$_GET['step'];
        $textArr = str_split($text);
        $isIncrementing= true;
       for($i=0; $i<count($textArr); $i++){
           $unicode = ord($textArr[$i]);

           if(is_numeric($textArr[$i])== false && $textArr[$i]!=' ') {
               if ($unicode % 2 == 0) {
                   echo "<span style='font-size:$currentSize;text-decoration:line-through;'>".htmlspecialchars($textArr[$i])."</span>";
               } else {
                   echo "<span style='font-size:$currentSize;'>".htmlspecialchars($textArr[$i])."</span>";
               }
               if ($isIncrementing==true) {
                   $currentSize += $step;
               } else {
                   $currentSize -= $step;

               }
               if(($currentSize >= $maxFontSize || $currentSize <= $minFontSize)) {
                   $isIncrementing = !$isIncrementing;
               }
           }
            else{
                if ($unicode % 2 == 0) {
                    echo "<span style='font-size:$currentSize;text-decoration:line-through;'>$textArr[$i]</span>";
                } else {
                    echo "<span style='font-size:$currentSize;'>$textArr[$i]</span>";
                }
           }



    }

?>
<!DOCTYPE html>
<html>
<head>
    <title>Drop It</title>
    <style>
        textarea {
            width: 300px;
            height: 200px;
        }
        select, textarea, input {
            display: block;
            margin: 5px;
        }
    </style>
</head>

<body>
<form action="DropIt.php" method="get">
    <label>Text:</label>
    <textarea name="text">Hi PHP5</textarea>
    <label>Minimum font size:</label>
    <input type="text" name="minFontSize" value="4"/>
    <label>Maximum font size:</label>
    <input type="text" name="maxFontSize" value="8"/>
    <label>Step:</label>
    <input type="text" name="step" value="3"/>
    <input type="submit" name="submit" value="Submit" />
</form>
</body>

</html>