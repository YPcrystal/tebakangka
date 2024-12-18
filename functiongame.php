<?php
//fungsi untuk menyimpan statistik game
function saveGameStats($attempts) {
    $file = 'game_stats.txt';

    // cek file jika tidak ada, buat file baru
    if (!file_exists($file)) {
        // membuat file dengan tulisan pertama kali
        file_put_contents($file, "Statistik Game :\n");
    } 
    $data = "Percobaan : $attempts\n";
    file_put_contents($file, $data, FILE_APPEND);
    echo "Menyimpan Statistik game dengan $attempts percobaan.\n";
}

// fungsi menampilkan statistik game
function displayGameStats() {
    $file = 'game_stats.txt';

    // mengecek apakah file ada
    if (file_exists($file)) {
        // baca data dari file
        $data = file_get_contents($file);
        echo "Statistik game:\n";
        echo $data; //menampilkan isi file
    } else {
        echo "Tidak ada statistik game yang tersedia.\n";
    }
}