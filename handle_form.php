<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Your Feedback</title>
</head>
<body>
    <?php // script 3.3 handle_form.php

    // this page recieves the data from feedback.html
    // it will recieve: title, name, email, response, comments, and submit in $_POST

    //create shorthand versions of the variables:
    $title = $_POST['title'];
    $first = $_POST['first']; // first name
    $last = $_POST['last']; // last name
    $response = $_POST['response'];
    $comments = $_POST['comments'];

    // Print the recieved data:
    print "<p>Thank you, $title $first $last, for your comments.</p>
    <p>You stated that you found this example to be '$response' and added:<br>$comments</p>";

    ?>
</body>
</html>
