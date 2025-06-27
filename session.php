<?php
    session_start(); // will create a unique session id or resume the current one based on a session identifier passed via a request, such as a cookie.
                        // always start the session at the top of your script before any output is sent to the browser.

    // page visit counter
    // if (isset($_SESSION['counter'])) {
    //     $_SESSION['counter']++;
    // } 
    // else {
    //     $_SESSION['counter'] = 1;
    // }

    // shorthand version
    $_SESSION['counter'] ??=0; // if the session variable 'counter' is not set, initialize it to 0
    $_SESSION['counter']++; // increment the counter by 1


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    You have visited <?php echo $_SESSION['counter']; ?> times
</body>
</html>