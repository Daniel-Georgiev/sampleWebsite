
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Square Sum</title>
    <link rel="stylesheet" href="01.SQRTSum.css"/>
</head>
<body>
<table>
    <thead>
    <td>Number</td>
    <td>Square Root</td>
    </thead>
<?php
$sum = 0;
for($i=0; $i<=100; $i+=2): ?>
    <tr><td> <?php echo $i; ?>
        </td>
        <td><?php $num = doubleval(number_format(sqrt($i),2 , '.',''));
            $sum = $sum + $num;
            echo $num; ?>
        </td>
    </tr>


<?php endfor; ?>
    <tfoot><td>Total:</td><td><?php echo $sum ?></td></tfoot>

</table>
</body>
</html>
