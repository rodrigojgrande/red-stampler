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


<!-- particles.js container -->
<div id="particles-js">
    <h1 class="position-absolute text-center display-1" style="position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%)">ERRO 404</h1>
        <a class="position-absolute text-center btn bg-dark text-white" style="position: absolute;
        top: 70%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%)"
         href="index.php">Voltar</a>

</div>

<!-- scripts -->
<script src="particles.js"></script>
<script src="_js/app.js"></script>


