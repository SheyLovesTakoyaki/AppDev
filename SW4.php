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
            max-width: 500px;
            margin: auto;
            background: whitesmoke;
            padding: 30px 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;

            background-image: url('kissymissy.jpg');
            background-blend-mode: soft-light;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
        }

        .info {
            line-height: 1.8;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Simple Date and Time Formatter</h2>
        <div class="info">
            <?php
            date_default_timezone_set("Asia/Manila");

            // 1. displays the current date and time in multiple formats
            $format1 = date("l, F j, Y, g:i A");            // Tuesday, May 20, 2025, 6:14 PM
            $format2 = date("Y-m-d H:i:s");                 // 2025-05-20 15:45:30 (24-hour format)
            $format3 = date("D, M jS Y");                   // Tue, May 20th 2025
            $format4 = date("l \\a\\t g:i A");              // Tuesday at 3:45 PM
            
            echo "<b>Current Date and Time 1:</b> {$format1} <br>";
            echo "<b>Current Date and Time 2:</b>: {$format2} <br>";
            echo "<b>Current Date and Time 3:</b> {$format3} <br>";
            echo "<b>Current Date and Time 4:</b> {$format4} <br>";

            // 2. formats the date to show weekday, month, day, and year
            $date = date("l, F j, Y");

            echo "<br><b>Formatted Date:</b> {$date} <br>";       // Tuesday, May 20, 2025

            // 3. formats the time to display hours, minutes, and seconds   
            $time = date("g:i:s A");

            echo "<br><b>Formatted Time:</b> {$time} <br>";            // 6:24:15 PM

            // 4. calculate and display the date 7 days from today
            $days = date('l, F j, Y', strtotime('+7 days'));

            echo "<br><b>Date 7 days from today:</b> {$days}";    // Tuesday, May 27, 2025
            ?>
        </div>
    </div>
</body>
</html>