<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>
<div class="perfectha-pages">
    <?php include 'menu.php'; ?>
    <div class="page-representantes-banner">
        <img src="assets/img/banner-perfectha.jpg" class="widthfull">
    </div>

    <div class="sectionStart bolinhas icon-intro representantes-intro faq">
        <div class="containerEighteen">
            <div class="intro">
                <h1>PERGUNTAS FREQUENTES</h1>
                <BR>
                <p>É normal que algumas dúvidas surjam em relação ao procedimento com Silhouette Soft. E estamos aqui para esclarecê-las! Confira as mais comuns: </p>
            </div>
            <div class="margin_1_top faq-row">
                <div class="col s12 m3 l3 faq-filter white-text">
                    <span class="title">
                        por categorias
                    </span>
                    <div class="margin_1_top filter">
                        <a href="#">
                            TODAS AS PERGUNTAS
                        </a>
                    </div>
                    <div class="margin_2_top">
                        <div>
                            <a href="#">
                                Elliansé
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                Perfectha
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                Silhouette Soft
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m9 l9">
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header">
                                <span>// 1</span>
                                Como me preparo para o tratamento?
                            </div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <span>// 2</span>
                                Como me preparo para o tratamento?
                            </div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <span>// 3</span>
                                Como me preparo para o tratamento?
                            </div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <span>// 3</span>
                                Como me preparo para o tratamento?
                            </div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <span>// 3</span>
                                Como me preparo para o tratamento?
                            </div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                        <li>
                            <div class="collapsible-header">
                                <span>// 3</span>
                                Como me preparo para o tratamento?
                            </div>
                            <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="margin_2_top center">
                <ul class="pagination">
                    <li class="disabled"><a href="#!"><i class="material-icons">arrow_back</i></a></li>
                    <li class="active"><a href="#!">1</a></li>
                    <li class="waves-effect"><a href="#!">2</a></li>
                    <li class="waves-effect"><a href="#!">3</a></li>
                    <li class="waves-effect"><a href="#!">4</a></li>
                    <li class="waves-effect"><a href="#!">5</a></li>
                    <li class="waves-effect"><a href="#!"><i class="material-icons">arrow_forward</i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contacts flex justifycenter">
        <div>
            <strong>Sinclair Pharma Brazil</strong><BR>
            Av. Queiroz Filho, Torre Gaivota 1.560<BR>
            Sala 205 - Vila Hamburguesa<BR>
            CEP 05319-000 - São Paulo - SP - Brasil<BR>
            Telefone: +55 11 3641- 4447<BR>
            <a href="#">
            veja no maps
            </a>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</div>




<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

<!-- INICIALIZADOR representantes -->
<script>
    document.addEventListener("load", startPerfecthaFAQ());
</script>
</body>

</html>