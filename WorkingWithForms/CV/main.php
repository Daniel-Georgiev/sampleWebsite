<?php
require("validate.php");
$validator = new FormDataParser($_POST);
?>

<!DOCTYPE html>
<html>
<head>
    <title>05.CV Generator</title>
    <style type="text/css">
        table, td, th {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<main>
    <?php if($validator->validate()) {
        include("output.php");
    } else {
        include("input.html");
    }?>
</main>
<script src="Script.js"></script>
</body>
</html>