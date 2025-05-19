# LARAVEL

- Framework PHP
- Syntaks + struktur elegan
- Fitur memudahkan programmer
- Liris 2011 oleh Taylor Otwell
- MVC (Model View Controller)

## MVS = 3 KOMPONEN UTAMA

`USER` -> (Pengguna Akses) `controller` -> (manipulasi data) `model` -> (update tampilan) `view` -> (Kembali lagi dilihat) `USER`

# COMMAND 

- docker exec -it pemweb bash
- composer create-project --prefer-dist raugadh/fila-starter .
- rm -rf *
- rm -rf .*
- chown -R www-data:www-data storage/*

``` php 
edit env:
APP_NAME="PemWeb"
APP_TIMEZONE='Asia/Jakarta'
APP_URL=http://localhost
ASSET_URL=http://localhost
DB_CONNECTION=mysql
DB_HOST=db_pemweb
DB_PORT=3306
DB_DATABASE=db_pemweb
DB_USERNAME=root
DB_PASSWORD=p455w0rd
```
- php artisan migrate
- php artisan migrate:fresh
- php artisan db:seed --force
- php artisan shield:generate --all
- php artisan project:init
- chmod 777 -R storage/* && chmod 777 bootstrap/*
- php artisan make:livewire ShowHomePage

buka localhost dengan browser
- Username : admin@admin.com
- Password : password