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
  <header style="background-color:var(--oxford-blue)" class="p-3 text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center">

      <a href="index.php"><img src="static/imagini\logo/logo min 2023.png" height="45"></a>

        <ul class="nav col-12 col-lg-auto ms-lg-auto justify-content-center mb-md-0">
          <li><a href="index.php" class="text-white nav-link  px-2">Acasă</a></li>
          <li><a href="inscrieri.php" class="text-white nav-link px-2">Înscriere</a></li>
          <li><a href="regulament.php" class="text-white nav-link px-2">Regulament</a></li>
          <li><a href="arhiva.php" class="text-white nav-link px-2">Arhivă</a></li>
        </ul>
      <!-- cum schimb culoarea la text in functie de pagina? (daca sunt pe acasa sa fie culoarea text-secondary in loc de text-white la textul de acasa)
            si cum sa fac sa nu se poata apasa pe link pagina resp !-->
      </div>
    </div>
  </header>
  </body>
</html>