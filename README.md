# Laravel Starter Template

A minimal Laravel setup with Breeze, Vue and TailwindCSS installed out of the box. Ready to go for quickly scaffolding 
a new project.

**After creating your database and entering DB credentials, make sure to set these variables in your `.env`:**
```
DEFAULT_ADMIN_PASSWORD=
DEFAULT_ADMIN_EMAIL=
```

Update `database/seeders/UserSeeder.php` with your own credentials.

**Then run the following commands:**
```
composer install
npm install && npm run dev
php artisan migrate:fresh --seed
php artisan key:generate
```

😄
