<?php
    $isClicked = false;
    if(isset($_POST["submit"])) {
        $amount = intval($_POST["amount"]);
        $currency = $_POST["currency"];
        $interest = intval($_POST["interestAmount"]);
        $time = intval($_POST["select"]);
        $cur = '';
        for($i=0; $i < $time; $i++){
            $amount += ($amount* ($interest/100)/12);
        }
        switch($currency){
            case "USD":
                $cur = "$";
                break;
            case "EUR":
                $cur = "&euro;";
                break;
            case "BGN":
                $cur = "BGN";

        }

    $isClicked = true;
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
    <label for="amount">Enter Amount</label>
    <input id="amount" name="amount" type="text"/><br>
    <input type="radio" name="currency" value="USD"><label for="currency">USD</label>
    <input type="radio" name="currency" value="EUR"><label for="currency">EUR</label>
    <input type="radio" name="currency" value="BGN"><label for="currency">BGN</label><br>
    <label for="interestAmount">Compound Interest Amount</label>
    <input id="interestAmount" name="interestAmount" type="text"/><br>
    <select name="select">
        <option value="6">6 months</option>
        <option value="12">1 year</option>
        <option value="24">2 years</option>
        <option value="60">5 years</option>
    </select>
    <input name="submit" type="submit" value="Calculate"/>
    <span>
        <?php
            if($isClicked == true){
               echo $cur ." ". number_format($amount,2,'.','');

            }
        ?>
        </span>
</form>
</body>
</html>