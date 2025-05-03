<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Helvetica;
            color: #A53860;
            background-color: pink;
            padding: 40px;
        }

        .container {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .info {
            line-height: 1.8;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>User Profile</h2>
        <div class="info">
            <?php
            $fullname = "Hershey B. Castro";
            $section = "TC21";
            $course = "CCS0043";
            $day = date("l");
            $time = date("h:i A");

            echo "Fullname: <strong>{$fullname}</strong><br>";
            echo "Section: <strong>{$section}</strong><br>";
            echo "Course: <strong>{$course}</strong><br>";
            echo "Time & Date: <strong>{$time} - {$day}</strong>";
            ?>
        </div>
    </div>
</body>

</html>