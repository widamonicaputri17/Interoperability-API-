<?php
$url = 'https://jsonplaceholder.typicode.com/posts';

// Data yang akan dikirim (format array PHP)
$data = array(
    'title' => 'Wida Monica',
    'body' => 'Seseorang yang lahir di Banyuwangi pada bulan Januari',
    'userId' => 2
);

// Inisialisasi curl
$ch = curl_init();

// Opsi untuk metode POST dan kirim data
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

// Supaya hasil dikembalikan sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi curl
$response = curl_exec($ch);
// Tutup curl
curl_close($ch);
// Respon dari server
echo $response;

?>
