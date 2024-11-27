<?php

echo 'Username: ' . $_GET['username'];
echo '<br>';
echo 'Password: ' . $_GET['password'];

<?php

// $_GET is called a superglobal
// a special kind of variable that's available anywhere
// the data from our form goes into $_GET as an associative array

echo 'Username: ' . $_GET['username'];
echo '<br>';
echo 'Password: ' . $_GET['password'];


// $_POST is also a superglobal
// but it gets the data from a POST request
// (which is more secure)

echo 'Username: ' . $_POST['username'];
echo '<br>';
echo 'Password: ' . $_POST['password'];