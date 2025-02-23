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
        'Wednesday' => 'Vegetarian'//,
        //'Thursday' => 'Curry',
        //'Friday' => 'Beef Stew',
        //'Saturday' => 'Chicken Gnocci',
        //'Sunday' => 'Minestrone'
    ];

    // count elements of array
    $count1 = count($soups);
    print "<p>The soups array originally had $count1 elements.</p>";

    // add to array
    $soups['Thursday'] = 'Chicken Noodle';
    $soups['Friday'] = 'Tomato';
    $soups['Saturday'] = 'Cream of Broccoli';

    // print each key and value
    foreach ($soups as $day => $soup) {
        print "<p>$day: $soup</p>\n";
    }

    // count array again
    // $count2 = count($soups);
    // print "<p>After adding 3 more soups, the array now has $count2 elements.</p>";

    // comment out previous code
    // print array
    // print "<p>$soups</p>";

    // print contents of array
    // print_r($soups);
    ?>
</body>
</html>
