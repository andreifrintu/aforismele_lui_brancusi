<?php

    /*
    
        Website developed by Andrei Frîntu
        Critical maintenance @ codulluiandrei.ro

        Version:    1.0@main:aforismele_lui_brancusi
        Stage:      testing@localhost
        Contact:    admin@codulluiandrei.ro


        ! Componenta navbar
    */

?>
<!-- importam libraria jQuery --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- importam libraria BootstrapJS --->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- CSS static -->
<link rel="stylesheet" type="text/css" href="styles.css" />
<!DOCTYPE html>
<html lang="ro">
  <body>
  <header class="p-3 text-white bg-albastru">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center">

      <a href="index.php">
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

        <ul class="nav col-12 fl-cont col-lg-auto ms-lg-auto justify-content-center mb-md-0">
          <li><a href="/aforismele_lui_brancusi/" class="w-100 fs-6 nav-link px-2 fw-bold text-uppercase <?php echo ($router['page'] == 'acasa') ? "disabled text-secondary" : ""; ?>">Acasă</a></li>
          <li><a href="inscrieri" class="w-100 fs-6 nav-link px-2 fw-bold text-uppercase <?php echo ($router['page'] == 'inscrieri') ? "disabled text-secondary" : ""; ?>">Înscriere</a></li>
          <li><a href="regulament" class="w-100 fs-6 nav-link px-2 fw-bold text-uppercase <?php echo ($router['page'] == 'regulament') ? "disabled text-secondary" : ""; ?>">Regulament</a></li>
          <li><a href="arhiva" class="w-100 fs-6 nav-link px-2 fw-bold text-uppercase <?php echo ($router['page'] == 'arhiva') ? "disabled text-secondary" : ""; ?>">Arhivă</a></li>
        </ul>

      </div>
    </div>
  </header>
  </body>
</html>