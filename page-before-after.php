<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<div class="page-representantes-banner">
    <img src="assets/img/banner-ba.jpg" class="widthfull">
</div>

<div class="sectionStart representantes-intro faq">
    <div class="containerEighteen">
        <div class="intro black-text">
            <h1>Pacientes reais. Resultados reais.</h1>
            <P>Confira o <strong>antes e depois</strong> do procedimento com Ellansé!</P>
        </div>
    </div>
    <div class="find-selects-content">
        <div class="before-after-page containerEighteen split-slider">
            <div>
                <div class="split-screen twentytwenty-container row">
                    <img src="assets/img/split-before.jpg" class="widthfull" />
                    <img src="assets/img/split-after.jpg" class="widthfull" />
                </div>
                <div class="row black white-text before-after relative">
                    <div class="col s12 m12 l6 title">
                        <div class="center-align"><strong class="textUpper bold">valerie</strong></div>
                        <div class="margin_1_top  textUpper content">
                            <div class="colorYellow bold">
                                sinais de envelhecimento
                            </div>
                            <div>Flacidez Facil</div>
                            <div>linhas e rugas profundas no rosto</div>
                            <div>linhas mandibular sem contorno e definição</div>
                        </div>
                    </div>
                    <div class="col s12 m12 l6 links">
                        <div class="">
                            <a href="#" class="cta">
                                Sabine após 24 meses
                            </a>
                        </div>
                        <div class="margin_1_top  textUpper content">
                            <div class="colorYellow bold">
                                ANTES ELLANSÉ®
                            </div>
                            <div>Sulcos nasolabiais suavizados</div>
                            <div>Redefinição da linha mandibular</div>
                            <div>Aumento de volume nas maçãs do rosto e região temporal</div>
                        </div>
                    </div>
                    <img src="assets/img/ellanse.png" alt="">
                </div>
            </div>
            <div>
                <div class="split-screen twentytwenty-container row">
                    <img src="assets/img/split-before.jpg" class="widthfull" />
                    <img src="assets/img/split-after.jpg" class="widthfull" />
                </div>
                <div class="row black white-text before-after relative">
                    <div class="col s12 m12 l6 title">
                        <div class="center-align"><strong class="textUpper bold">valerie</strong></div>
                        <div class="margin_1_top  textUpper content">
                            <div class="colorYellow bold">
                                sinais de envelhecimento
                            </div>
                            <div>Flacidez Facil</div>
                            <div>linhas e rugas profundas no rosto</div>
                            <div>linhas mandibular sem contorno e definição</div>
                        </div>
                    </div>
                    <div class="col s12 m12 l6 links">
                        <div class="">
                            <a href="#" class="cta">
                                Sabine após 24 meses
                            </a>
                        </div>
                        <div class="margin_1_top  textUpper content">
                            <div class="colorYellow bold">
                                ANTES ELLANSÉ®
                            </div>
                            <div>Sulcos nasolabiais suavizados</div>
                            <div>Redefinição da linha mandibular</div>
                            <div>Aumento de volume nas maçãs do rosto e região temporal</div>
                        </div>
                    </div>
                    <img src="assets/img/ellanse.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sectionStart speakers-prof search center-align">
    <img src="assets/img/remedios.png" alt="">
</div>





<?php include 'footer.php'; ?>
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

<!-- INICIALIZADOR HOME -->

<script>
    document.addEventListener("load", startSplit());
</script>

</body>

</html>