<?php
    if(isset($_POST['submit'])) {
        $categories = explode(', ', $_POST['categories']);
        $tags = explode(', ',$_POST['tags']);
        $months = explode(', ',$_POST['months']);
    }
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="SideBarBuilder.css"/>
</head>
<body>
    <form method="post">
        <label for="categories">Categories: </label>
        <input type="text" id="categories" name="categories"/><br>
        <label for="tags">Tags: </label>
        <input type="text" id="tags" name="tags"/><br>
        <label for="months">Monts</label>
        <input type="text" id="months" name="months"/><br>
        <input type="submit"  name="submit" value="Generate"/>
    </form>
    <?php
        if(isset($_POST['submit'])) {
            echo "<aside>
            <h4>Categories</h4>
            <hr>
            <ul>";
            foreach ($categories as $category) {
                echo "<li><a href='#'>" . htmlentities($category) . "</a>";
            }
            echo "</ul>
            </aside>";
            echo "<aside>
            <h4>Tags</h4>
            <hr>
            <ul>";
            foreach ($tags as $tag) {
                echo "<li><a href='#'>" . htmlentities($tag) . "</a>";
            }
            echo "</ul>
            </aside>";
            echo "<aside>
            <h4>Months</h4>
            <hr>
            <ul>";
            foreach ($months as $month) {
                echo "<li><a href='#'>" . htmlentities($month) . "</a>";
            }
            echo "</ul>
            </aside>";
        }
    ?>
</body>
</html>