<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter a Username</label><br>
        <input type="text" name="username"><br>

        <label>Enter a Password</label><br>
        <input type="password" name="password"><br>

        <label>Enter an Age</label><br>
        <input type="text" name="age"><br>

        <label>Enter a email</label><br>
        <input type="text" name="email"><br>

        <input type="submit" name="login" value="login"><br>
    </form>
</body>
</html>

<?php
    if (isset($_POST["login"])) {
        /*
        //SANITIZE INPUTS 

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        */

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if (empty($email)) {
            echo "THAT EMAIL IS NO VALID";
        }else {
            echo "Youre email is $email";
        }
    }
?>
