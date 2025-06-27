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
    </style>
</head>

<body>
    <div class="container">
        <form action="sort.php" method="post">
            <h2>Sort Arrays</h2>
            <div class="info">
                <?php
                $fruits = [
                    "peach",
                    "strawberry",
                    "grape",
                    "pineapple",
                    "kiwi",
                    "apple",
                    "pear",
                    "orange",
                    "banana",
                    "mango",
                    "blueberry",
                    "watermelon"
                ];

                sort($fruits);

                echo "<ol>";
                foreach ($fruits as $fruit) {
                    echo "<li>$fruit</li>";
                }
                echo "</ol>";
                ?>
            </div>
        </form>
    </div>
</body>

</html>