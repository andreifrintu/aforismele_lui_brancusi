<?php

    /*
    
        Website developed by Andrei Frîntu
        Critical maintenance @ codulluiandrei.ro

        Version:    1.0@main:aforismele_lui_brancusi
        Stage:      testing@localhost
        Contact:    admin@codulluiandrei.ro


        ! Pagina cu form de inscriere
    */

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

    <h1 class="fs-4 text-center mt-2">Completează formularul de mai jos pentru a te înscrie la concursul național „Aforismele lui Brâncuși”</h1>

    <div class="w-50 m-auto p-3">
        <form method="POST" enctype="multipart/form-data">
            <input required name="nume" type="text" class="form-control fw-bold mb-2 text-secondary" placeholder="Numele tău...">
            <input required name="prenume" type="text" class="form-control fw-bold mb-2 text-secondary" placeholder="Prenumele tău...">
            <input required name="email" type="mail" class="form-control fw-bold mb-2 text-secondary" placeholder="Email-ul tău...">
            <input required name="profesor" type="text" class="form-control fw-bold mb-2 text-secondary" placeholder="Profesorul tău coordonator...">
            <select required name="clasa" id="clasa" class="form-select form-control fw-bold mb-2 text-secondary">
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
            <select required disabled name="judet" id="judet" class="form-select form-control fw-bold mb-2 text-secondary">
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
            <select required disabled name="sectiune" id="sectiune" class="form-select form-control fw-bold mb-2 text-secondary">
                <option selected>Secțiunea...</option>
                <option value="eseu">Eseu</option>
                <option value="desen">Desen</option>
            </select>
            <p class="mb-0 fs-6 fw-bold text-secondary text-justify">Încarcă <span id="span_material">materialul</span>...</p>
            <input required disabled required id="input_material" name="material" type="file" class="form-control fw-bold mb-2 text-secondary" accept="image/*">
            <button type="submit" class="btn w-100 btn-outline-secondary">Înscrie-te</button>
        </form>
    </div>

    <div class="invisible p-3">.</div>

    <script>
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
        });
    </script>

    <!-- includem componenta de footer --->
    <?php include_once('static/pages/footer.php'); ?>

</body>
</html>