<?php

    /*
    
        Website developed by Andrei Frîntu
        Critical maintenance @ codulluiandrei.ro

        Version:    1.0@main:aforismele_lui_brancusi
        Stage:      testing@localhost
        Contact:    admin@codulluiandrei.ro


        ! Componenta footer
    */

?>

<!-- importam libraria jQuery --->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- importam libraria BootstrapJS --->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<!DOCTYPE html>
<html lang="ro">
<body>
<div class="container d-flex flex-column min-vh-100">
  <footer class="mt-auto d-flex justify-content-center flex-wrap row row-cols-1 row-cols-md-3 py-5 my-1 border-top">
    <div class="col-3 mb-3">
      <img src="static/imagini\logo/logo cntv.png" class="bi me-auto img-fluid" style="max-width: 100%">
    </div>
    <div class="col-3 mb-3 align-items-end">
      <h5 style="text-align:right">Secțiuni</h5>
      <ul class="nav flex-column align-items-end  ">
        <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted">Acasă</a></li>
        <li class="nav-item mb-2"><a href="inscrieri.php" class="nav-link p-0 text-muted">Înscriere</a></li>
        <li class="nav-item mb-2"><a href="regulament.php" class="nav-link p-0 text-muted">Regulament</a></li>
        <li class="nav-item mb-2"><a href="arhiva.php" class="nav-link p-0 text-muted">Arhivă</a></li>
      </ul>
    </div>
    <div class="col-3 mb-3 row align-items-center">
      <form method="POST" class="d-flex justify-content-center" action="admin/login.php">
        <button class="btn btn-primary " type="submit">Conectare</button>
      </form>
      <form method="POST" class="d-flex justify-content-center" action="admin/login.php">
        <button class="btn btn-primary" type="submit">Listă participanți</button>
      </form>
    </div>
      <!-- cum schimb culoarea la text in functie de pagina? (daca sunt pe acasa sa fie culoarea text-secondary in loc de text-white)
            si cum sa fac sa nu se poata apasa pe link pagina resp !-->
  </footer>
</div>

</body>
</html>