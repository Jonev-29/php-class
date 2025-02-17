<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <style type="text/css" media="screen">
            .error {
                color:red;
            }
            </style>
</head>
<body>
    <h1>Registration Results</h1>
    <?php // recieves values from register.html

    // Address error management
    ini_set('display errors',0);
    error_reporting (E_ALL);

    // Flag variable to track success
    $okay = true;

    // validate empty email address:
    if (empty($_POST['email'])){
        print '<p class="error">Please enter your email address.</p>';
        $okay = false;
    }

    // validate password
    if (empty($_POST['password'])){
        print '<p class="error">Please enter your password.</p>';
        $okay = false;
    }

    // validate birth year
    if (is_numeric($_POST['year'])){
        $age = 2025 - $_POST['year']; // calculate age this year
    } else {
        print '<p class="error">Please enter the year you were born as four digits.</p>';
        $okay = false;
    }

    // if all succeeds, run this
    if ($okay) {
        print '<p>You have been successfully registered (but not really)';
        print "<p>You will turn $age this year.</p>";
    }
    ?>
    </body>
    </html>