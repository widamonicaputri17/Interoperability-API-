<?php
// API(ID data yang akan dihapus)
$url = 'https://jsonplaceholder.typicode.com/posts/1';

$ch = curl_init();

// Set opsi untuk metode DELETE
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

// Hasil dikembalikan sebagai string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch); //eksekusi curl
curl_close($ch); //tutup curl
echo $response; //respon server
?>
