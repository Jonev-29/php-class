<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Connect to MySQL</title>
</head>

<body>
    <?php
    // ini_set('display_errors', value: 1); // Let me learn from my mistakes!
    // The above was because I had password set on '127.0.0.1' but not 'localhost' 
    // so it kept failing until I realized my mistake
    if ($dbc = mysqli_connect('localhost', 'root', '-aVrt7uMp*j36==', 'myblog')) {

        print "<p>Successfully connected to the database!</p>"; 
    
        mysqli_close($dbc);

    } else {

        print '<p style="color: red;">Could not connect to the database.</p>';

    }
    ?>
</body>

</html>