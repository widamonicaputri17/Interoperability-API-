SOAL 1 : Konsumsi Data dengan GET Request
- Gunakan kode di atas untuk mengambil daftar post dari https://jsonplaceholder.typicode.com/posts.
- Tampilkan 5 data pertama dalam bentuk array PHP.
  ![Screenshot 2024-10-04 204246](https://github.com/user-attachments/assets/845b5c4d-b10f-4ce6-82b6-12eb2e290156)
PENJELASAN :
Inisialisasi cURL :
curl_init()
Opsi cURL :
curl_setopt($ch, CURLOPT_URL, $url)mengatur target URL untuk melakukan permintaan GET.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true)memastikan permintaan disimpan sebagai string, bukan hasil langsung ditampilkan.
Eksekusi Permintaan :
curl_exec($ch)mengirimkan permintaan GET ke API dan menyimpan hasilnya dalam variabel $response.
Menutup cURL :
curl_close($ch)
Mengubah JSON ke Array :
json_decode($response, true)mengubah data yang diterima dari format JSON menjadi array asosiatif PHP.
Menampilkan 5 Data Pertama :
array_slice($data, 0, 5)
Angka 0 menunjukkan indeks awal dari array yang ingin diambil (yaitu elemen pertama).
Angka 5 menunjukkan jumlah elemen yang akan diambil dari array, yaitu 5 elemen pertama.
print_r($first_five)menampilkan hasil array
HASIL SOAL 1 :
![Screenshot 2024-10-04 210208](https://github.com/user-attachments/assets/b64911ca-4051-4e4f-9885-ca89b7174b76)


SOAL 2. Mengirim Data dengan POST Request
- Gunakan kode POST di atas untuk mengirim data baru ke API yang sama.
- Ganti isi body dengan data lain yang relevan (misalnya judul dan konten berbeda).
![Screenshot 2024-10-04 210410](https://github.com/user-attachments/assets/32cf829c-5ca4-4a8f-8407-36c808d69a73)
PENJELASAN :
Data yang Akan Dikirim :
Array $data berisi title, body, dan userId.
Inisialisasi cURL :
curl_init()
Opsi cURL :
curl_setopt($ch, CURLOPT_URL, $url) mengatur URL untuk permintaan POST.
curl_setopt($ch, CURLOPT_POST, 1) tentukan bahwa metode yang digunakan adalah POST.
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data)) mengubah array PHP menjadi format JSON untuk dikirim sebagai data POST.
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')) menetapkan header Content-Typeke application/json, yang menunjukkan bahwa data yang dikirim adalah dalam format JSON.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) memastikan bahwa hasil dari permintaan akan disimpan sebagai string
Eksekusi Permintaan :
curl_exec($ch)mengirimkan permintaan POST ke server dan menyimpan responnya dalam variabel $response.
Menutup cURL :
curl_close($ch)
echo $response menampilkan hasil yang dikembalikan oleh server setelah permintaan POST dilakukan.
HASIL SOAL 2 :
![Screenshot 2024-10-04 211016](https://github.com/user-attachments/assets/b09f73bf-ca9f-4e01-819a-114f16ed69e2)


SOAL 3. Menghapus Data dengan DELETE Request
- Gunakan kode DELETE untuk menghapus salah satu post dari API.
- Tampilkan respon yang dikembalikan dari API setelah permintaan DELETE berhasil.
![Screenshot 2024-10-04 211053](https://github.com/user-attachments/assets/2499a265-e59a-446f-8ac6-46d063b7d7da)
PENJELASAN :
URL API:
Variabel $url diatur ke endpoint API (https://jsonplaceholder.typicode.com/posts/1)  ID 1, yang ingin dihapus.
Inisialisasi cURL:
curl_init()
Opsi cURL:
curl_setopt($ch, CURLOPT_URL, $url) mengatur URL yang akan digunakan untuk permintaan DELETE.
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE") menentukan bahwa metode yang digunakan adalah DELETE.
Mengatur Respons:
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true) memastikan bahwa hasil dari permintaan akan disimpan sebagai string
Eksekusi Permintaan:
curl_exec($ch) mengirimkan permintaan DELETE ke server dan menyimpan responsnya dalam variabel $response.
Menutup cURL:
curl_close($ch) 
Menampilkan Respon:
echo $response menampilkan hasil yang dikembalikan oleh server setelah permintaan DELETE dilakukan. Biasanya, respons ini akan kosong atau menunjukkan bahwa penghapusan berhasil.
HASIL SOAL 3 :
![Screenshot 2024-10-04 212312](https://github.com/user-attachments/assets/150c6f1c-4c32-4ed5-a864-88a8ec55b23e)


SOAL 4. Analisis Metode HTTP
- Jelaskan perbedaan antara metode GET, POST, dan DELETE.
- Diskusikan skenario kapan harus menggunakan masing-masing metode dalam aplikasi nyata.
......
  PERBEDAAN GET,POST,DELETE :

  
-GET :
Fungsi: Metode ini digunakan untuk mengambil atau membaca data dari server.Permintaan GET yang sama bisa dilakukan berulang kali tanpa mempengaruhi data di server.
Contoh Penggunaan: Mendapatkan daftar artikel, produk, atau data pengguna dari server.
Contoh Kode:
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


-POST:
Fungsi: Metode POST digunakan untuk mengirim data ke server, biasanya untuk membuat atau menambahkan data baru.  setiap kali dilakukan, akan menambahkan data baru ke server.
Contoh Penggunaan: Menambah artikel baru, mengirim form registrasi, atau mengirimkan data transaksi.
Contoh Kode:
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));


-DELETE:
Fungsi: Metode ini digunakan untuk menghapus data dari server. Seperti GET, DELETE juga idempotent karena penghapusan item yang sama berulang kali hanya akan memberikan respons yang sama (misalnya, data telah dihapus).
Contoh Penggunaan: Menghapus pengguna, menghapus postingan, atau menghapus transaksi dari sistem.
Contoh Kode:
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


Skenario Penggunaan Masing-masing Metode dalam Aplikasi Nyata:

-GET:
Skenario: menjalankan aplikasi e-commerce, dan pengguna ingin melihat daftar produk di halaman utama atau melakukan pencarian produk berdasarkan kategori.
Kapan Menggunakan: Gunakan GET untuk mengambil data dari database seperti daftar produk, informasi detail produk, atau ulasan pengguna tanpa melakukan perubahan pada server.

-POST:
Skenario: Pengguna melakukan checkout di aplikasi e-commerce dan ingin mengirimkan informasi pesanan mereka, seperti alamat pengiriman, metode pembayaran, dan daftar produk yang dibeli.
Kapan Menggunakan: POST digunakan ketika aplikasi perlu mengirimkan data baru ke server untuk ditambahkan ke database, seperti membuat pesanan baru, registrasi pengguna, atau mengisi formulir kontak.

-DELETE:
Skenario: Di aplikasi media sosial, pengguna ingin menghapus postingan yang mereka buat karena sudah tidak relevan atau ada kesalahan dalam kontennya.
Kapan Menggunakan: Gunakan DELETE ketika aplikasi perlu menghapus data dari server, seperti menghapus akun pengguna, menghapus komentar, atau membatalkan pesanan.

Kesimpulan:
GET digunakan untuk mengambil data.
POST digunakan untuk mengirim dan membuat data baru.
DELETE digunakan untuk menghapus data.

