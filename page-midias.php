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
    <img src="assets/img/midias.png" class="widthfull">
</div>

<div class="sectionStart representantes-intro">
    <div class="containerEighteen">
        <div class="intro">
            <h1>NA MÍDIA</h1>
            <br/>
            <h2>Artigos, matérias e novidades sobre a Sinclair Pharma, tudo aqui, selecionado para você.</h2>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

<!-- INICIALIZADOR representantes -->
</body>

</html>