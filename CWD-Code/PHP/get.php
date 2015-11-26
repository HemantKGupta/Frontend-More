<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Test page</title>
    <link rel="stylesheet" type="text/css" href="my.css">
</head>
<body>

<div>

<?php

if ($_GET["submit"])
    {
    if ($_GET["name"])
        {
         echo "Your name is ".$_GET['name'];
        }
    }

?>
<form>

<label for="name">Name</label>
<input name="name" type="text"/>
<input type="submit" name="submit" value="Submit Your Name"/>
</form>


</div>
</body>
</html>

