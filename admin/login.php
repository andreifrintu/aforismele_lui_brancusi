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
    <!-- includem librariile CSS --->
    <link href="/aforismele_lui_brancusi/static/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- importam libraria jQuery --->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- importam libraria BootstrapJS --->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>admin @ Aforismele lui Brâncuși</title>
</head>
<body class="d-flex justify-content-center bg-dark">

    <form method="POST" class="flex-column d-flex gap-2 w-50 px-3 py-5" style="margin: 0; position: absolute; top: 50%; -ms-transform: translateY(-50%); transform: translateY(-50%);">
        <div class="invisible p-3">.</div>
        <h1 class="fs-3 text-center text-galben">Conectează-te la panoul de administrare!</h1>
        <input name="user" class="form-control fw-bold mb-2 text-secondary fs-4 bg-transparent" style="" type="text" autocomplete="off" placeholder="User">
        <input name="pass" class="form-control fw-bold mb-2 text-secondary fs-4 bg-transparent" style="" type="password" autocomplete="off" placeholder="Parola">
        <button type="submit" class="btn btn-lg fs-4 btn-outline-secondary fw-bold">Conectează-te</button>
        <div class="invisible p-3">.</div>
    </form>

</body>
</html>