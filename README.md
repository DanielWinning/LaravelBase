# Breezy

When I'm setting up a new Laravel project, there tends to be a load of scaffolding and boring setup to be done first. Most of the time, I
use the same general workflow and end up using the same tools on a number of different projects. *Breezy* aims to ease some of this setup by including
most of my required tools from the start - including (in case you haven't guessed it), Breeze.

I find that by default, Breeze is a bit messy - I don't want a load of auth components I'm never going to 
use again clogging up my components directory for example. I've *cleaned up* (I know, this is a bit subjective) the Breeze installation
and installed a load of tools ready to go. Think of *Breezy* as a super minimal Laravel authentication setup with some handy little tools included.

**This is built to work with my go-to workflow and may not have the desired tools for everyone's needs.**

This is a basic Laravel setup including the following:

- **Breeze** - includes better organised component directories, minimal layouts. `HOME` is now set to `/`
- **Tailwind** - Tailwind setup, including `laravel-mix-tailwind`
- **SASS** - included and ready to go, as well as being separated into logical files inside `resources/scss`. Mix
has been modified to work with the current directory structure
- **Helpers** - a `helpers.php` file inside the `app` directory, autoloaded in `composer.json`
- **Users** - a slightly modified user model and two seeded users - a super user and a standard user.

## Using this project
First of all, fork this repo. Make sure to set these values in your `.env` and enter your applications database settings:
```
DEFAULT_ADMIN_PASSWORD=
DEFAULT_ADMIN_EMAIL=
```

Then, run the following commands:
```
composer install
npm install && npm run dev
php artisan migrate:fresh --seed
php artisan key:generate
```

