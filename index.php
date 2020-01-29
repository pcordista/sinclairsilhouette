<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>

<div class="home-slider-content relative">
    <div class="home-slider relative">
        <div class="home-slider-item relative">
            <img src="assets/img/homeSliderOne.jpg" class="widthfull">
        </div>
        <div class="home-slider-item relative">
            <img src="assets/img/homeSliderTwo.jpg" class="widthfull">
        </div>

    </div>
</div>

<div class="home-intro hide-on-med-and-down">
    <img src="assets/img/intro.jpg" class="widthfull">
    <div class="container">
        <div class="home-intro-one black-text">
            <h4>
                SILHOUETTE SOFT TEM TECNOLOGIA EXCLUSIVA E INOVADORA:</h4>
            <strong>Único fio de sustentação com cones</strong> do mundo, totalmente absorvível e composto por ácido polilático, o que proporciona a <strong>regeneração do colágeno</strong> da pele de forma gradual e natural.
        </div>
        <div class="home-intro-two black-text">
            A estrutura 3D dos cones oferece maior <strong>poder de sustentação</strong> e alta eficiência no <strong>reposicionamento dos tecidos</strong> para uma aparência mais jovem e aspecto natural.
            <BR>
            Silhouette Soft atenua rugas e linhas de expressão
            em um procedimento minimante invasivo que
            leva aproximadamente 30 minutos.
        </div>
    </div>
</div>

<div class="home-products">
    <div class="title">
    <strong>Silhouette Soft</strong>: ideal para pessoas que buscam<BR>
uma verdadeira conexão com a autoestima.
    </div>
</div>

<div class="produto-2">
    <div class="title">
        Silhoutte Soft® • Reshape Plus
    </div>
    <div class="slider-home">
        <div><img src="assets/img/sliderOne.jpg" alt="" class="widthfull"></div>
        <div><img src="assets/img/sliderTwo.jpg" alt="" class="widthfull"></div>
    </div>
</div>


<div class="split-screen-content">
    <div class="containerEighteen">
        <div>
            <div class="center-align margin_1_vert">
                Confira o <strong>antes e depois</strong> das pacientes
            </div>
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
            <div class="margin_2_top row">
                <a href="#" class="see-more textUpper white-text center-align">
                    veja mais resultados
                </a>
            </div>
        </div>
    </div>
</div>

<div class="search">
    <img src="assets/img/search-profs.png" alt="">
    <div class="full_absolute flex alignCenter">
        <div class="center">
            <h4>Encontre um profissional especializado</h4>
            <div class="margin_2_top">
                <a href="#" class="textUpper">
                    clique aqui
                </a>
            </div>
        </div>
    </div>
</div>






<?php include 'footer.php'; ?>
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

<!-- INICIALIZADOR HOME -->

<script>
    document.addEventListener("load", startHome());
    document.addEventListener("load", startSplit());
</script>

</body>

</html>