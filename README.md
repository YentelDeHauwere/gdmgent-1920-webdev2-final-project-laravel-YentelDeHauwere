# Werkstuk Web development 2

## gdmgent-1920-webdev2-final-project-laravel-YentelDeHauwere

## Wireframes
https://xd.adobe.com/view/557c43d2-1675-4b8e-74b6-cd138037392e-234d/

## Visual Design
https://xd.adobe.com/view/9d434a76-2cf1-4f14-49fc-d5e9ab35cb74-eb72/


### Installatie
Kopieer het .env.example en hernoem het naar .env bestand en zet de variabelen juist. 

installatie van de composer packages
* composer install

installatie van bootstrap en aanmaken van de css en js files
* npm install && npm run dev

nieuwe key maken voor het laravel project
* php artisan key:generate

tables aanmaken in de DB
* php artisan migrate

data invoeren in de db
* php artisan db:seed

link leggen naar storage voor file uploads
* php artisan storage:link

starten van de applicatie in de browser
* php artisan serve
