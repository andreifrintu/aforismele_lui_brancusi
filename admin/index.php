<?php

    /*
    
        Website developed by Andrei Frîntu
        Critical maintenance @ codulluiandrei.ro

        Version:    1.0@main:aforismele_lui_brancusi
        Stage:      testing@localhost
        Contact:    admin@codulluiandrei.ro


        ! Pagina panou de administrare
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

    if (isset($_GET['material'])) {
        $file = $_GET['material'];
        $ext = pathinfo($file, PATHINFO_EXTENSION);
        $nume = mysqli_fetch_row(mysqli_query($conn, "SELECT `nume` FROM `inscrieri` WHERE `material` = '" . $_GET['material'] . "'"))[0];
        $prenume = mysqli_fetch_row(mysqli_query($conn, "SELECT `prenume` FROM `inscrieri` WHERE `material` = '" . $_GET['material'] . "'"))[0];
        header('Content-Disposition: attachament; filename="' . $nume . "-" . $prenume . '.' . $ext);
        readfile($file);
    }

    if (isset($_SESSION['login']) && $_SESSION['login'] == 1) {
        $user = mysqli_real_escape_string($conn, $_SESSION['user']);
        $pass = mysqli_real_escape_string($conn, $_SESSION['pass']);

        $query = mysqli_query($conn, "SELECT `id`, `pass` FROM `login` WHERE `user` = '$user'");

        $result = mysqli_fetch_assoc($query);

        if ($result) {
            $storedPassword = $result['pass'];
            if ($pass == $result['pass']) {

                if (isset($_GET['descarca'])) {
                    require_once 'PhpXlsxGenerator.php'; 
                    $fileName = "inscrieri-Aforismele-lui-Brancusi-" . date('Y-m-d') . ".xlsx"; 
                    $excelData[] = array('Nr. Crt.', 'Nume', 'Prenume', 'Clasa', 'Județ', 'Secțiune', 'Profesor', 'E-mail', 'Material'); 
                    $contor = 0;
                    $table = mysqli_query($conn, "SELECT * FROM `inscrieri` ORDER BY `id` ASC");
                    while ($db = mysqli_fetch_assoc($table)) {
                        $contor++;
                        $lineData = array($contor, $db['nume'], $db['prenume'], $db['clasa'], $db['judet'], $db['sectiune'], $db['profesor'], $db['email'], "http://localhost/aforismele_lui_brancusi/admin/?material=" . $db['material']);  
                        $excelData[] = $lineData; 
                    }
                    
                    $xlsx = PhpXlsxGenerator::fromArray( $excelData ); 
                    $xlsx->downloadAs($fileName); 
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
<body class="bg-dark">
                
    <div class="text-center w-75 m-auto border-bottom my-2 d-flex fl-cont justify-content-around align-items-center">
        <a href="login.php?logout" class="nav-link fs-4">Deconectează-te</a>
        <a href="/aforismele_lui_brancusi/">
            <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="auto" height="45px" viewBox="0 0 4000 4000" preserveAspectRatio="xMidYMid meet">
                <g id="logo" transform="translate(0.000000,4000) scale(0.100000,-0.100000)" fill="#118b9eff" stroke="none">
                <path d="M0 17715 l0 -17715 17715 0 17715 0 0 17715 0 17715 -17715 0 -17715
                0 0 -17715z m33065 0 l0 -15350 -15350 0 -15350 0 -3 15340 c-1 8437 0 15346
                3 15353 3 10 3079 12 15352 10 l15348 -3 0 -15350z"/>
                <path d="M17320 30014 c-1076 -49 -1938 -178 -2839 -425 -804 -220 -1501 -486
                -2251 -861 -508 -253 -869 -462 -1335 -773 -1362 -909 -2511 -2058 -3420
                -3420 -448 -671 -821 -1369 -1130 -2109 -527 -1267 -825 -2576 -917 -4031 -16
                -261 -16 -1099 0 -1360 100 -1572 429 -2932 1048 -4336 91 -204 360 -743 475
                -949 865 -1552 2060 -2909 3490 -3960 374 -275 892 -607 1309 -839 206 -115
                745 -384 949 -475 1403 -619 2764 -948 4336 -1048 261 -16 1099 -16 1360 0
                1572 100 2933 429 4336 1048 204 91 743 360 949 475 1411 786 2645 1831 3657
                3097 414 517 816 1116 1142 1702 115 206 384 745 475 949 619 1404 948 2764
                1048 4336 16 261 16 1099 0 1360 -100 1572 -429 2933 -1048 4336 -91 204 -360
                743 -475 949 -786 1411 -1831 2645 -3097 3657 -517 414 -1116 816 -1702 1142
                -206 115 -745 384 -949 475 -1396 616 -2769 949 -4316 1046 -168 11 -950 21
                -1095 14z m2490 -3490 c962 -228 1912 -629 2753 -1163 807 -512 1544 -1165
                2152 -1906 1582 -1926 2294 -4407 1980 -6895 -289 -2280 -1452 -4378 -3240
                -5845 -957 -786 -2065 -1366 -3261 -1709 -191 -54 -565 -146 -597 -146 -16 0
                -17 495 -17 8855 0 8360 1 8855 17 8855 10 0 105 -21 213 -46z m-4340 -8813
                l0 -8770 -92 25 c-1966 529 -3691 1697 -4910 3325 -1414 1888 -2031 4228
                -1733 6577 290 2284 1450 4377 3240 5847 956 786 2049 1358 3261 1709 104 30
                199 55 212 55 l22 1 0 -8769z"/>
                </g>
            </svg>
        </a>
        <a href="index.php?descarca" class="nav-link fs-4">Desarcă tabelul</a>
    </div>

    <div class="invisible p-3">.</div>

    <div class="w-md-100 text-center m-auto">
        <h1 class="fs-4 text-white">Tabel cu participanții<br>înscriși la concurs:</h1>
        
        <div class="invisible p-3">.</div>

        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">Nr.<br>crt.</th>
                    <th scope="col">Nume<br>Prenume</th>
                    <th scope="col">Clasa</th>
                    <th scope="col">Județ</th>
                    <th scope="col">Secțiunea</th>
                    <th scope="col">Profesor<br>coordonator</th>
                    <th scope="col">Material</th>
                    <th scope="col">E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    
                    $contor = 0;
                    $table = mysqli_query($conn, "SELECT * FROM `inscrieri` ORDER BY `id` ASC");
                    while ($db = mysqli_fetch_assoc($table)) {
                        $contor++;
                        echo "<tr>";
                        echo '<th scope="row">' . $contor . '</th>';
                        echo '<td>' . $db['nume'] . " " . $db['prenume'] . '</td>';
                        echo '<td>' . $db['clasa'] . '</td>';
                        echo '<td>' . $db['judet'] . '</td>';
                        echo '<td>' . $db['sectiune'] . '</td>';
                        echo '<td>' . $db['profesor'] . '</td>';
                        echo '<td><a href="' . substr($db['material'], 15) . '" download="' . $db['nume'] . "-" . $db['prenume'] . '">descarcă</a></td>';
                        echo '<td><span id="' . $db['id'] . '" class="d-none">' . $db['email'] . '</span><a id="a' . $db['id'] . '" href="#" onclick="showMail(' . $db['id'] . ')">afișează</a></td>';
                        echo "</tr>";  
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script>
        function showMail(id) {
            $('#' + id).removeClass("d-none");
            $('#a' + id).addClass("d-none");
        }
    </script>

</body>
</html>
<?php
            } else {
                header("Location: login.php");
            }
        } else {
            header("Location: login.php");
        }
    } else 
        header("Location: login.php");
?>