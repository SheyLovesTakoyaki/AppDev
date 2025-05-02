<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>

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
        margin-left: 20px;
    }

    label {
        font-weight: bold;
        display: block;
        margin: 20px 0 0;
    }

    input[type="text"],
    input[type="password"] {
        width: 90%;
        padding: 10px;
        margin-top: -10px;
        margin-bottom: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        outline: none;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        border-color: #A53860;
    }

    input[type="submit"] {
        width: 60%;
        display: block;
        margin-top: 20px;
        margin-left: 70px;
        padding: 10px;
        background-color: #A53860;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
        background-color: #8b2c4f;
    }

    .message {
        margin-top: 15px;
        text-align: center;
        font-style: italic;
    }
</style>

<body>
    <div class="container">
        <form action="SW1_login_form.php" method="post">
            <h2>SIGN IN</h2>
            <div class="info">
                <label>Username: </label><br>
                <input type="text" name="username"><br>
                <label>Password: </label><br>
                <input type="password" name="password"><br>
                <input type="submit" name="login" value="Log In">
        </form>

        <div class="message">
            <?php
            $day = date("l");
            $date = date("d-m-Y");
            if (isset($_POST["login"])) {
                $username = $_POST["username"];
                $password = $_POST["password"];

                if (empty($username) && empty($password)) {
                    echo "Your username and password is empty";
                } elseif (empty($username)) {
                    echo "Your username is empty";
                } elseif (empty($password)) {
                    echo "Your password is empty";
                } else {
                    echo "Welcome, {$username}! <br>";
                    echo "Today is {$day}, {$date}";
                }
            }
            ?>
        </div>
    </div>
    </div>
</body>

</html>