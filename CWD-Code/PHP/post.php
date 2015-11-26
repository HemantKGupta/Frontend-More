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

$names = array("Fred", "Rob", "Ian");

 if ($_POST["submit"]) {

     if ($_POST["name"]) {

        foreach ($names as $name) {

            if ($POST['name'] == $name)
             {
             echo "I know you! Your name is ".$name;
             $knowYou = 1;
             }

         if (!$knowYou) echo "I don't know you, ".$name;
     }
 }
?>
<form method="POST">

    <label for="name">Name</label>
    <input name="name" type="text"/>
    <input type="submit" name="submit" value="Submit Your Name"/>

</form>


</div>
</body>
</html>

