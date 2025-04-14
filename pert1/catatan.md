Yang dipelajari day 1
Pengenalan tentang HTML, HTML Dasar, pengenalan tentang tag-tag dari HTML

kelemahannya: masih banyak yang eror, mulai dari di servernya gabisa run, eror di proses build ke container

1. FILE docker-compose.yml

version: '3' (Versi Docker)

services: (layanan)
  web:
    image: nginx:latest
    ports:
      - 80 (host):80 (container docker) (Port forwarding dari host ke container docker)
    volumes:
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf-
      - ./src:/usr/share/nginx/html

2. Command Ubuntu
MKDIR name_folder (create folder)
touch name_file (create file)
Ls (look file)
cd nama_file (enter folder/file)
docker compose up -d --build (Nginx akan berjalan di Docker)

3. File nginx.conf 
adalah file konfigurasi utama untuk Nginx, yang digunakan untuk mengatur cara server bekerja

XAMPP VS DOCKER
---------------
XAMPP: Semua software dijalankan langsung di komputer (localhost). Tidak ada isolasi antar proyek.
DOCKER: Setiap aplikasi jalan dalam container terpisah.

alt="gambar" utuk penamaan gambar/ alternatif jika gambar ga tampil

TAG FOR HTML
-------------
class untuk css styling
h1-h6 
p pragraph
img for images
form 
tag a: achor for link

MY PROJECTS
-----------
1. Project before uts: company profile (gaada fitur jual beli, cs this is company profile broo not marketing)
2. The last project is case
analisa harus sesuai dengan kodingan dan consep 
bila perlu di readme menggunakan citasion, link, plugin

domain ex: youtube.com

down and compose

