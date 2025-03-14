<?php
define('TITLE', 'Home');
include("header.html");
?>

<h2>Welcome to Journey's PHP Final</h2>
<p>Please use the above buttons for navigation</p>

<!-- I know it said to collect data, but it could just be done on
the "Add Record" page -->
<h2>Add a record</h2>

<?php
ini_set('display_errors', value: 1); // Let me learn from my mistakes! 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dbc = mysqli_connect('localhost', 'root', 'password', 'final');
    mysqli_set_charset($dbc, 'utf8');

    $problem = false;
    if (!empty($_POST['firstname']) && !empty($_POST['lastname'])) {
        // name check area (not empty)
        $firstname = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['firstname'])));
        $lastname = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['lastname'])));

        if (!empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['state'])) {
            // address check area (not empty)
            $address = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['address'])));
            $city = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['city'])));
            $state = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['state'])));

            if (!empty($_POST['phone']) && !empty($_POST['email'])) {
                // validate email & phone here
                $email = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['email'])));
                $phone = mysqli_real_escape_string($dbc, trim(strip_tags($_POST['phone'])));
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // "FILTER_VALIDATE_EMAIL found from internet search


                    if (strlen($phone) == 10){
                        if (preg_match("/^[0-9]{10}$/", $phone)){

                        } else { // set up not to use dashes so 1234567890 is valid 123-456-7890 is not
                            // this also assumes an unentered country code like (US)11234567890
                            $problem = true;
                            print '<p style="color: red;">Phone number entered was either not valid or had characters other than numbers.</p>
                            <p style:"color: green;">Tip: Enter your number like so: 1234567890</p>';
                        }
                    }
                
                } else { // email not formatted correctly
                    $problem = true;
                    print '<p style="color: red;">Email was not valid. Please try again.</p>';
                }

            } else { // email or phone not valid
                $problem = true;
                print '<p style="color: red;">Phone or email was not filled in. Try again.</p>';
            }

        } else { // address not filled
            $problem = true;
            print '<p style="color: red;">Address was not filled. Please try again.</p>';
        }
    } else { // name not filled
        $problem = true;
        print '<p style="color: red;">Name field(s) were not filled. Please try again.</p>';
    }

    if (!$problem){ // everything checks out
        

        $query = "INSERT INTO records (id, firstname, lastname, address, city, state, phone, email, date_entered) VALUES (0, '$firstname', '$lastname', '$address', '$city', '$state', '$phone', '$email', NOW())";

        if (@mysqli_query($dbc, $query)) {
            print '<p>The record has been added!</p>';
        } else {
            print '<p style="color: red;">Could not add the entry because:<br>' . mysqli_error($dbc) . '.</p><p>The query being run was: ' . $query . '</p>';
        }
        mysqli_close($dbc);
    } else {
        print '<p style="color: red;">Could not add entry because:<br>' . mysqli_error($dbc) .'.</p><p>The query being run was: ' . $query . '</p>';
    }
}

?>

<form action="addrecord.php" method="post">
    <p>First Name: <input type="text" name="firstname" size="40"></p>
    <p>Last Name: <input type="text" name="lastname" size="40"></p>
    <p>Address: <input type="text" name="address" size="40"></p>
    <p>City: <input type="text" name="city" size="40"></p>
    <p>State: <input type="text" name="state" size="40"></p>
    <p>Phone: <input type="text" name="phone" size="40"></p>
    <p>Email: <input type="email" name="email" size="40"></p>
    <input type="submit" name="submit" value="Add Record">
</form>



<?php
include("footer.html");
?>