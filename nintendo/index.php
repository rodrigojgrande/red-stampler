<?php
$caminhoArquivos = "./";
$titlepage = "";
$description = '<meta charset="utf-8" name="description" content="">';
?>

<?php include_once "_includes/header.php" ?>

   
<input type="radio" name="nes-size" id="size1">
<label for="size1" class="size1" ></label>
<input type="radio" name="nes-size" id="size2">
<label for="size2" class="size2"></label>
<input type="radio" name="nes-size" id="size3" checked>
<label for="size3" class="size3"></label>
<input type="radio" name="nes-size" id="size4">
<label for="size4" class="size4"></label>

<div id="nes">
  <div class="nes-top"> 
    <div class="lid">
            <h1>Nintendo</h1>
            <h2>ENTERTAINMENT SYSTEM</h2>
        </div>
        <div class="cartridge-slot">
          <div class="cartridge-slot-border">          
          </div>
          <div class="cartridge-slot-hole"></div>
        </div>
   </div>
  <div class="nes-bottom">
    <div class="power-box">
      <input type="checkbox" id="power" />
      <div class="reset"></div>
      <label for="power" class="power"></label>     
      <div class="light"></div>
     
    </div>
  </div>
  <div class="gamepads-slots">
    <div class="gamepad-slot p1"></div>
    <div class="gamepad-slot p2"></div>
  </div>
</div>

	<?php include_once "_includes/footer.php" ?>
