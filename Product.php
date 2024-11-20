<?php

class Product {
    protected $name;
    protected $price;
    protected $stock;

    function __construct($name, $price, $stock) {
        $this->name = $name;
        $this->price = $price;
        $this->stock = $stock;
    }

    function showInformation() {
        echo "nama: " . $this->name . ", harga:" . $this->price . ", stock:" . $this->stock . "<br>\n";
    }
}

class ProductElectronic extends Product {
    function calculateDiscount() {
        return $this->price * 0.5; // Diskon 50% untuk elektronik
    }

    function showInformation() {
        parent::showInformation();
        echo "harga setelah diskon:" . $this->calculateDiscount() . "<br>\n<br>\n";
    }
}

class ProductFashion extends Product {
    function calculateDiscount() {
        return $this->price - ($this->price * 0.7); // Diskon 70% untuk fashion
    }

    function showInformation() {
        parent::showInformation();
        echo "harga setelah diskon:" . $this->calculateDiscount() . "<br>\n<br>\n";
    }
}

?>
