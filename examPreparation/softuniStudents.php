<?php
    if(isset($_GET['submit'])) {
        $input = $_GET['input'];
        $pattern = "/([A-za-z]+\s*&*\s*[A-za-z]*),\s+(.+@[a-z]+\.[a-z]+),\s+([a-z]+),\s+(\d+)/";
        $matches;
        preg_match_all($pattern, $input, $matches);
        var_dump($matches);


        echo "<table border='1'>
                        <thead>
                        <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Type</th>
                        <th>Result</th>
                        </tr>
                        </thead>
                        ";


                    for($i=0; $i<count($matches[0]); $i++){
                        $name = ($matches[1][$i]);
                        $email =($matches[2][$i]);
                        $where = ($matches[3][$i]);
                        $result = ($matches[4][$i]);

            echo "<tr>
                        <td>ID</td>
                        <td>" . htmlspecialchars($name) . "</td>
                        <td>" . htmlspecialchars($email) . "</td>
                        <td>" . htmlspecialchars($where) . "</td>
                        <td>" . htmlspecialchars($result) . "</td>
                        </tr>
                        ";
        }


            echo "</table>";
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