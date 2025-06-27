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
            background-color: #ffc0cb;
            background-image: url('ribbon.jpg');
            background-blend-mode: soft-light;
            background-position: center;

            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 90%;
            max-width: 500px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;

            background-image: url('kissymissy.jpg');
            background-position: center;
            background-blend-mode: lighten;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"] {
            padding: 10px;
            width: 80%;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
        }

        .info {
            font-size: 18px;
            padding: 15px;
            border-radius: 10px;
            line-height: 1.8;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="SW3_3.php" method="get">
            <label>Gender [F] [M]:</label>
            <input type="text" name="gender">
        </form>
        <div class="info">
            <?php
                if (isset($_GET["gender"])) {
                    switch (strtoupper($_GET["gender"])) {
                        case "F":
                            echo "Good morning, Ma'am! How may I help you?";
                            break;
                        case "M":
                            echo "Good morning, Sir! How may I help you?";
                            break;
                        default:
                            echo "Please enter F or M only.";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>