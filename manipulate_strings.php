<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">        
        <title>String Manipulation</title>
    </head>
    <body>
        <div>
        <?php
            // make a first last and full name to work with
            $first_name = "Journey";
            $last_name = "Nevaeh";
            $name = $first_name . ' ' . $last_name;
            print "<p>1 - Start with creating a business username from \"$name\" as 
            [first initial][first 4 of last name] with substr on first and last names separately</p>";
            $comp_user = substr($first_name,0,1) . substr($last_name,0,4); 
            /* better to see the index locations as where a cursor would be for where it'll end
            |J|o|u|r|n|e|y
            0 1 2 3 4 5 6
            0-1 = J
            */
            print "<p>The company username is now $comp_user</p>";

            print "<p>2 - with first and last name in one string we can grab the first with strtok</p>";
            $grab_first = strtok($name,' ');
            print "<p>$name > $grab_first</p>";
            
            print "<p>3 - We can replace the vowels from the name for fun with str_ireplace<p>";
            $fun_name = str_ireplace('e','i',$first_name); // variable changed to save changes to $fun_name
            $fun_name = str_ireplace('o','a',$fun_name);
            $fun_name = str_ireplace('u','e',$fun_name);
            print "<p>$fun_name</p>";


        ?>
        </div>
    </body>
</html>