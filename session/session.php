<?php
session_start();

$preferred_flavor = "None";
if (!empty($_SESSION["orders"])) {
    $max_qty = max($_SESSION["orders"]);
    // get all flavors with the max quantity (in case of tie, pick the first index)
    $preferred_flavors = array_keys($_SESSION["orders"], $max_qty);
    $preferred_flavor = $preferred_flavors[0];
}

// calculate total cookies
$total = 0;
foreach ($_SESSION["orders"] as $qty) {
    $total += $qty;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maria's Cookie</title>
</head>
<body>
    <form action="session.php" method="post">
        <h2>Order Summary</h2>
        <p>Preferred flavor: <b><?php echo htmlspecialchars($preferred_flavor); ?></b></p>
        <p>Total cookies ordered this session: <b><?php echo $total; ?></b></p>

        <ul>
            <?php foreach ($_SESSION["orders"] as $flavor => $qty): ?>
                <li><?php echo htmlspecialchars($flavor) . ": " . $qty; ?></li>
            <?php endforeach; ?>
        </ul>

        <a href="login.php">Order More Cookies</a><br><br>
        <input type="submit" name="destroy" value="Reset Order"><br>
    </form>
</body>
</html>

<?php

if (isset($_POST["destroy"])) {
    session_destroy();
    setcookie('preferred_flavor', '', time() - 3600, '/'); // delete cookie by setting expiration time in the past
    header("Location: login.php");
    exit;
}

?>