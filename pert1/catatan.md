# WEBSITE

## What is website?

A website is basically a collection of related web pages that are all connected and can be accessed through the internet. Think of it like a digital "place" where you can read info, watch videos, buy stuff, or interact with people. Each website has an address, called a URL (like www.example.com), and you visit it using a web browser like Chrome, Safari, or Firefox.

# HTML (HyperText Markup Language)

HTML is the basic language used to create web pages.
It tells the browser how to display text, images, links, and other content on a website.

## TAG HTML

1. <div>

➔ Div is like a container. It groups other elements together to organize the webpage layout.

2. <a>

➔ Stands for anchor. It's used to create links to other pages or websites.

3. <p>

➔ Stands for paragraph. It’s used to write blocks of text.

4. <h1> - <h6>

➔ These are headings.

- <h1> = the biggest, most important title.

- <h6> = the smallest, least important title.

5. <form>

➔ Used to create forms — like for login, register, or contact us.

6. <img>

➔ Stands for image. It’s used to insert pictures on a website.


# Nginx

Nginx adalah sebuah web server yang sangat populer, digunakan untuk mengelola dan menyajikan konten website di internet. Secara sederhana Nginx mengatur bagaimana website atau aplikasi web ditampilkan ketika diakses oleh pengunjung.


# Docker

Docker memungkinkan kita untuk "membungkus" aplikasi dan semua dependensinya (seperti pustaka, konfigurasi, dan variabel lingkungan) dalam satu unit yang disebut kontainer. Dengan cara ini, aplikasi dapat dijalankan di mana saja tanpa khawatir ada perbedaan konfigurasi atau sistem operasi.

## File `docker-compose.yml`

```php
version: '3' (Versi Docker)

services: (layanan)
  web:
    image: nginx:latest
    ports:
      - 80 (host):80 (container docker) (Port forwarding dari host ke container docker)
    volumes:
      - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf-
      - ./src:/usr/share/nginx/html
```

## File `.env`

- `COMPOSE_PROJECT_NAME=esgul` = Nama proyek untuk Docker Compose (Containernya).
- `REPOSITOTY_NAME=pemweb` = Nama repositori tempat image Docker akan disimpan.
- `IMAGE_TAG=latest` = Tag untuk menunjukkan versi terbaru dari image Docker.


# COMMAND UBUNTU
- `MKDIR name_folder` (create folder)
- `touch name_file` (create file)
- `ls` (look file)
- `cd nama_file` (enter folder/file)
- `cd ..` Pindah ke folder induk (satu level ke atas).
- `code .` Membuka VSCODE
- `rm -r nama_folder` Menghapus folder beserta isinya.
- `cp file_tujuan file_asal` Menyalin file dari satu tempat ke tempat lain.
- `mv file_asal file_tujuan` Memindahkan atau mengganti nama file.
- `cat nama_file` Menampilkan isi file di terminal.
- `nano nama_file` Membuka file untuk diedit dengan editor teks Nano.
- `chmod +x nama_file` Memberikan izin eksekusi pada file (misalnya script atau aplikasi).
- `pwd` Menampilkan direktori atau folder tempat kamu berada saat ini.
- `sudo apt-get update`Memperbarui daftar paket di Ubuntu.
- `sudo apt-get install nama_paket` Menginstal paket atau aplikasi di Ubuntu.
- `clear` Membersihkan layar terminal agar lebih rapi.
- `story` Menampilkan perintah-perintah sebelumnya yang udah di gunakan.
- `tree` Menampilakn isi folder & file secara grafik pohon


# COMMAND DOCKER

- `docker ps` Menampilkan daftar kontainer Docker yang sedang berjalan.
- `docker ps -a` Menampilkan semua kontainer (termasuk yang tidak sedang berjalan).
- `docker compose down` Menghentikan kontainer yang sedang berjalan.
- `docker compose up -d --build` (Nginx akan berjalan di Docker)
- `docker stop nama_kontainer` Menghentikan kontainer yang sedang berjalan.
- `docker start nama_kontainer` Memulai kontainer yang sudah dihentikan.
- `docker build -t nama_image` Membangun image Docker dari Dockerfile di direktori saat ini.
- `docker pull nama_image` Mengunduh image Docker dari Docker Hub atau repositori lain.
- `docker exec -it nama_kontainer bash` Menjalankan perintah di dalam kontainer yang sedang berjalan. (bash membuka shell terminal di dalam kontainer).
- `docker logs nama_kontainer` Menampilkan log dari kontainer yang sedang berjalan.
- `docker rm nama_kontainer` Menghapus kontainer Docker.
- `docker rmi nama_image` Menghapus image Docker.


# ANALISA & CATATAN

analisa harus sesuai dengan kodingan dan consept, bila perlu di readme menggunakan citasion, link, plugin, etc.

Analysis includes `5W + 1H` and `SWOT` Analysis

### 5W + 1H
- What (Apa)
- Who (Siapa)
- When (Kapan)
- Where (Di mana)
- Why (Mengapa)
- How (Bagaimana)

### SWOT
- Strengths (kekuatan)
- Weaknesses (kelemahan)
- Opportunities (peluang)
- Threats (ancaman)


# PROJECTS

## Before UTS 

company profile (gaada fitur jual beli, cs this is company profile broo not marketing)

## The last project is case