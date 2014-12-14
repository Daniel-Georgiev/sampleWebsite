<?php
    $ifClicked = false;
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $ifClicked = true;
    }
?>
<!DOCTYPE>
<html>
<head>
    <title></title>
</head>
<body>
<form method="post">
    <input type="text" placeholder="Name" name="name"> <br />
    <input type="text" placeholder="Age" name="age"> <br />
    <input type="radio" value="male" name="gender">
    <span>Male</span> <br />
    <input type="radio" value="female" name="gender">
    <span>Female</span> <br />
    <button type="submit" name="submit">Submit</button>
</form>
<p><?php if ($ifClicked == true) {
        echo "My name is $name. I am $age years old. I am $gender.";
    } ?> </p>
</body>
</html> 