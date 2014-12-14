<?php
    if(isset($_POST['submit'])){
        $input = $_POST['input'];
        $words = preg_split('/\W+/',$input,0,PREG_SPLIT_NO_EMPTY);
        $matches = [];
        for($i=0; $i<count($words); $i++){
            $wordToLower = strtolower($words[$i]);
            if (!array_key_exists($wordToLower, $matches)) {
                $matches[$wordToLower] = 0;
            }
            $matches[$wordToLower]++;
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
<textarea name="input" id="" cols="70" rows="2"></textarea><br>
<input type="submit" name="submit" value="Count words"/>
</form>
<p>
    <?php
        if(isset($_POST['submit'])) {
            echo "<table border='1'>
                <tbody>";
            foreach ($matches as $key => $value) {
                echo "<tr><td>$key</td><td>$value</td></tr>";
            }
            echo "</tbody>
            </table>";
        }
    ?>


</p>

</body>
</html>