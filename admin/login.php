<?php

    /*
    
        Website developed by Andrei Frîntu
        Critical maintenance @ codulluiandrei.ro

        Version:    1.0@main:aforismele_lui_brancusi
        Stage:      testing@localhost
        Contact:    admin@codulluiandrei.ro


        ! Pagina conectare admin
    */

    /* database connection variables */
    $db['mentenanta'] = true;
    include("config.php");
    session_start();
    
    /* init connection */
    $conn = mysqli_connect($db['server'], $db['user'], $db['password'], $db['name']);
    /* check connection activity */
    if (!$conn) {
        if ($db['mentenanta'] == true) echo "Website-ul este momentan în mentenanță. Revino mai tărziu!";
        echo "Conexiunea a eșuat!";
    }

    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $user = mysqli_real_escape_string($conn, $_POST['user']);
        $pass = mysqli_real_escape_string($conn, $_POST['pass']);

        $query = mysqli_query($conn, "SELECT `id`, `pass` FROM `login` WHERE `user` = '$user'");

        $result = mysqli_fetch_assoc($query);

        if ($result) {
            $storedPassword = $result['pass'];
            if (password_verify($pass, $storedPassword)) {

                $_SESSION['login'] = 1;
                $_SESSION['user'] = $user;
                $_SESSION['pass'] = $storedPassword;
                header("Location: index.php");
            } else {
                echo "Parolă sau user greșit!";
            }
        } else {
            echo "Utilizator invalid!";
        }
    
    }
    if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
        $user = mysqli_real_escape_string($conn, $_SESSION['user']);
        $pass = mysqli_real_escape_string($conn, $_SESSION['pass']);

        $query = mysqli_query($conn, "SELECT `id`, `pass` FROM `login` WHERE `user` = '$user'");

        $result = mysqli_fetch_assoc($query);

        if ($result) {
            $storedPassword = $result['pass'];
            if ($pass == $result['pass'])
                header("Location: index.php");  
        }

    }
    if (isset($_GET['logout'])) {
        session_destroy();
    }

?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin @ Aforismele lui Brâncuși</title>
</head>
<body>

    <form method="POST" class="flex-column d-flex gap-2">
        <input name="user" class="form-control fw-bold border border-2 border-white rounded bg-transparent p-2 fs-4 text-white" style="" type="text" autocomplete="off" placeholder="User">
        <input name="pass" class="form-control fw-bold border border-2 border-white rounded bg-transparent p-2 fs-4 text-white" style="" type="password" autocomplete="off" placeholder="Parola">
        <button type="submit" class="btn btn-lg fs-4 btn-outline-light fw-bold">Conectează-te</button>
    </form>

</body>
</html>