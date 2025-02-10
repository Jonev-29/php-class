<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Forum Posting</title>
</head>
<body>
    <?php // Script 5.2 - handle_post.php

    // get values from $_POST
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $posting = trim($_POST['posting']);

    // create full name
    $name = $first_name . ' ' . $last_name;

    // get word count
    $words = str_word_count($posting);

    // make substring of post
    $posting = substr($posting, 0, 50);

    // take out bad words
    $posting = str_ireplace('badword', 'XXXXX', $posting);

    // print message
    print "<div>Thank you, $name, for your posting:
        <p>$posting</p>
        <p>($words words)</p>
        </div>";

        // link to another page
        $name = urlencode($name);
        $email = urlencode($_POST['email']);
        print "<p>Click <a href=\"thanks.php?name=$name&email=$email\">here</a> to continue.</p>";

        ?>
        </body>
        </html>