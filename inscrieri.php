<?php

    /*
    
        Website developed by Andrei Frîntu
        Critical maintenance @ codulluiandrei.ro

        Version:    1.0@main:aforismele_lui_brancusi
        Stage:      testing@localhost
        Contact:    admin@codulluiandrei.ro


        ! Pagina cu form de inscriere
    */

    $db['mentenanta'] = true;
    include("admin/config.php");
          
    /* init connection */
    $conn = mysqli_connect($db['server'], $db['user'], $db['password'], $db['name']);
    /* check connection activity */
    if (!$conn) {
        if ($db['mentenanta'] == true) echo "Website-ul este momentan în mentenanță. Revino mai tărziu!";
        echo "Conexiunea a eșuat!";
    }

    $router['page'] = "inscrieri";
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <title>Aforismele lui Brâncuși</title>
    <!-- includem componenta de meta --->
    <?php include_once('static/pages/meta.php');?>
</head>
<body>
    
    <!-- includem componenta de navbar --->
    <?php include_once('static/pages/navbar.php'); ?>

    <div class="invisible p-3">.</div>

    <h1 class="fs-1 text-center mt-2">Completează formularul de mai jos pentru a te înscrie la<br>Concursul Național „<span class="text-galben">Aforismele lui Brâncuși</span>”</h1>

    <div class="w-sm-90 m-auto p-3">

        <?php

            if (isset($_POST['nume']) && isset($_POST['prenume']) && isset($_POST['email']) && isset($_POST['profesor']) && isset($_POST['clasa']) && isset($_POST['judet']) && isset($_POST['sectiune']) && isset($_FILES['material']))  {
                
                $nume = mysqli_real_escape_string($conn, $_POST['nume']);
                $prenume = mysqli_real_escape_string($conn, $_POST['prenume']);
                $email = mysqli_real_escape_string($conn, $_POST['email']);
                $profesor = mysqli_real_escape_string($conn, $_POST['profesor']);
                $clasa = mysqli_real_escape_string($conn, $_POST['clasa']);
                $judet = mysqli_real_escape_string($conn, $_POST['judet']);
                $sectiune = mysqli_real_escape_string($conn, $_POST['sectiune']);

                $code = mysqli_real_escape_string($conn, sha1(mt_rand(100000, 999999)));
                $file = ($sectiune == 'desen') ? "/aforismele_lui_brancusi/static/inscrieri/desen/" . $code : "/aforismele_lui_brancusi/static/inscrieri/eseu/" . $code;
            
                if ($_FILES['material']['error'] === UPLOAD_ERR_OK) {
                    $path_parts = pathinfo($_FILES["material"]["name"]);
                    $tempFile = $_FILES['material']['tmp_name'];
                    $targetFile = $_SERVER['DOCUMENT_ROOT'] . $file . "." . $path_parts['extension'];
                    
                    if (move_uploaded_file($tempFile, $targetFile))
                        mysqli_query($conn, "INSERT INTO `inscrieri`(`nume`, `prenume`, `clasa`, `judet`, `sectiune`, `email`, `profesor`, `material`) VALUES ('$nume', '$prenume', '$clasa', '$judet', '$sectiune', '$email', '$profesor', '$targetFile')");
                    
                    echo '<button class="btn btn-lg btn-success mb-2 w-100" disabled>Ai fost înscris cu success la sectiunea „' . $sectiune . '” a concursului!</button>';
                } else 
                echo '<button class="btn btn-lg btn-danger mb-2 w-100" disabled>A apărut o eroare la înscriere! Încearcă din nou!</button>';
            }

        ?>

        <form method="POST" enctype="multipart/form-data">
            <input required name="nume" type="text" class="form-control fw-bold mb-2 fs-5 text-secondary" placeholder="Numele tău...">
            <input required name="prenume" type="text" class="form-control fw-bold mb-2 fs-5 text-secondary" placeholder="Prenumele tău...">
            <input required name="email" type="email" class="form-control fw-bold mb-2 fs-5 text-secondary" placeholder="Email-ul tău...">
            <input required name="profesor" type="text" class="form-control fw-bold mb-2 fs-5 text-secondary" placeholder="Profesorul tău coordonator...">
            <select required name="clasa" id="clasa" class="form-select form-control fw-bold mb-2 fs-5 text-secondary">
                <option selected>Clasa ta...</option>
                <option value="5">V (5)</option>
                <option value="6">VI (6)</option>
                <option value="7">VII (7)</option>
                <option value="8">VIII (8)</option>
                <option value="9">IX (9)</option>
                <option value="10">X (10)</option>
                <option value="11">XI (11)</option>
                <option value="12">XII (12)</option>
            </select>
            <select required disabled name="judet" id="judet" class="form-select form-control fw-bold mb-2 fs-5 text-secondary">
                <option selected>Județul tău...</option>
                <option value="AB">Alba</option>
                <option value="AR">Arad</option>
                <option value="AG">Argeș</option>
                <option value="BC">Bacău</option>
                <option value="BH">Bihor</option>
                <option value="BN">Bistrița-Năsăud</option>
                <option value="BR">Brăila</option>
                <option value="BT">Botoșani</option>
                <option value="BV">Brașov</option>
                <option value="B">București</option>
                <option value="BZ">Buzău</option>
                <option value="CS">Caraș-Severin</option>
                <option value="CL">Călărași</option>
                <option value="CJ">Cluj</option>
                <option value="CT">Constanța</option>
                <option value="CV">Covasna</option>
                <option value="DB">Dâmbovița</option>
                <option value="DJ">Dolj</option>
                <option value="GL">Galați</option>
                <option value="GR">Giurgiu</option>
                <option value="GJ">Gorj</option>
                <option value="HR">Harghita</option>
                <option value="HD">Hunedoara</option>
                <option value="IL">Ialomița</option>
                <option value="IS">Iași</option>
                <option value="IF">Ilfov</option>
                <option value="MM">Maramureș</option>
                <option value="MH">Mehedinți</option>
                <option value="MS">Mureș</option>
                <option value="NT">Neamț</option>
                <option value="OT">Olt</option>
                <option value="PH">Prahova</option>
                <option value="SM">Satu Mare</option>
                <option value="SJ">Sălaj</option>
                <option value="SB">Sibiu</option>
                <option value="SV">Suceava</option>
                <option value="TR">Teleorman</option>
                <option value="TM">Timiș</option>
                <option value="TL">Tulcea</option>
                <option value="VS">Vaslui</option>
                <option value="VL">Vâlcea</option>
                <option value="VN">Vrancea</option>
            </select>
            <select required disabled name="sectiune" id="sectiune" class="form-select form-control fw-bold mb-2 fs-5 text-secondary">
                <option selected>Secțiunea...</option>
                <option value="eseu">Eseu</option>
                <option value="desen">Desen</option>
            </select>
            <p class="mb-0 fs-6 fw-bold fs-5 text-secondary text-justify">Încarcă <span id="span_material">materialul</span>...</p>
            <input required disabled required id="input_material" name="material" type="file" class="form-control fw-bold mb-2 fs-5 text-secondary" accept="image/*">
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" role="switch" id="prelucrare">
                <label class="form-check-label" for="prelucrare" class="fs-5 fw-bold">Sunt de acord cu prelucrarea datelor!</label>
            </div>
            <span class="popover" tabindex="0" data-bs-content="Disabled popover">
                <button disabled type="submit" id="trimitere" class="btn w-100 fw-bold fs-5 btn-outline-secondary">Înscrie-te</button>
            </span>
        </form>
    </div>

    <div class="invisible p-3">.</div>

    <script>
        let myPopover = new bootstrap.Popover('.popover', {
            trigger: 'hover focus'
        });
        $(document).ready(function() {
            $('#clasa').change(function () {
                if ($(this).val() != 'Clasa ta...')
                    $('#judet').prop('disabled', false);
                else {
                    $('#judet').prop('disabled', true);
                    $('#sectiune').prop('disabled', true);
                    $('#input_material').prop('disabled', true);
                    $('#judet option:eq(0)').prop('selected', true);
                    $('#sectiune option:eq(0)').prop('selected', true);
                    $('#input_material').val('');
                }
            });
            $('#judet').change(function () {
                if ($(this).val() != 'Județul tău...')
                    $('#sectiune').prop('disabled', false);
                else {
                    $('#sectiune').prop('disabled', true);
                    $('#input_material').prop('disabled', true);
                    $('#sectiune option:eq(0)').prop('selected', true);
                    $('#input_material').val('');
                }
            });
            $('#sectiune').change(function () {
                if ($(this).val() == 'eseu') {
                    $('#span_material').text("eseul");
                    $('#input_material').val('');
                    $('#input_material').prop('disabled', false);
                    $('#input_material').attr('accept', '.doc, .docx, application/msword, application/vnd.openxmlformats-officedocument.wordprocessingml.document');
                } else if ($(this).val() == 'desen') {
                    $('#span_material').text("desenul");
                    $('#input_material').val('');
                    $('#input_material').prop('disabled', false);
                    $('#input_material').attr('accept', 'image/*');
                } else {
                    $('#input_material').prop('disabled', true);
                    $('#input_material').val('');
                }
            });
            $('#prelucrare').change(function() {
                if (this.checked) {
                    $('#trimitere').prop('disabled', false);
                    myPopover.dispose();
                }
                else {
                    $('#trimitere').prop('disabled', true);
                    myPopover = new bootstrap.Popover('.popover', {
                        trigger: 'hover focus'
                    });
                }
            });
            $('form').submit(function(event) {
                if (!($('#prelucrare').is(':checked')))
                    event.preventDefault();
            });
        });
    </script>

    <!-- includem componenta de footer --->
    <?php include_once('static/pages/footer.php'); ?>

</body>
</html>