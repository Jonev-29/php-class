<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Forum Posting</title>
</head>
<body>
    <?php // Script 5.2 - handle_post.php

    // get values from $_POST
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $posting = $_POST['posting'];

    // create full name
    $name = $first_name . ' ' . $last_name;

    // print message
    print "<div>Thank you, $name, for your posting:
        <p>$posting</p></div>";

        ?>
        </body>
        </html>