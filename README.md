Project requirements:

- Laravel 7
- php 7.4
- mysql 8
- composer 2.7

To install php and extensions run following commands in terminal:

sudo apt-get update

sudo apt -y install software-properties-common

sudo add-apt-repository ppa:ondrej/php

sudo apt-get update

sudo apt -y install php7.4

sudo apt-get install -y php7.4-{bcmath,bz2,intl,gd,mbstring,mysql,zip,sqlite,soap,imagick,curl,json,xml}

sudo apt install curl php-cli php-mbstring git unzip

curl -sS https://getcomposer.org/installer -o composer-setup.php

sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer

sudo chown -R $USER ~/.composer/


run composer install

After git clone repository make sure that you have .env with right credentials.

php artisan key:generate

Create an empty database on your local machine and set mysql credentials in .env file (create it using .env.example changing mysql credentials)

After successfull installation run:

php artisan serve

Open localhost:8000 or 127.0.0.1:8000 to see how it works


All application translation files stored in resources/lang and have appropriate name which coinsides with template name in resources/views

For example resources/views/front/index.blade.php in resources/lang/en/index.php (lang prefix depends on localization prefix(en, ru))

In index.blade.php you can see how translations are made using trans() helper:

trans('index.meta_description')

in resources/lang/{currentLocale}/index.php array key named "meta_description" which has translation.

if your translation file stored inside a folder in resources/lang/ trans helper will looks like:

trans('partials/footer.contacts')

For some reason, if translation file for your page(template) is not exists you can create it yourself in resources/lang/{locale}

localization urls in templates can be configured using following construction:

a href="{{ LaravelLocalization::getLocalizedURL('projects') }}">Projects</a>