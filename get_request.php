<?php
$url = 'https://jsonplaceholder.typicode.com/posts';

// Inisialisasi curl
$ch = curl_init();

// Opsi curl untuk mengambil URL dengan metode GET
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi curl dan simpan respon
$response = curl_exec($ch);

// Tutup curl
curl_close($ch);

// Ubah respon JSON menjadi array PHP
$data = json_decode($response, true);

// Menampilkan 5 data pertama
$first_five = array_slice($data, 0, 5);
print_r($first_five);
?>
