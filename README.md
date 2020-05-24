##Instalacja

Do utworzenia zależności, należy wywołać polecenie:
````
composer install
````
By zainstalować baze danych należy zmienić w pliku .env wpis DATABASE_URL:

````
DATABASE_URL=mysql://username:password@127.0.0.1:3306/database
````
Oraz wywołać następujące polecenia:
````
php bin/console doctrine:database:create
php bin/console doctrine:migration:migrate
````
By uruchomić aplikacje, można użyć polecenia:
````
symfony serve
````
Aplikacja została stworzona z użyciem PHP 7.2 oraz MariaDB w wersji 10.1.44