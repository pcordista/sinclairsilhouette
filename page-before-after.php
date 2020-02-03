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

<div class="sectionStart representantes-intro faq icon-intro">
    <div class="containerEighteen">
        <div class="intro black-text">
            <h1>antes e depois</h1>
            <h4 style="font-weight: 400">Pacientes reais resultados sensacionais.</h4>
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
                    <div>
                        <img src="assets/img/face.png" alt="">
                    </div>
                    <div class="title">
                        <div><strong class="textUpper">valerie</strong></div>
                        <div>48 anos</div>
                        <div class="margin_1_top">
                            Terço médio e Linha da Mandíbula
                        </div>
                    </div>
                    <img src="assets/img/silhouette.png" alt="">
                </div>
            </div>
            <div>
                <div class="split-screen twentytwenty-container row">
                    <img src="assets/img/split-before.jpg" class="widthfull" />
                    <img src="assets/img/split-after.jpg" class="widthfull" />
                </div>
                <div class="row black white-text before-after relative">
                    <div>
                        <img src="assets/img/face.png" alt="">
                    </div>
                    <div class="title">
                        <div><strong class="textUpper">valerie</strong></div>
                        <div>48 anos</div>
                        <div class="margin_1_top">
                            Terço médio e Linha da Mandíbula
                        </div>
                    </div>
                    <img src="assets/img/silhouette.png" alt="">
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