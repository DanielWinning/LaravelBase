# Breezy

When you're setting up a new Laravel application, there tends to be a load of scaffolding and setup that needs to be done 
before you can actually get into building the meat and bones of your app. This aims to take care of some monotonous setup stages.
It's a super easy, minimal fuss Breeze setup. *EasyBreezy* if you're a fan of shit names.

**This is built to work with my go-to workflow and may not have the desired tools for everyone's needs.**

This is a basic Laravel setup including the following:

- **Breeze** - includes better organised component directories, minimal layouts. `HOME` is now set to `/`
- **Tailwind** - Tailwind setup, including `laravel-mix-tailwind`
- **SASS** - included and ready to go, as well as being separated into logical files inside `resources/scss`. Mix
has been modified to work with the current directory structure
- **Helpers** - a `helpers.php` file inside the `app` directory, autoloaded in `composer.json`
- **Users** - a slightly modified user model and two seeded users - a super user and a standard user.

## Using this project
First of all, clone this repo and be sure to set these values in your `.env` and enter your applications database settings:
```
DEFAULT_ADMIN_PASSWORD=
DEFAULT_ADMIN_EMAIL=
```

Then, run the following commands:
```
composer install
npm install && npm run dev
php artisan migrate:fresh --seed
```

