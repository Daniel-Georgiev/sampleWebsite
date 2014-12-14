<?php
$ifClicked = false;
if(isset($_POST['submit'])) {
    $cars = $_POST['input'];
    $carsArray = explode(', ', $cars);
    $ifClicked = true;
    $colours = ["Yellow", "Black", "Red", "Blue", "Matte", "Gray", "Silver", "Gold", "Velvet"];
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Car Randomizer</title>
    <link rel="stylesheet" href="02.RichProblems.css"/>
</head>
<body>
<form method="post">
    <label for="input">Enter Cars</label>
    <input type="text" id="input" name="input"/>
    <input type="submit" value="Show result" name="submit"/>
</form>

<?php
    if($ifClicked== true) {
      echo "<table>";
        echo "<thead><td>Car</td>
                <td>Colour</td>
                <td>Count</td>
            </thead>
            <tbody>";
        for($i=0; $i<count($carsArray); $i++){
          echo "<tr>
            <td>".htmlentities($carsArray[$i])."</td>
            <td>".htmlentities($colours[rand(0,count($colours)-1)])."</td>
            <td>". rand(1,5) . "</td>
            </tr>";
      }
    }
    echo "</tbody>
        </table>";
?>



</body>
</html>