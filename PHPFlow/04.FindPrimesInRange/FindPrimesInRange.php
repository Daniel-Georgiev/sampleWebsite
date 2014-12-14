<?php
$ifClicked = false;
function isPrime($arg){
    if($arg<= 1){
        return false;
    }
    if($arg == 2){
        return true;
    }
    if($arg % 2 == 0){
        return false;
    }
    for($z = 3; $z <= ceil(sqrt($arg)); $z++) {
        if($arg % $z == 0)
            return false;
    }

    return true;
}
if(isset($_POST['submit'])) {
    $start = $_POST['start'];
    $end = $_POST['end'];
    $ifClicked = true;

}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Find Primes</title>
    <link rel="stylesheet" href="findPrimes.css"/>
</head>
<body>
    <form method="post">
        <label for="start">Starting Index: </label>
        <input type="text" id="start" name="start"/>
        <label for="end">End: </label>
        <input type="text" id="end" name="end"/>
        <input type="submit" name="submit"/>
    </form>
    <p>
        <?php
            if($ifClicked==true) {
                for ($i = $start; $i <= $end; $i++) {

                    if (isPrime($i) == true) {
                        echo "<strong>$i, </strong>";
                        if ($i == $end) {
                            echo "<strong>$i</strong>";
                        }
                    } else {
                        echo "$i, ";
                        if ($i == $end) {
                            echo $i;
                        }

                    }
                }
            }
        ?>
    </p>
</body>
</html>