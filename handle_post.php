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

    // get word count
    $words = str_word_count($posting);

    $posting = substr($posting, 0, 50);

    // print message
    print "<div>Thank you, $name, for your posting:
        <p>$posting...</p>
        <p>($words words)</p>
        </div>";

        // link to another page
        $name = urlencode($name);
        $email = urlencode($_POST['email']);
        print "<p>Click <a href=\"thanks.php?name=$name&email=$email\">here</a> to continue.</p>";

        ?>
        </body>
        </html>