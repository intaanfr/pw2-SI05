<?php
/**
 * Task 1
 * Buatlah class Calculator 2 bilangan
 * Method: Pertambahan, Pengurangan, Pembagian dan Perkalian
 * Tampilkan masing-masing method dengan object
 */
    class Calculator {
        private $bil1;
        private $bil2;

    public function __construct($bil1,$bil2){
        $this->bil1=$bil1;
        $this->bil2=$bil2;
    }
    public function pertambahan(){
        return $this->bil1 + $this->bil2;
    }
    public function pengurangan(){
        return $this->bil1 - $this->bil2;
    }
    public function pembagian(){
        return $this->bil1 / $this->bil2;  
    }
    public function perkalian(){
        return $this->bil1 * $this->bil2;
    }
}

    // Buat object dan tampilkan masing-masing method
    $calculator1 = new Calculator(10, 5);
    $calculator2 = new Calculator(17, 8);
    $calculator3 = new Calculator(24, 12);
    $calculator4 = new Calculator(73, 38);

    echo "Hasil Penjumlahan:".$calculator1->pertambahan()."<br>";
    echo "Hasil Pengurangan:".$calculator2->pengurangan()."<br>";
    echo "Hasil Pembagian:".$calculator3->pembagian()."<br>";
    echo "Hasil Perkalian:".$calculator4->perkalian()."<br>";
?>