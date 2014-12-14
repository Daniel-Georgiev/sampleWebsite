<?php
    if(isset($_GET['submit'])){
        $input = $_GET['input'];
        $pattern = "/([\w\s*]+)%(.*);\d+-(\d+)-\w+-(.*)/";
        $matches;
        preg_match_all($pattern,$input,$matches);
        var_dump($matches);
        $topic = trim($matches[1][0]);
        $autor = trim($matches[2][0]);
        $month =  $matches[3][0];
        $summery = trim($matches[4][0]);
        $summery = substr($summery,0,100)."...";
        if(isset($matches[1][1])) {
            $topic2 = trim($matches[1][1]);
            $autor2 = trim($matches[2][1]);
            $month2 = $matches[3][1];
            $summery2 = trim($matches[4][1]);
            $summery2 = substr($summery2, 0, 100) . "...";
        }
        switch($month){
            case 01:
                $month = "January";
                break;
            case 02:
                $month = "February";
                break;
            case 03:
                $month = "March";
                break;
            case 04:
                $month = "April";
                break;
            case 05:
                $month = "May";
                break;
            case 06:
                $month = "June";
                break;
            case 07:
                $month = "July";
                break;
            case 08:
                $month = "August";
                break;
            case 09:
                $month = "September";
                break;
            case 10:
                $month = "October";
                break;
            case 11:
                $month = "November";
                break;
            case 12:
                $month = "December";
                break;

        }
        var_dump($topic);
        var_dump($autor);
        var_dump($month);
        var_dump($summery);
        if(isset($matches[1][1])) {
            var_dump($topic2);
            var_dump($autor2);
            var_dump($month2);
            var_dump($summery2);
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
<form method="get">
    <textarea name="input" id="input" cols="30" rows="10"></textarea>
    <input type="submit" name="submit"/>
</form>

</body>
</html>