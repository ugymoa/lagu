<?php
  $tputar = $_GET['tputar'];
  $folder = $_GET['fld'];
  $file = $_GET['fle'].chr(46)."txt";
  $folderlengkap = $folder.DIRECTORY_SEPARATOR.$file;
  $text = $tputar;
  $handle=fopen($folderlengkap,"w");
  fwrite($handle,$text);

?>