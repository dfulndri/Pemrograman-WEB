# COMMAND 
- `docker compose up -d --build` Menjalankan Docker Compose, membangun ulang image, dan menjalankan kontainer di background.
- `docker exec -it pemweb bash`	Masuk ke dalam kontainer pemweb dengan mode bash (seperti terminal di dalam Docker).
- `composer create-project --prefer-dist raugadh/fila-starter .` Membuat project Laravel baru menggunakan starter template raugadh/fila-starter.
- `rm -rf *`	Menghapus semua file dan folder di direktori aktif.
- `rm -rf .*`	Menghapus semua file tersembunyi (dotfiles) di direktori aktif (hati-hati, ini ekstrim).
- `chown -R www-data:www-data storage/*`	Mengubah hak kepemilikan folder storage/* menjadi www-data (user yang biasanya dipakai webserver).

# EDIT `.env`
APP_NAME="PemWeb"
APP_ENV=local
APP_KEY=base64:d7VX+QZ1eHJu+uh7Xa/ojRrzlLrKBufCx8TGa8/5lzk=
APP_DEBUG=true
APP_TIMEZONE='Asia/Jakarta'
APP_URL=http://localhost
ASSET_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=db_pemweb
DB_PORT=3306
DB_DATABASE=db_pemweb
DB_USERNAME=root
DB_PASSWORD=p455w0rd

# COMMAND 
- `php artisan migrate`	Membuat tabel-tabel database sesuai file migration.
- `php artisan storage:link`	Membuat symbolic link dari storage ke public/storage, biar file bisa diakses dari browser.
- `php artisan migrate:fresh`	Reset database: drop semua tabel lalu migrate lagi dari awal.
- `php artisan shield:generate --all`	(Khusus package Laravel Shield) Generate semua permission & roles.
- `php artisan project:init`	(Custom command) Biasanya untuk inisialisasi awal project (bisa isi default data, dll).
- `chmod 777 -R storage/* && chmod 777 bootstrap/*`	Memberi izin penuh (read/write/execute) pada folder storage dan bootstrap (biar Laravel gak error soal permission).
- `php artisan make:livewire ShowHomePage`	Membuat komponen Livewire baru bernama ShowHomePage (buat fitur dynamic frontend di Laravel).


sampleapp.zip	(seharusnya ini bukan command, maksudnya file sampleapp.zip disiapkan di folder).
unzip sampleapp.zip	Mengekstrak file sampleapp.zip.


# Log In Admin
localhost 
Username : admin@admin.com
Password : password
