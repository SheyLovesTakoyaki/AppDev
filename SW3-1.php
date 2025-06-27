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
    <!-- <h2>Farenheit Celcius Converter</h2>     -->
        <div class="info">
            <?php
                // $orders = array("Pizza", "Donut");
                // $x = 1; // counter

                // echo "Your order:<br>";
                // foreach ($orders as $order) {
                //     echo "{$x}. {$order}<br>";
                //     $x++;
                // }

                // if ($orders[0] < $orders[1]): echo "<strong>{$orders[0]} comes before $orders[1]";
                // else: echo "<strong>{$orders[1]} comes before $orders[0]";
                // endif;

                $letters = array("A", "B");

                if ($letters[0] > $letters[1]): 
                    echo "{$letters[0]} is greater than {$letters[1]}";
                elseif ($letters[0] == $letters[1]): 
                    echo "{$letters[0]} is equal to {$letters[1]}";
                else: 
                    echo "{$letters[0]} is less than {$letters[1]}";
                endif;
            ?>
        </div>
    </div>
</body>

</html>