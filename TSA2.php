<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
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
            width: 100%;
            max-width: 500px;
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

            background-image: url('kissymissy.jpg');
            background-position: center;
            background-blend-mode: lighten;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        .info {
            margin: 0 auto;
        }

        label {
            font-weight: bold;
            display: block;
            margin-top: 20px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s ease;
        }

        input[type="number"]:focus {
            border-color: #A53860;
        }

        input[type="submit"] {
            width: 100%;
            display: block;    
            margin-top: 25px;
            padding: 12px;
            background-color: #A53860;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #8b2c4f;
        }

        .message {
            margin-top: 25px;
            text-align: center;
            font-style: italic;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="container">
        <form action="TSA2.php" method="post">
            <h2>Know Your Zodiac Sign</h2>
            <div class="info">
                <label>Enter your Birth Year: </label>
                <input type="number" name="year" min="0" placeholder="Birth Year"><br>
                <input type="submit" name="submit"><br><br>
                <div class="message">
                    <?php
                    if (isset($_POST["year"])) {
                        $z_year = (int)$_POST["year"];

                        function zodiac_sign($z_year)
                        {
                            $zodiac = [
                                "Monkey",
                                "Rooster",
                                "Dog",
                                "Boar",
                                "Rat",
                                "Ox",
                                "Tiger",
                                "Rabbit",
                                "Dragon",
                                "Snake",
                                "Horse",
                                "Lamb"
                            ];

                            $index = $z_year % 12;

                            return $zodiac[$index];
                        }

                        echo "<strong>Year: $z_year <br><br>";
                        echo "Zodiac Sign: <br>" . zodiac_sign($z_year);
                    }
                    ?>
                </div>
            </div>
        </form>
    </div>
</body>

</html>