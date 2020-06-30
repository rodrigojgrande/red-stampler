<?php
$caminhoArquivos = "./";
$titlepage = "";
$description = '<meta charset="utf-8" name="description" content="">';
?>

<?php 

// Connection
include_once "_includes/db_connect.php";

?>

<?php include_once "_includes/header.php" ?>

<svg viewBox="0 0 960 300">
	<symbol id="s-text">
		<text text-anchor="middle" x="50%" y="80%">404</text>
	</symbol>

	<g class = "g-ants">
		<use xlink:href="#s-text" class="text"></use>
		<use xlink:href="#s-text" class="text"></use>
		<use xlink:href="#s-text" class="text"></use>
		<use xlink:href="#s-text" class="text"></use>
		<use xlink:href="#s-text" class="text"></use>
	</g>
</svg>
    <div class="content"> 
    <h1>Page Not Found</h1>
    <a href="#">Back to Home</a>
    </div>
