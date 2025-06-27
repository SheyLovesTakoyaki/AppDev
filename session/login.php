<?php
session_start();

if (!isset($_SESSION["orders"])) {
    $_SESSION["orders"] = [];
}

if (isset($_POST["submit"])) {
    $flavor = $_POST["flavor"];      // Assign from POST
    $quantity = $_POST["quantity"];  // Assign from POST

    setcookie("preferred_flavor", $flavor, time() + (86400 * 30), "/"); // Set cookie before output

    if (isset($_SESSION["orders"][$flavor])) {
        $_SESSION["orders"][$flavor] += $quantity;
    } else {
        $_SESSION["orders"][$flavor] = $quantity;
    }

    header("Location: session.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maria's Cookie</title>
</head>

<body>
    <form action="login.php" method="post">
        Type your cookies' flavor:<br>
        <input type="text" name="flavor"><br>
        Quantities:<br>
        <input type="number" name="quantity" min="1" value="1"><br>
        <input type="submit" name="submit" value="submit order"><br>
    </form>

</body>

</html>