<?php

require_once 'Product.php';

// Membuat objek
$keyboard = new ProductElectronic("Keyboard", 5000, 10);
$sepatu = new ProductFashion("Sepatu", 1000, 30);

// Menampilkan informasi 
$keyboard->showInformation();
$sepatu->showInformation();

?>
