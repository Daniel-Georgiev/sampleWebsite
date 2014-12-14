<?php
    $ifClicked = false;
    if(isset($_POST['submit'])){
        $years = intval($_POST['input']);
        $date = date("Y");
        $ifClicked = true;
        $total = 0;
    }
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="AnnualExpenses.css"/>

</head>
<body>
<form method="post">
    <label for="input">Enter number of years: </label>
    <input type="text" name="input" id="input" pattern="\d+"/>
    <input type="submit" name="submit"/>
    <?php
    if($ifClicked==true){
        echo "<table><thead><td>Year</td>
                <td>January</td>
                <td>February</td>
                <td>March</td>
                <td>April</td>
                <td>May</td>
                <td>June</td>
                <td>July</td>
                <td>August</td>
                <td>September</td>
                <td>November</td>
                <td>Octomber</td>
                <td>December</td>
                <td>Total:</td>
                </thead>
                <tbody>";
        for($i=0; $i<$years; $i++){
            $january = rand(0,999);
            $february = rand(0,999);
            $march = rand(0,999);
            $april = rand(0,999);
            $may = rand(0,999);
            $june = rand(0,999);
            $july = rand(0,999);
            $august = rand(0,999);
            $september = rand(0,999);
            $november = rand(0,999);
            $octomber = rand(0,999);
            $december = rand(0,999);
            $total = $january + $february + $march + $april +$may+ $july + $july + $august + $september + $november + $octomber + $december;
            echo "<tr>
                    <td>$date</td>
                    <td>$january</td>
                    <td>$february</td>
                    <td>$march</td>
                    <td>$april</td>
                    <td>$may</td>
                    <td>$june</td>
                    <td>$july</td>
                    <td>$august</td>
                    <td>$september</td>
                    <td>$november</td>
                    <td>$octomber</td>
                    <td>$december</td>
                    <td>$total</td>";

            $date-=1;
            ;
        }
        echo "</tbody>
            </table>";


    }
?>
</form>
</body>
</html>