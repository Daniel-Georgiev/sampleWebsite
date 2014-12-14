<?php
session_start();
$isClicked = false;
if(isset($_POST["submit"])) {
    $tags = array("!--",
"!DOCTYPE",
"a", "abbr", "acronym", "address", "applet", "area", "article", "aside", "audio", "b", "base", "basefont", "bdi", "bdo", "big", "blockquote", "body", "br", "button", "canvas", "caption", "center", "cite", "code", "col", "colgroup", "datalist", "dd", "del", "details", "dfn", "dialog", "dir", "div", "dl", "dt", "em", "embed", "fieldset", "figcaption", "figure", "font", "footer", "form", "frame", "frameset", "head", "header", "hgroup", "h1> - <h6", "hr", "html", "i", "iframe", "img", "input", "ins", "kbd", "keygen", "label", "legend", "li", "link", "main", "map", "mark", "menu", "menuitem", "meta", "meter", "nav", "noframes", "noscript", "object", "ol", "optgroup", "option", "output", "p", "param", "pre", "progress", "q", "rp", "rt", "ruby", "s", "samp", "script", "section", "select", "small", "source", "span", "strike", "strong", "style", "sub", "summary", "sup", "table", "tbody", "td", "textarea", "tfoot", "th", "thead", "time", "title", "tr", "track", "tt", "u", "ul", "var", "video", "wbr>");
    $input = $_POST["input"];
    $ifExists = false;
    if (in_array($input, $tags)) {
        $ifExists = true;
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
    <label for="input">Enter HTML tags:</label><br>
         <input id="input" name="input" type="text"/>
         <input type="submit" name="submit"/>
    </form>
    <p><?php
        if($isClicked== true){
            if($ifExists==true){
                echo "Valid HTML tag!";
                $_SESSION['count']+=1;
                $counter = $_SESSION['count'];
                echo "<br>Score: $counter";
            }
            else{
                echo "Invalid HTML tag!";
                $counter = $_SESSION['count'];
                echo "<br>Score: $counter";
            }
        }
    ?>
    </p>
</body>
</html>