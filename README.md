Ami kellhet neked: 

git clone https://github.com/takacspeter01/Web2-EA-H-zi-feladat.git
cd Web2-EA-H-zi-feladat

composer install

cp .env.example .env
php artisan key:generate

DB_DATABASE=tanovek
DB_USERNAME=root
DB_PASSWORD=

php artisan migrate --seed

php artisan serve
