<?php
function prediksiBilangan($deret) {
    // Contoh sederhana: mencari selisih antar bilangan
    $selisih = [];
    for ($i = 1; $i < count($deret); $i++) {
        $selisih[] = $deret[$i] - $deret[$i-1];
    }

    // Cek apakah selisih konstan
    $selisihKonstan = true;
    for ($i = 1; $i < count($selisih); $i++) {
        if ($selisih[$i] != $selisih[0]) {
            $selisihKonstan = false;
            break;
        }
    }

    if ($selisihKonstan) {
        $bilanganBerikutnya = $deret[count($deret)-1] + $selisih[0];
        return $bilanganBerikutnya;
    } else {
        // TODO: Tambahkan logika untuk pola yang lebih kompleks
        return "Pola tidak ditemukan";
    }
}

// Contoh penggunaan
$deret1 = [4, 6, 9, 13, 18];
$deret2 = [2, 2, 3, 3, 4];
$deret3 = [1, 9, 2, 10, 3];

echo "Deret 1: " . prediksiBilangan($deret1) . "\n";
echo "Deret 2: " . prediksiBilangan($deret2) . "\n";
echo "Deret 3: " . prediksiBilangan($deret3) . "\n";