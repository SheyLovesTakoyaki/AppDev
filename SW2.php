<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASTRO</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: #A53860;
            background-color: rgba(255, 182, 193);
            background-image: url('ribbon.jpg');
            background-blend-mode: soft-light;

            display: flex;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            max-width: 300px;
            margin: auto;
            background: whitesmoke;
            padding: 30px 40px;
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;

            background-image: url('kissymissy.jpg');
            background-blend-mode: soft-light;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }

    </style>

</head>
<body>
<div class="container">
        <h2>Is it ODD or EVEN?</h2><br>
        <div class="info">
            <?php
            $num = 27; // global number

            echo "Number: {$num} <br><br>";
            check_number_type(); // this will print if it's odd or even

            ?>
        </div>
    </div>
</body>
</html>

<?php
function check_number_type() {
    global $num;

    if ($num % 2 == 0) {
        echo "<strong>{$num} is an even number.</strong>";
    } else {
        echo "<strong>{$num} is an odd number.</strong>";
    }
}
?>