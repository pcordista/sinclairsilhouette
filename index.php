<?php
$file = basename($_SERVER['PHP_SELF']); // your file name 
$last_modified_time = filemtime($file);
$etag = md5_file($file);

header("Last-Modified: " . gmdate("D, d M Y H:i:s", $last_modified_time) . " GMT");
header("Etag: $etag");
?>

<?php include 'header.php'; ?>
<?php include 'menu.php'; ?>


<?php include 'components/content-home-slider.php'; ?>
<?php include 'components/content-home-intro.php'; ?>
<?php include 'components/content-home-products.php'; ?>
<?php include 'components/content-home-move.php'; ?>




<?php include 'footer.php'; ?>
<?php include 'assets/js/JS_includes.php'; ?>
<script src="assets/devlop/live.js"></script>

<!-- INICIALIZADOR HOME -->

<script>
document.addEventListener("load", startHome());
</script>

</body>

</html>