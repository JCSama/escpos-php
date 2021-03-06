<?php
/* Example print-outs using the older bit image print command */
require_once(dirname(__FILE__) . "/../Escpos.php");
$printer = new Escpos();
$tux = new EscposImage("images/tux.png");

$printer -> text("These example images are printed with the older\nbit image print command. You should only use\n\$p -> bitImage() if \$p -> graphics() does not\nwork on your printer.\n\n");

$printer -> bitImage($tux);
$printer -> text("Regular Tux (bit image).\n");
$printer -> feed();

$printer -> bitImage($tux, Escpos::IMG_DOUBLE_WIDTH);
$printer -> text("Wide Tux (bit image).\n");
$printer -> feed();

$printer -> bitImage($tux, Escpos::IMG_DOUBLE_HEIGHT);
$printer -> text("Tall Tux (bit image).\n");
$printer -> feed();

$printer -> bitImage($tux, Escpos::IMG_DOUBLE_WIDTH | Escpos::IMG_DOUBLE_HEIGHT);
$printer -> text("Large Tux in correct proportion (bit image).\n");

$printer -> cut();
$printer -> close();
?>
