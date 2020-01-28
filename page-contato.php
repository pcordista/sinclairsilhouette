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
    <img src="assets/img/contato.jpg" class="widthfull">
</div>

<div class="sectionStart representantes-intro faq">
    <div class="containerEighteen">
        <div class="intro black-text">
            <h1>CONTATO</h1>
            <P>Você tem alguma dúvida, crítica ou sugestão? </P>
            <P>Entre em contato com a gente!</P>

        </div>
    </div>
    <div class="">
        <div class="find-selects containerEighteen">
            <div class="row">
                <div class="col s12 m12 l10 offset-l1">
                    teste
                </div>
            </div>
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
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

<!-- INICIALIZADOR HOME -->

<script>
</script>

</body>

</html>