<?php
    $table = array("Name"=>"Gosho",
    "Phone number"=>"0882-321-423",
    "Age"=>"24",
    "Address"=>"Hadji Dimitur");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Information Table</title>
</head>
<body>
<table border="1">
    <tbody>
    <tr>
        <td>Name</td>
        <td><?php echo $table["Name"]; ?></td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td><?php echo $table["Phone number"]; ?></td>
    </tr>
    <tr>
        <td>Age</td>
        <td><?php echo $table["Age"]; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $table["Address"]; ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>