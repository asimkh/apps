https://laravel.com/docs/5.2/homestead
https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/1
https://www.vagrantup.com/

Running Virtual Machine inside homestead
vagrant@homestead:~$
Vagrant up --provision // start your host.

Hosting Server
cd homestead
vagrant up
vagrant ssh

Database
mysql -uhomestead -p // start mysql
show databases;
drop database homestead;
create database hazdata;

Update with new database
vagrant@homestead:~/hazzir$ php artisan migrate:install

Composer
composer update --dev // updating development env
composer require way/generators --dev // add dependencies in development env
composer require codeception/codeception // add dependencies in development env

https://packagist.org/search/?q=laracast
https://packagist.org/packages/laracasts/generators

Laravel components
https://laravelcollective.com/docs/5.2/html

Bootstrap HTML
https://maxoffsky.com/code-blog/integrating-bootstrap-htmlcss-framework-web-applications/

