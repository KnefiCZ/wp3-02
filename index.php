
<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ay:-)</title>
  </head>
  <style>
    #bar {
      display:inline-block;
      height:10px;
      width: 100px;
      border: 1px solid black;
    }
  </style>
  <body>
    <?php
  $nervy = 0;

    echo "Jsem v chillu <:) mám : " . $nervy . " nervů.. O:) <br>";
  while ($nervy < 100) {
    $otazky = rand(0,10);
    if  (($nervy + $otazky) >= 100) {
        $otazky= 100 - $nervy;
      }
    $nervy += $otazky;

 ?>
  <p> >:(((((( JSEM NERVNI O : <?php echo $otazky; ?> % <?php echo $nervy; ?> >:C</p>
  <div id="bar">
    <div style="display: block; width:<?php echo $nervy; ?>px; height: 10px; background-color: red;">
  </div>

  <?php } ?>
  </body>
  </html>
