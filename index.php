<?php

require_once ('./luaslingkaran constructor&destructor.php'); // Memanggil file kelas LuasLingkaran

use App\Math\LuasLingkaran; // Menggunakan namespace dan kelas LuasLingkaran

$Lingkaran = new LuasLingkaran(10);
$Lingkaran->tampil('ban'); // Memanggil metode tampil dari objek $Lingkaran
LuasLingkaran::testing();