<?php
$caminhoArquivos = "./";
$titlepage = "";
$description = '<meta charset="utf-8" name="description" content="">';
?>


<?php include_once "_includes/header.php" ?>
<aside>
  <h1>#1 Burger Menu</h1>
  <h4>inspired by</h4><h3>Google Material Design</h3>
</aside>
<input type="checkbox" id="menu-toggle"/>
  <label id="trigger" for="menu-toggle"></label>
  <label id="burger" for="menu-toggle"></label>
  <ul id="menu">
    <li><a href="#">Home</a></li>
    <li><a href="#">About</a></li>
    <li><a href="#">Portfolio</a></li>
    <li><a href="#">Contact</a></li>
  </ul>
<?php include_once "_includes/footer.php" ?>
