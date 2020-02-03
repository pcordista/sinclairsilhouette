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
    <img src="assets/img/testemonials.jpg" class="widthfull">
</div>

<div class="sectionStart representantes-intro faq icon-intro">
    <div class="containerEighteen">
        <div class="intro black-text">
            <h1>DEPOIMENTOS</h1>
            <P>Perfectha é qualidade francesa à sua disposição! </P>
            <P>Confira o <STRONG>depoimento</STRONG> de alguns de nossos pacientes: </P>

        </div>
    </div>
    <div class="find-selects-content">
        <div class="find-selects containerEighteen">
            <div class="row">
                <div class="col s12 m12 l10 offset-l1">
                    <div class="flex testemonials-slider ">
                        <div class="testemonials-item center-align">
                            <img src="assets/img/test-1.jpg" alt="">
                            <div class="margin_1_top"><strong>CHRISTINA</strong></div>
                            <div>48 anos</div>
                            <div class="margin_1_top test-text">
                                <P>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.”</P>
                            </div>
                            <div class="test-prod black">
                                <img src="assets/img/ellanse.png" alt="">
                            </div>
                        </div>
                        <div class="testemonials-item center-align">
                            <img src="assets/img/test-1.jpg" alt="">
                            <div class="margin_1_top"><strong>CHRISTINA</strong></div>
                            <div>48 anos</div>
                            <div class="margin_1_top test-text">
                                <iframe src="https://www.youtube.com/embed/RvPC5JN5ys0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" class="widthfull" allowfullscreen></iframe>
                            </div>
                            <div class="test-prod black">
                                <img src="assets/img/silhouette.png" alt="">
                            </div>
                        </div>
                        <div class="testemonials-item">
                            asdasda
                        </div>
                        <div class="testemonials-item">
                            asdasda
                        </div>
                        <div class="testemonials-item">
                            asdasda
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sectionStart representantes-intro faq">
    <div class="containerEighteen">
        <div class="intro black-text">
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
    document.addEventListener("load", startTestemonials());
</script>

</body>

</html>