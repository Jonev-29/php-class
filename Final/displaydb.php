<?php

include("header.html");
?>

<?php
ini_set('display_errors', value: 1); // Let me learn from my mistakes! 

$dbc = mysqli_connect('localhost', 'root', 'password', 'final');

mysqli_set_charset(
    $dbc,
    'utf8'
);

$query = "SELECT * FROM records";

$result = mysqli_query($dbc, $query);
mysqli_close($dbc);




?>
<table border="2" cellspacing="7" cellpadding="7">
    <tr>
        <th>
            <font face="arial">ID</font>
        </th>
        <th>
            <font face="arial">First</font>
        </th>
        <th>
            <font face="arial">Last</font>
        </th>
        <th>
            <font face="arial">Street</font>
        </th>
        <th>
            <font face="arial">City</font>
        </th>
        <th>
            <font face="arial">State</font>
        </th>
        <th>
            <font face="arial">Phone</font>
        </th>
        <th>
            <font face="arial">Email</font>
        </th>
        <th>
            <font face="arial">Date Added</font>
        </th>
    </tr>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td>
                <font face="arial"><?php echo $row['id']; ?></font>
            </td>
            <td>
                <font face="arial"><?php echo $row['firstname']; ?></font>
            </td>
            <td>
                <font face="arial"><?php echo $row['lastname']; ?></font>
            </td>
            <td>
                <font face="arial"><?php echo $row['address']; ?></font>
            </td>
            <td>
                <font face="arial"><?php echo $row['city']; ?></font>
            </td>
            <td>
                <font face="arial"><?php echo $row['state']; ?></font>
            </td>
            <td>
                <font face="arial"><?php echo $row['phone']; ?></font>
            </td>
            <td>
                <font face="arial"><?php echo $row['email']; ?></font>
            </td>
            <td>
                <font face="arial"><?php echo $row['date_entered']; ?></font>
            </td>
        </tr>
    <?php } ?>
</table>
<?php
include("footer.html");
?>