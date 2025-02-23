<!doctype html>
<html lang="en">
    <meta charset="utf-8">
    <title>Larry Ulman's Books and Chapters</title>
</head>
<body>
    <h1>Some of Larry Ulamn's Books</h1>
    <?php

    // create first array
    $phpvqs = [
        1 => 'Getting Started with PHP', 'Variables', 'HTML Forms and PHP', 'Using Numbers'
    ];

    // create second array
    $phpadv = [
        1 => 'Advanced PHP Techniques', 'Developing Web Applications', 'Advanced Database Concepts', 'Basic Object-Oriented Programming'
    ];

    // create third array
    $phpmysql = [
        1 => 'Introduction to PHP', 'Programming with PHP', 'Creating Dynamic Web Sites', 'Introduction to MySQL'
    ];

    // create multi dimensional array
    $books = [
        'PHP VQS' => $phpvqs,
        'PHP Advanced VQP' => $phpadv,
        'PHP and MySQL VQP' => $phpmysql
    ];

    // print out some values
    print "<p>The Third chapter of my first book is <i>{$books['PHP VQS'][3]}</i>.</p>";
    print "<p>The first chapter of my second book is <i>{$books['PHP Advanced VQP'][1]}</i>.</p>";
    print "<p>The fourth chapter of my third book is <i>{$books['PHP and MySQL VQP'][4]}</i>.</p>";

    // print with foreach
    foreach ($books as $title => $chapters) {
        print "<p>$title";
        foreach ($chapters as $number => $chapter){
            print "<br/>Chapter $number is $chapter";
        }
        print '</p>';
    }

    ?>
    </body>
    </html>