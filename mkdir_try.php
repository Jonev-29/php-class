<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>mkdir PHP</title>
    <style type="text/css">
        .error {
            color: red;
        }
        b {
            color: red;
        }
    </style>
</head>

<body>
    <h1>Create folder</h1>
    <?php
    ini_set('display_errors', value: 1); // Let me learn from my mistakes!


    // going to create one in the chapter folder 
    // /htdocs/ch11/folder
    
    $dir = '/';
    $foldname = $_POST['foldname'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $problem = false;
        if (!empty($_POST['foldname']) && !$problem) {
            mkdir($dir . $foldname,0777,false);
            print '<p>Your folder, "' . $foldname . '", has been created!';
        } else {
            $problem = true;
            print '<p class="error">Make sure you enter a name for the folder</p>';
        }
    } else {
        ?>
        <form action="mkdir_try.php" method="POST">
            <p>Folder Name: <input type="text" name="foldname" size="20"></p>
            <input type="submit" name="submit" value="Create Folder">
        </form>
    <?php } 
    // I checked the permissions as best I could, but even setting 
    // everything in and including htdocs/ch11 to 0777
    // there was no change in ability to create a folder
    ?>


</body>

</html>