<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>
<div class="page-speakers-banner">
    <img src="assets/img/speakers.png" class="widthfull">
</div>

<div class="sectionStart speakers-intro">
    <div class="containerEighteen">
        <div class="intro">
            <h1>Speakers</h1>
            <p>Nosso time conta com especialistas altamente treinados que nos representam em diversos congressos e encontros mundo afora, compartilhando informações sobre tecnologias, modo de ação, procedimentos e novidades do segmento.</p>
        </div>
    </div>
</div>

<div class="speakers sectionStart">
    <div class="containerEighteen">
        <h3>Conheça quem são nossos speakers</h3>
        <div class="margin_1_top speakers-list row">
            <!-- SPEAKER ITEM -->
            <div class="speakers-item col s6 m4 l3 relative center-align modal-trigger" href="#modal">
                <div>
                    <img src="assets/img/person-1.png" alt="">
                    <span class="speakers-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
            <!-- FIM SPEAKER ITEM -->
            <!-- LIST DEMO -->
            <div class="speakers-item col s6 m4 l3 relative center-align modal-trigger" href="#modal">
                <div>
                    <img src="assets/img/person-2.png" alt="">
                    <span class="speakers-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
            <div class="speakers-item col s6 m4 l3 relative center-align modal-trigger" href="#modal">
                <div>
                    <img src="assets/img/person-3.png" alt="">
                    <span class="speakers-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
            <div class="speakers-item col s6 m4 l3 relative center-align modal-trigger" href="#modal">
                <div>
                    <img src="assets/img/person-4.png" alt="">
                    <span class="speakers-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
            <div class="speakers-item col s6 m4 l3 relative center-align modal-trigger" href="#modal">
                <div>
                    <img src="assets/img/person-2.png" alt="">
                    <span class="speakers-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
            <div class="speakers-item col s6 m4 l3 relative center-align modal-trigger" href="#modal">
                <div>
                    <img src="assets/img/person-1.png" alt="">
                    <span class="speakers-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
            <div class="speakers-item col s6 m4 l3 relative center-align modal-trigger" href="#modal">
                <div>
                    <img src="assets/img/person-4.png" alt="">
                    <span class="speakers-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
            <div class="speakers-item col s6 m4 l3 relative center-align modal-trigger" href="#modal">
                <div>
                    <img src="assets/img/person-3.png" alt="">
                    <span class="speakers-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
            <div class="speakers-item col s6 m4 l3 relative center-align modal-trigger" href="#modal">
                <div>
                    <img src="assets/img/person-1.png" alt="">
                    <span class="speakers-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="sectionStart speakers-prof center-align">
        <img src="assets/img/speakers-prof.png" alt="">
    </div>
</div>

<!-- Modal Structure -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="modal-close">x</span>
        <h4>Dra. Bianca Gastaldi</h4>
        <h5>Dermatologista</h5>
        <p>Graduada em Medicina pela Universidade Federal de Santa Catarina, especialista em Dermatologia pela Associação Médica Brasileira e pela Sociedade Brasileira de Dermatologia, é membro titular da Sociedade Brasileira de Dermatologia (SBD) e sócia efetiva da Sociedade Brasileira de Cirurgia Dermatológica (SBCD). É membro da American Academy of Dermatology (AAD) e da Sociedade Brasileira de Laser em Medicina e Cirurgia (SBLMC).</p>
        <div class="modal-redes margin_1_top">
            <a href="#">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
                <i class="fab fa-facebook"></i>
            </a>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

<!-- INICIALIZADOR SPEAKERS -->

<script>
    document.addEventListener("load", startSpeakers());
</script>
</body>

</html>