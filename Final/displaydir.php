<?php

include("header.html");
?>

<h2>Files in 'Final' Directory</h2>

<ul class="files">
 <?php
    $files = scandir('.');
    foreach ($files as $file) {
        if ($file == '.' || $file == "..") continue;
        print '<li class="file">' . $file . '</li>';
    }
?>
</ul>

<?php
include("footer.html");
?>