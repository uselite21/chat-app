<?php
if ($_POST) {
$userN = $_POST ['username'];
$passW = $_POST ['password'];

// Puts the whole array in a file every new line is an array
$userlist = file ( 'users.txt', FILE_SKIP_EMPTY_LINES );

// Defines a boolean success to false
$success = false;

foreach ( $userlist as $user ) {
    $user_details = explode ( '|', $user);

   if (trim($user_details [0]) == $userN && trim($user_details [1]) == $passW) {
    //if ((in_array($userN, $user_details) and (in_array($passW,     $user_details)))) {
        $success = true;
        echo $success . " is: ";
        break;
    }
}

if ($success) {
    echo "<br> Hi $userN you have been logged in. <br>";
    header("location: index.php");
} else {
    echo "<br> You have entered the wrong username or password. Please try again. <br>";
}
}

?>
