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
    <img src="assets/img/representantes.png" class="widthfull">
</div>

<div class="sectionStart representantes-intro">
    <div class="containerEighteen">
        <div class="intro">
            <h1>REPRESENTANTES</h1>
            <h2>Os representantes Sinclair Pharma são parte essencial do nosso negócio.</h2>
            <p>A equipe de representantes da Sinclair Pharma é composta por profissionais altamente qualificados para atender nossos clientes e levar informações completas sobre o nosso portfólio de produtos. Temos representantes ao redor de todo o Brasil.</p>
        </div>
    </div>
</div>
<div class="representantes">
    <div class="container">
        <div class="representantes-title">
            <h3>Quer encontrar o representante mais próximo de você?</h3>
        </div>
        <div class="sectionStart">
            <select class="browser-default">
                <option value="" disabled="" selected="">Veja todos os estados</option>
                <option value="Acre">Acre</option>
                <option value="Alagoas">Alagoas</option>
                <option value="Amapá">Amapá</option>
                <option value="Amazonas">Amazonas</option>
                <option value="Bahia">Bahia</option>
                <option value="Ceará">Ceará</option>
                <option value="Distrito Federal">Distrito Federal</option>
                <option value="Espírito Santo">Espírito Santo</option>
                <option value="Goiás">Goiás</option>
                <option value="Maranhão">Maranhão</option>
                <option value="Mato Grosso">Mato Grosso</option>
                <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                <option value="Minas">Minas Gerais</option>
                <option value="Pará">Pará</option>
                <option value="Paraíba">Paraíba</option>
                <option value="Paraná">Paraná</option>
                <option value="Pernambuco">Pernambuco</option>
                <option value="Piauí">Piauí</option>
                <option value="Rio de Janeiro">Rio de Janeiro</option>
                <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                <option value="Rondônia">Rondônia</option>
                <option value="Roraima">Roraima</option>
                <option value="Santa Catarina">Santa Catarina</option>
                <option value="São Paulo">São Paulo</option>
                <option value="Sergipe">Sergipe</option>
                <option value="Tocantins">Tocantins</option>
            </select>
        </div>
        <div class="margin_1_top representantes-list row">
            <!-- SPEAKER ITEM -->
            <div class="representantes-item col s6 m4 l3 relative center-align">
                <div>
                    <img src="assets/img/person-1.png" alt="">
                    <span class="representantes-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                    <div class="representantes-details ocultarDisplay">
                        <div>
                            <a target="_blank" rel="noopener noreferrer" href="tel:(19)  9 9294-6180">
                                (19) 9 9294-6180
                            </a>
                        </div>
                        <div>
                            <a target="_blank" rel="noopener noreferrer" href="mailto:wagner@wfprodutosmedicos.com.br">
                                wagner@wfprodutosmedicos.com.br
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIM SPEAKER ITEM -->
            <!-- LIST DEMO -->
            <div class="representantes-item col s6 m4 l3 relative center-align">
                <div>
                    <img src="assets/img/person-2.png" alt="">
                    <span class="representantes-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
            <div class="representantes-item col s6 m4 l3 relative center-align">
                <div>
                    <img src="assets/img/person-3.png" alt="">
                    <span class="representantes-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
            <div class="representantes-item col s6 m4 l3 relative center-align">
                <div>
                    <img src="assets/img/person-4.png" alt="">
                    <span class="representantes-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
            <div class="representantes-item col s6 m4 l3 relative center-align">
                <div>
                    <img src="assets/img/person-2.png" alt="">
                    <span class="representantes-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
            <div class="representantes-item col s6 m4 l3 relative center-align">
                <div>
                    <img src="assets/img/person-1.png" alt="">
                    <span class="representantes-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
            <div class="representantes-item col s6 m4 l3 relative center-align">
                <div>
                    <img src="assets/img/person-4.png" alt="">
                    <span class="representantes-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
            <div class="representantes-item col s6 m4 l3 relative center-align">
                <div>
                    <img src="assets/img/person-3.png" alt="">
                    <span class="representantes-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
            <div class="representantes-item col s6 m4 l3 relative center-align">
                <div>
                    <img src="assets/img/person-1.png" alt="">
                    <span class="representantes-plus">+</span>
                    <h3>Dr. Alieksiéi Correa Carrijo</h3>
                    <h4>Cirurgião plástico</h4>
                </div>
            </div>
        </div>
    </div>
</div>



<?php include 'footer.php'; ?>
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

<!-- INICIALIZADOR representantes -->
</body>

</html>