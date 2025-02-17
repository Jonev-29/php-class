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

    // check passwords for match
    if ($_POST['password'] != $_POST['confirm']){
        print '<p class="error">Your confirmed password does not match the original password.</p>';
        $okay = false;
    }

    // validate birth year
    if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4)){ // check that it's 4 digits
        if ($_POST['year'] < 2025){ // check that it's a valid year
            $age = 2025 - $_POST['year']; // calculate age this year
        } else { // not a valid year
            print '<p class="error">Either your birth year is wrong or you come from the future!</p>';
            $okay = false;
        }
    }else { // not 4 digits
        print '<p class="error">Please enter the year you were born as four digits.</p>';
        $okay = false;
    }
    
    // validate terms
    if (!isset($_POST['terms'])){
        print '<p class="error">You must accept the terms.</p>';
        $okay = false;
    }

    // validate color
    if ($_POST['color'] == 'red'){
        $color_type = 'primary';
    } elseif ($_POST['color'] == 'blue'){
        $color_type = 'primary';
    } elseif ($_POST['color'] == 'yellow'){
        $color_type = 'primary';
    } elseif ($_POST['color'] == 'green'){
        $color_type = 'secondary';
    } elseif ($_POST['color'] == 'orange'){
        $color_type = 'secondary';
    } elseif ($_POST['color'] == 'purple'){
        $color_type = 'secondary';
    } else { // problem
        print '<p class="error">Please select your favorite color.<p>';    
    }
    // if all succeeds, run this
    if ($okay) {
        print '<p>You have been successfully registered (but not really)';
        print "<p>You will turn $age this year.</p>";
        print "<p>Your favorite color is a $color_type color.</p>";
    }
    ?>
    </body>
    </html>