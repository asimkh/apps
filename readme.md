https://laravel.com/docs/5.2/homestead <br />
https://laracasts.com/series/build-a-laravel-app-from-scratch/episodes/1 <br />
https://www.vagrantup.com/ <br />

Running Virtual Machine inside homestead <br />
vagrant@homestead:~$ <br />
Vagrant up --provision // start your host.<br />

Hosting Server<br />
cd homestead<br />
vagrant up<br />
vagrant ssh<br />

Database<br />
mysql -uhomestead -p // start mysql<br />
show databases;<br />
drop database homestead;<br />
create database hazdata;<br />

Update with new database<br />
vagrant@homestead:~/hazzir$ php artisan migrate:install<br />

Composer<br />
composer update --dev // updating development env<br />
composer require way/generators --dev // add dependencies in development env<br />
composer require codeception/codeception // add dependencies in development env<br />

https://packagist.org/search/?q=laracast<br />
https://packagist.org/packages/laracasts/generators<br />

Laravel components<br />
https://laravelcollective.com/docs/5.2/html<br />

Bootstrap HTML<br />
https://maxoffsky.com/code-blog/integrating-bootstrap-htmlcss-framework-web-applications/<br />

