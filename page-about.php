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
    <img src="assets/img/about.jpg" class="">
</div>
<div class="about-intro white-text">
    <div class="containerEighteen textUpper">
        <div class="wrapper-apoio">
            <span class="small apoio">sobre</span>
            <h1>A Sinclair tem o compromisso de oferecer os melhores resultados para os seus pacientes.</h1>
            <P>E fazemos isso por meio de qualidade e experiência comprovadas, que podem ser vistas em todo o nosso portfólio de produtos, incluindo toda a linha Perfectha.</P>
        </div>
    </div>
</div>
<div class="about-core relative">
    <img src="assets/img/center-orchester.png" alt="" class="about-core-bg hide-on-med-and-down">
    <div class="container">
        <div class="flex alignCenter sobre-block-1 columnOnMobile">
            <img src="assets/img/circle-1.png" alt="">
            <p class="about-core-text">
                Nossa história começa lá atrás, ainda nos anos 70, em pleno Reino Unido. Crescemos, nos modernizamos e ganhamos a confiança de quem mais importa pra gente: você!
            </p>
        </div>
        <div class="flex alignCenter sobre-block-2 columnOnMobile">
            <img src="assets/img/circle-2.png" alt="">
            <p class="about-core-text black-text">
                Essa experiência internacional, somada a uma forte ênfase em segurança, qualidade e na qualificação de nossos profissionais fez com que criássemos uma poderosa relação com distribuidores de mercados emergentes, incluindo China e Brasil.
            </p>
        </div>
        <div class="flex alignCenter sobre-block-3 invertOnMobile">
            <p class="about-core-text black-text">
                Somos apaixonados pelo que fazemos e estamos em constante inovação, buscando as últimas tendências do mercado para que possamos obter os melhores resultados e, claro, revolucionar cada vez mais!
            </p>
            <img src="assets/img/circle-3.png" alt="">
        </div>
        <div class="flex alignCenter sobre-block-6 invertOnMobile">
            <p class="about-core-text black-text">
                Com operações na França, Alemanha, Espanha, Brasil, Inglaterra e Coreia, a Sinclair Pharma mantém uma rede internacional de distribuidores em mais de 90 países pelo mundo.
            </p>
            <img src="assets/img/circle-4.png" alt="">
        </div>
        <div class="flex alignCenter justifycenter sobre-block-4 columnOnMobile">
            <img src="assets/img/circle-5.png" alt="">
            <p class="about-core-text black-text">
                A Sinclair possui duas plantas fabris na Europa, uma localizada em Lyon, na França, onde é produzida a linha Perfectha, e outra em Utrecht, nos Países Baixos, onde Ellansé é fabricado. Mantém ainda uma parceria no estado de Michigan, nos Estados Unidos, onde acontece a produção de Silhouette Soft.
            </p>
        </div>
        <div class="flex alignCenter justifycenter sobre-block-5 invertOnMobile">
            <p class="about-core-text black-text">
            Atualmente, estamos presentes em mais de 90 países, levando a beleza  para o mundo. Temos duas plantas fabris na Europa, uma em Lyon, na França, onde é produzida a linha Perfectha, formada por preenchedores bifásicos  de ácido hialurônico, e outra em Utrecht, nos Países Baixos, onde produzimos toda a linha Ellansé, que consiste em preenchedores e bioestimuladores  de colágeno de última geração. Estamos também em Michigan,  nos Estados Unidos, onde acontece a produção de Silhouette Soft, único fio de sustentação com cones do mundo, composto por ácido polilático.
            </p>
            <img src="assets/img/circle-6.png" alt="">
        </div>
        <div class="flex alignCenter justifycenter sobre-block-4 columnOnMobile">
            <img src="assets/img/circle-5.png" alt="">
            <p class="about-core-text black-text">
                A Sinclair possui duas plantas fabris na Europa, uma localizada em Lyon, na França, onde é produzida a linha Perfectha, e outra em Utrecht, nos Países Baixos, onde Ellansé é fabricado. Mantém ainda uma parceria no estado de Michigan, nos Estados Unidos, onde acontece a produção de Silhouette Soft.
            </p>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

</body>

</html>