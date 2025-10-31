<?php

namespace App\Math;

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function __construct($IsiJari = 1){
        $this->jari = $IsiJari;
    }

    public function tampil($nama = 'ban') {
    $rumus = LuasLingkaran:: phi * $this->jari * $this->jari;
    echo "Lingkaran {$nama} Hasilnya adalah: {$rumus}";
}
 public static function testing() {
    echo "<br/>";
    echo "Ini dari static";
 }

 public function __destruct() {
    echo "<br/>";
    echo "malasnyo";
 }
} 
