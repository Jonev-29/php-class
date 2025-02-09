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
    $posting = nl2br($_POST['posting'], false);

    // create full name
    $name = $first_name . ' ' . $last_name;

    // adjust for html tags
    $html_post = htmlentities($_POST['posting']);
    $strip_post = strip_tags($_POST['posting']);

    // print message
    print "<div>Thank you, $name, for your posting:
        <p>Original: $posting</p>
        <p>Entity: $html_post</p>
        <p>Stripped: $strip_post</p>
        </div>";

        ?>
        </body>
        </html>