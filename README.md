## Currency Changer


- clone git repository ( https://github.com/Aram9622/currency-changer )
- composer install
- create .env
- fill FREE_CURRENCY_API_KEY
- php artisan migrate
- php artisan db:seed
- php artisan load:currencies
- php artisan schedule:run ( for getting daily currency )
