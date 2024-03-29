<?php
$caminhoArquivos = "./";
$titlepage = "";
$description = '<meta charset="utf-8" name="description" content="">';
?>

<?php include_once "_includes/header.php" ?>

<div id="wrapper">
  <h1>Wicked CSS3 3d bar chart<small>now with animation</small></h1>
  <h2><a href="http://www.marcofolio.net/" title="Visit Marcofolio.net">Marcofolio.net</a></h2>
  <div id="content">
    <h2>Apple products</h2>
    <ul id="bar">
      <li id="iphone">
        <div class="top">
          <img src="images/iphone.png" alt="iPhone" />
        </div>
        <div class="bottom">
          <div class="infobox">
            <h3>iPhone</h3>
            <p>80,1</p>
          </div>
        </div>
      </li>
      <li id="macbook">
        <div class="top">
          <img src="images/macbook.png" alt="MacBook" />
        </div>
        <div class="bottom">
          <div class="infobox">
            <h3>MacBook</h3>
            <p>102,6</p>
          </div>
        </div>
      </li>
      <li id="ipod">
        <div class="top">
          <img src="images/ipod.png" alt="iPod" />
        </div>
        <div class="bottom">
          <div class="infobox">
            <h3>iPod</h3>
            <p>198,4</p>
          </div>
        </div>
      </li>
      <li id="cinema">
        <div class="top">
          <img src="images/cinema.png" alt="Cinema Display" />
        </div>
        <div class="bottom">
          <div class="infobox">
            <h3>Cinema&nbsp;Display</h3>
            <p>38,2</p>
          </div>
        </div>
      </li>
      <li id="macmini">
        <div class="top">
          <img src="images/macmini.png" alt="Mac Mini" />
        </div>
        <div class="bottom">
          <div class="infobox">
            <h3>Mac&nbsp;Mini</h3>
            <p>55,6</p>
          </div>
        </div>
      </li>
    </ul>
    <div id="apple">
      <img src="images/apple.png" alt="Apple Inc" />
      <p>Numbers in millions sold<br />*Numbers are fictional</p>
    </div>
  </div>
</div>

<?php include_once "_includes/footer.php" ?>
