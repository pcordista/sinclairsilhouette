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
    <img src="assets/img/find.jpg" class="widthfull">
</div>

<div class="sectionStart representantes-intro faq">
    <div class="containerEighteen">
        <div class="intro black-text">
            <h1>Restaure naturalmente as formas
                <BR>que o tempo apagou!</h1>
            <h2>Encontre o <strong>profissional especializado</strong> mais perto de você!</h2>
        </div>
        <div class="find-selects">
            <div class="row">
                <div class="col s12 m12 l10 offset-l1">
                    <div class="col s12 m5 l5">
                        <select class="browser-default textUpper">
                            <option value="" disabled selected>Selecione o estado</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                    <div class="col s12 m5 offset-m2 l5 offset-l2">
                        <select class="browser-default textUpper">
                            <option value="" disabled selected>Cidade</option>
                            <option value="1">Option 1</option>
                            <option value="2">Option 2</option>
                            <option value="3">Option 3</option>
                        </select>
                    </div>
                    <div class="col s12 right-align margin_2_top button">
                        <a class="modal-trigger" href="#modal">buscar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sectionStart center-align">
    <img src="assets/img/brasil.jpg" class="widthfull">
</div>



<!-- Modal Structure -->
<div id="modal" class="modal">
    <div class="modal-content">
        <span class="modal-close">x</span>
        <h4 class="textUpper">
            especialistas encontrados
        </h4>
        <div class="profs-list">
            <div class="profs-item">
                <div>
                    ADA TRINDADE DE ALMEIDA
                </div>
                <div>
                    RUA BLA BLA BLA, 300 - PERDIZES
                </div>
                <div>
                    SÃO PAULO/SP
                </div>
            </div>
            <div class="profs-item">
                <div>
                    ADA TRINDADE DE ALMEIDA
                </div>
                <div>
                    RUA BLA BLA BLA, 300 - PERDIZES
                </div>
                <div>
                    SÃO PAULO/SP
                </div>
            </div>
            <div class="profs-item">
                <div>
                    ADA TRINDADE DE ALMEIDA
                </div>
                <div>
                    RUA BLA BLA BLA, 300 - PERDIZES
                </div>
                <div>
                    SÃO PAULO/SP
                </div>
            </div>
            <div class="profs-item">
                <div>
                    ADA TRINDADE DE ALMEIDA
                </div>
                <div>
                    RUA BLA BLA BLA, 300 - PERDIZES
                </div>
                <div>
                    SÃO PAULO/SP
                </div>
            </div>
            <div class="profs-item">
                <div>
                    ADA TRINDADE DE ALMEIDA
                </div>
                <div>
                    RUA BLA BLA BLA, 300 - PERDIZES
                </div>
                <div>
                    SÃO PAULO/SP
                </div>
            </div>
            <div class="profs-item">
                <div>
                    ADA TRINDADE DE ALMEIDA
                </div>
                <div>
                    RUA BLA BLA BLA, 300 - PERDIZES
                </div>
                <div>
                    SÃO PAULO/SP
                </div>
            </div>
            <div class="profs-item">
                <div>
                    ADA TRINDADE DE ALMEIDA
                </div>
                <div>
                    RUA BLA BLA BLA, 300 - PERDIZES
                </div>
                <div>
                    SÃO PAULO/SP
                </div>
            </div>
            <div class="profs-item">
                <div>
                    ADA TRINDADE DE ALMEIDA
                </div>
                <div>
                    RUA BLA BLA BLA, 300 - PERDIZES
                </div>
                <div>
                    SÃO PAULO/SP
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

<!-- INICIALIZADOR HOME -->

<script>
    document.addEventListener("load", startSpeakers());
</script>

</body>

</html>