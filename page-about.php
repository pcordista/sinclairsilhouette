<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
<div class="page-about-background">
    <img src="assets/img/about.png" class="">
</div>
<div class="about-intro white-text">
    <div class="containerEighteen textUpper">
        <div class="wrapper-apoio">
            <span class="small apoio">sobre</span>
            <h1>Grande bagagem internacional. Mais de 40 anos de história.</h1>
        </div>
    </div>
</div>
<div class="about-core relative">
    <img src="assets/img/center-orchester.png" alt="" class="about-core-bg hide-on-med-and-down">
    <div class="container">
        <div class="flex alignCenter sobre-block-1 columnOnMobile">
            <img src="assets/img/circle-1.png" alt="">
            <p class="about-core-text">
                A Sinclair Pharma, empresa multinacional de dermatologia estética, foi fundada em 1971, no
                Reino Unido, e está entre as principais empresas do segmento na Europa.
            </p>
        </div>
        <div class="flex alignCenter sobre-block-2 columnOnMobile">
            <img src="assets/img/circle-2.png" alt="">
            <p class="about-core-text black-text">
                Somos especialistas em rejuvenescimento facial e nos preocupamos em oferecer o que há de mais inovador por meio de nossos fios de sustentação, preenchedores e bioestimuladores.
            </p>
        </div>
        <div class="flex alignCenter sobre-block-3 invertOnMobile">
            <p class="about-core-text black-text">
                Com operações na França, Alemanha, Espanha, Brasil, Inglaterra e Coreia, a Sinclair Pharma mantém uma rede internacional de distribuidores em mais de 90 países pelo mundo.
            </p>
            <img src="assets/img/circle-3.png" alt="">
        </div>
        <div class="flex alignCenter justifycenter sobre-block-4 columnOnMobile">
            <img src="assets/img/circle-5.png" alt="">
            <p class="about-core-text black-text">
                A Sinclair possui duas plantas fabris na Europa, uma localizada em Lyon, na França, onde é produzida a linha Perfectha, e outra em Utrecht, nos Países Baixos, onde Ellansé é fabricado. Mantém ainda uma parceria no estado de Michigan, nos Estados Unidos, onde acontece a produção de Silhouette Soft.
            </p>
        </div>
        <div class="flex alignCenter justifycenter sobre-block-5 invertOnMobile">
            <p class="about-core-text black-text">
                Prezamos pelo desenvolvimento contínuo de nossos clientes, oferecendo um suporte excepcional à prática. Por meio de treinamentos presenciais e online, nos empenhamos para capacitar nossos profissionais de saúde de forma exemplar, para que excelentes resultados sejam proporcionados aos seus pacientes.
            </p>
            <img src="assets/img/circle-6.png" alt="">
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

</body>

</html>