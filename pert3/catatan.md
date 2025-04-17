cd ..
cd db
mkdir conf.d
cd conf.d
touch my.cnf
cd ../..

mkdir pert3
sampleapp.zip
unzip sampleapp.zip

docker compose up -d --build

docker exec -it pemweb bash
composer create-project --prefer-dist raugadh/fila-starter .
rm -rf *
rm -rf .*
chown -R www-data:www-data storage/* 

edit env:
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

php artisan migrate
php artisan storage:link
php artisan migrate:fresh
php artisan migrate
p artisan migrate:fresh
php artisan migrate
php artisan shield:generate --all
php artisan project:init
chmod 777 -R storage/* && chmod 777 bootstrap/*


