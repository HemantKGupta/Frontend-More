<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Test page</title>
</head>
<body>
    <?php

        $emailTo="rajni.hemant@gmail.com";
        $subject="I hope this works";
        $body="You are great!";
        $headers="From:hemant.rajni@gmail.com";

        if (mail($emailTo, $subject, $body, $headers))
            {
            echo "Mail sent successfully!";
            }
        else
            {
            echo "Mail not sent!";
            }


    ?>

</body>
</html>