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

        .info {
            line-height: 1.8;
        }
    </style>

</head>

<body>
    <div class="container">
        <h2>Greeting of the Day<br></h2>
        <div class="info">
            <?php
            date_default_timezone_set('Asia/Manila');
            $hour = date('H');
            $time = date("h:i:A");

            if ($hour >= 18) {
                echo "<h4>Have a good night! ˚ ༘ ೀ⋆｡˚</h4>";
            } else {
                echo "<h4>Have a good dau! 𓈒⟡₊⋆∘</h4>";
            }

            echo $time;

            ?>
        </div>
    </div>
</body>

</html>