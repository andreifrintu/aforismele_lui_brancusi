<?php

    /*
    
        Website developed by Andrei Frîntu
        Critical maintenance @ codulluiandrei.ro

        Version:    1.0@main:aforismele_lui_brancusi
        Stage:      testing@localhost
        Contact:    admin@codulluiandrei.ro


        ! Pagina cu regulamentul
    */

    $router['page'] = "regulament";
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
    
    <h1 class="text-galben text-center fw-bold fs-1 text-uppercase pb-3">Regulament</h1>
    <div class="text-justify fs-5 w-md-100 m-auto">
        <h2 class="fs-1"><a id="grup-tinta" href="#grup-tinta" class="text-galben text-underline">#Grupul țintă</a></h1>
        <span class="fs-1 text-albastru">C</span>oncursul se adresează elevilor din învățământul gimnazial (clasele a VII-a / a VIII-a) și liceal, care au aptitudini artistice, literare şi preocupări culturale. Simpozionul are şi o secţiune pentru profesori. Condiţiile de participare se regăsesc mai jos în regulament. 
        <h2 class="fs-1"><a id="calendar" href="#calendar" class="text-galben text-underline">#Calendar concurs:</a></h1>
        <ul>
            <li>Pregătirea şi publicarea concursului:<span class="fw-bold text-albastru"> 01.11.2023 - 29.02.2024</span>;</li>
            <li>Faza locală / județeană: <span class="fw-bold text-albastru">01.02.2024 - 10.02.2024</span>;</li>
            <li>Înscrierea candidaţilor (<a href="inscrieri" class="text-galben">vezi pagina de înscriere</a>): <span class="fw-bold text-albastru">12.02.2024 - 10.03.2023</span>;</li>
            <li>Primirea lucrărilor: <span class="fw-bold text-albastru">12.02.2024 - 10.03.2024</span>;</li>
            <li>Jurizarea lucrărilor: <span class="fw-bold text-albastru">11.03.2024 - 13.03.2024</span>;</li>
            <li>Premierea: <span class="fw-bold text-albastru">16.03.2024</span>.</li>
        </ul>
        <p class="fs-5 fst-italic my-0"><span class="text-galben">*</span> Lucrările plastice / literare expediate prin poștă vor fi primite până la data de <span class="text-albastru">10.03.2024</span>.</p>
        <h2 class="fs-1"><a id="sectiuni" href="#sectiuni" class="text-galben text-underline">#Secțiuni</a></h1>
        <ul>
            <li><span class="fw-bold text-albastru">Secţiunea creaţie literară</span>: gimnaziu (clasele a <span class="fw-bold text-albastru">VII</span>-a / a <span class="fw-bold text-albastru">VIII</span>-a),  / liceu (clasele a <span class="fw-bold text-albastru">IX</span>-a / a <span class="fw-bold text-albastru">XII</span>-a) - <span class="fw-bold text-albastru">eseu</span></li>
            <li><span class="fw-bold text-albastru">Secţiunea creaţie plastică</span>: gimnaziu (clasele a <span class="fw-bold text-albastru">VII</span>-a / a <span class="fw-bold text-albastru">VIII</span>-a),   / liceu (clasele a <span class="fw-bold text-albastru">IX</span>-a / a <span class="fw-bold text-albastru">XII</span>-a) - <span class="fw-bold text-albastru">compoziţii plastice, afişe, postere</span></li>
            <li><span class="fw-bold text-albastru">Secţiunea pentru cadre didactice</span>: Cunoaştere şi autocunoaştere în aforismele lui Brâncuşi - <span class="fw-bold text-albastru">eseu liber</span></li>
        </ul>
        <h2 class="fs-1"><a id="conditii-participare" href="#conditii-participare" class="text-galben text-underline">#Condiții de participare</a></h1>
        <span class="fs-1 text-albastru">C</span>oncursul este gratuit şi deschis tuturor elevilor din județ şi din țară. Aceştia vor putea participa la concurs cu o singură lucrare pe secţiune, iar un cadru didactic poate participa cu maximum 3 elevi.
        <ul class="my-3">
            <li class="mb-2"><span class="fw-bold text-albastru">Secţiunea creaţie literară</span> se va desfăşura direct / indirect. Fişele de înscriere (ANEXA 1), completate de profesorul coordonator şi lucrările se  trimit prin e-mail, la adresa: <a href="mailto:chilibandenisa@yahoo.com" class="text-galben">chilibandenisa@yahoo.com</a>, în termenele precizate mai sus. Alături de fişele de înscriere şi de lucrări, doritorii pot trimite acordul de parteneriat semnat şi ştampilat.<br>Creaţiile literare se trimit și pe adresa şcolii: <span class="fw-bold text-albastru">Colegiul Naţional „Tudor Vladimirescu” Târgu Jiu, Str. Unirii, Nr. 13, Jud. Gorj</span>, cu menţiunea pentru Simpozionul Național „Aforismele lui Bâncuși - izvor al exprimării artistice”.<br>Pentru elevii de gimnaziu şi liceu se va trimite  câte o creaţie, în proză (1 - 2 pagini) cu tema concursului.<br>ATENŢIE! În materialele trimise trebuie menţionate: <span class="fw-bold text-albastru">titlul lucrării</span>, <span class="fw-bold text-albastru">numele</span> şi <span class="fw-bold text-albastru">prenumele</span> elevilor participanţi, <span class="fw-bold text-albastru">clasa</span>, <span class="fw-bold text-albastru">numele</span> şi <span class="fw-bold text-albastru">specialitatea profesorilor coordonatori</span>, <span class="fw-bold text-albastru">şcoala de provenienţă</span> şi <span class="fw-bold text-albastru">judeţul</span>.<br><span class="fst-italic"><span class="text-galben">*</span> Recomandări pentru tehnoredactare text: format A4, Microsoft Office Word, font Times New Roman, corp de literă 12, spaţiu între rânduri 1,5; titlul lucrării, numele, prenumele şi specialitatea cadrelor didactice participante, şcoala de provenienţă şi judeţul vor avea corp de literă 14, bold.</span></li>
            <li class="mb-2"><span class="fw-bold text-albastru">Secţiunea creaţie plastică</span> se va desfăşura direct / indirect. Fişele de înscriere, completate de profesorul coordonator, se  trimit prin e-mail, la adresa: <a href="mailto:gmititica@yahoo.com" class="text-galben">gmititica@yahoo.com</a> în termenul precizat mai sus. Alături de fişele de înscriere şi de lucrări, doritorii pot trimite acordul de parteneriat semnat şi ştampilat.<br>Creaţiile plastice se trimit pe adresa şcolii: <span class="fw-bold text-albastru">Colegiul Naţional „Tudor Vladimirescu” Târgu Jiu, Str. Unirii, Nr. 13, Jud. Gorj</span>, cu menţiunea pentru Simpozionul Național „Aforismele lui Bâncuși - izvor al exprimării artistice”.<br>Lucrările vor fi realizate în tehnică la alegere (<span class="fw-bold text-albastru">acuarelă</span>, <span class="fw-bold text-albastru">acrilic</span>, <span class="fw-bold text-albastru">guaşă</span>, <span class="fw-bold text-albastru">tempera</span>, <span class="fw-bold text-albastru">grafică</span>), format A3, maxim 50 / 70. Lucrările trebuie să ilustreze unul dintre aforismele lui Constantin Brâncuși. Pe spatele lucrării, în dreapta jos, se aplică o etichetă pe care se va specifica lizibil, cu majuscule, <span class="fw-bold text-albastru">titlul lucrării</span>, <span class="fw-bold text-albastru">numele</span> şi <span class="fw-bold text-albastru">prenumele</span> elevului, <span class="fw-bold text-albastru">clasa</span>, <span class="fw-bold text-albastru">unitatea şcolară</span>, <span class="fw-bold text-albastru">localitatea</span>, <span class="fw-bold text-albastru">judeţul</span>, <span class="fw-bold text-albastru">numele</span> şi <span class="fw-bold text-albastru">specialitatea profesorului coordonator</span>.<br>Se va alege un aforism care va fi menţionat la începutul eseului, iar la creaţiile plastice în colţul din dreapta jos.</p></li>
            <li><span class="fw-bold text-albastru">Secţiunea pentru cadre didactice</span> se va desfăşura on-line, la fel ca secţiunea creaţii literare. ANEXA 2 completată şi lucrările se  trimit prin e-mail, la adresa: <a href="mailto:chilibandenisa@yahoo.com" class="text-galben">chilibandenisa@yahoo.com</a>, în termenele precizate mai sus. Alături de fişele de înscriere şi de lucrări, doritorii pot trimite acordul de parteneriat semnat şi ştampilat.<br><span class="fst-italic"><span class="text-galben">*</span> Recomandări pentru tehnoredactare text: format A4, Microsoft Office Word, font Times New Roman, corp de literă 12, spaţiu între rânduri 1,5; titlul lucrării, numele, prenumele şi specialitatea cadrelor didactice participante, şcoala de provenienţă şi judeţul vor avea corp de literă 14, bold.</span></li>
        </ul>
        <h2 class="fs-1"><a id="jurizare" href="#jurizare" class="text-galben text-underline">#Jurizare</a></h1>
        <ul>
            <li>Juriul va fi format din cadre didactice de specialitate din învăţământul preuniversitar. Se vor acorda premii în bani, trei premii (<span class="fw-bold text-albastru">I</span>, <span class="fw-bold text-albastru">II</span> şi <span class="fw-bold text-albastru">III</span>) şi o menţiune, pentru fiecare categorie de vârstă, respectiv 13 - 14 ani (clasele a <span class="fw-bold text-albastru">VII</span>-a / a <span class="fw-bold text-albastru">VIII</span>-a), 15-16 ani (clasele a <span class="fw-bold text-albastru">IX</span>-a / a <span class="fw-bold text-albastru">X</span>-a) și 17-18 ani (clasele a <span class="fw-bold text-albastru">XI</span>-a / a <span class="fw-bold text-albastru">XII</span>-a), pentru fiecare secţiune.</li>
            <li>Diplomele de participare se vor acorda pentru toţi elevii şi cadrele didactice îndrumătoare.</li>
            <li>Diplomele şi adeverinţele de participare la simpozion se vor acorda cadrelor didactice care au trimis lucrări la secţiunea pentru cadre didactice.</li>
            <li>Diplomele se vor trimite prin poștă, în perioada <span class="fw-bold text-albastru">20.03.2024</span> - <span class="fw-bold text-albastru">20.04.2024</span>, sau pe adresele de e-mail indicate de îndrumători în fişa de înscriere.</li>
            <li>Nu se admit contestaţii. Lucrările elevilor nu se restituie.</li>
        </ul>
        <h2 class="fs-1"><a id="evaluare" href="#evaluare" class="text-galben text-underline">#Evaluare</a></h1>
        <ul>
            <li>Expoziții</li>
            <li>Portofolii</li>
            <li>Afișe</li>
            <li>Fotografii</li>
            <li>Diplome</li>
        </ul>
        <h2 class="fs-1"><a id="promovare" href="#promovare" class="text-galben text-underline">#Promovarea și mediatizarea concursului:</a></h1>
        <ul>
            <li>Anunț pe site-ul IȘJ Gorj;</li>
            <li>Mediatizarea prin revista şcolii; Articole în presa locală;</li>
            <li>Redactarea revistei simpozionului;</li>
            <li>Realizarea unei PPT cu lucrările expuse şi premiate, pentru a putea fi apreciate calitativ şi de alţi elevi / cadre didactice / membri ai comunităţii;</li>
            <li>Menţinerea expoziţiei pe o perioadă de 2 săptămâni, pentru a putea fi vizitată de alte instituţii de învăţământ sau alte persoane.</li>
        </ul>
        <h2 class="fs-1"><a id="contact" href="#contact" class="text-galben text-underline">#Contact</a></h1>
        <ul>
            <li>Prof. Mititica Gabriela: <a href="mailto:gmititica@yahoo.com" class="text-galben">gmititica@yahoo.com</a>; tel. <a href="tel:+40761296133" class="text-galben">0761 296 133</a></li>
            <li>Prof. Chiliban Denisa: <a href="mailto:chilibandenisa@yahoo.com" class="text-galben">chilibandenisa@yahoo.com</a>; tel. <a href="tel:+40769263146" class="text-galben">0769 263 146</a></li>
        </ul>
    </div>
    
    <div class="invisible p-3">.</div>
    <!-- includem componenta de footer --->
    <?php include_once('static/pages/footer.php'); ?>

</body>
</html>