<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>No Soup for You!</title>
</head>
<body>
    <h1>Mmm...soups</h1>
    <?php
    // display errors
    ini_set('display_errors', 1);

    // create array
    $soups = [
        'Monday' => 'Clam Chowder',
        'Tuesday' => 'White Chicken Chili',
        'Wednesday' => 'Vegetarian',
        'Thursday' => 'Curry',
        'Friday' => 'Beef Stew',
        'Saturday' => 'Chicken Gnocci',
        'Sunday' => 'Minestrone'
    ];

    // print array
    print "<p>$soups</p>";

    // print contents of array
    print_r($soups);
    ?>
</body>
</html>
