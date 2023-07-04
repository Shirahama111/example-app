1-1. git clone

$ mkdir laravel
$ cd laravel
$ git clone https://github.com/xxxxxxxxxxxxxxx/xxxx.git

1-2. vendor

$ composer install

1-3. .env

$ cp .env.example .env

.env change
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=user
DB_PASSWORD=pass

1-4 sail up

$ ./vendor/bin/sail up -d

1-5 sail npm install

$ ./vendor/bin/sail npm install

1-6 migrate

$ ./vendor/bin/sail artisan migrate
create database (yes)

1-7 npm run

$ ./vendor/bin/sail npm run dev

1-8 access 127.0.0.1
