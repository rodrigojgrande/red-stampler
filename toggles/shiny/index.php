<?php
$caminhoArquivos = "./";
$titlepage = "";
$description = '<meta charset="utf-8" name="description" content="">';
?>

<?php include_once "_includes/header.php" ?>

<body>
   <div class="toggles">
      <div class="toggle-border">
         <input type="checkbox" id="one" />
         <label for="one">
            <div class="handle"></div>
         </label>
      </div>
      <div class="toggle-border">
         <input type="checkbox" id="two" checked />
         <label for="two">
            <div class="handle"></div>
         </label>
      </div>
   </div>
</body>

	<?php include_once "_includes/footer.php" ?>
