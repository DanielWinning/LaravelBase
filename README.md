# Breezy

When I'm setting up a new Laravel project, there tends to be a load of scaffolding and boring setup to be done first. Most of the time, I
use the same general workflow and end up using the same tools on a number of different projects. *Breezy* aims to ease some of this setup by including
most of my required tools from the start - including (in case you haven't guessed it), Breeze.

Think of *Breezy* as a super minimal Laravel authentication setup with some handy little tools included.

**This is built to work with my go-to workflow and may not have the desired tools for everyone's needs.**

- <a href="#usage">Usage</a>
- <a href="#included">What's included?</a>

<div id="usage"></div>

##  Usage

To get started, simply fork this repo. Then copy your projects `.env.example` file to `.env`, making sure to set your 
database credentials. Then make sure to set the following variables, which will be used when running the `UserSeeder`:

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

That's it, now you can carry on building your project as you normally would.

<div id="included"></div>

## What's Included?

### Breeze

I find that by default, Breeze is a bit messy - I don't want a load of auth components I'm never going to
use again clogging up my components directory for example. I've *cleaned up* (I know, this is a bit subjective) a bit; moved
Breeze components into their own directory and refactored components and views to match.

The dashboard has been removed and the `HOME` variable has been set to `/` (as opposed to `/dashboard`), so, by default, 
users redirect to the homepage of your application when logging in.

### Tailwind

Tailwind has become my go-to CSS tooling, this has been installed and included in `webpack.mix.js`, ready to be used straight
away.

### SASS

My CSS pre-processor of choice, included by default. By default, the SCSS files can be found in `resources/scss` - 
already setup are `app.scss` and `admin.scss`, setup to include Tailwind and `webpack.mix.js` has been amended accordingly, 
allowing you to "build" your Tailwind and SCSS immediately. As always, you can run `npm run watch`, `npm run dev` or 
`npm run production` to compile your assets.

By default, this app has been set up to compile your CSS to `public/assets/css` and JS to `public/assets/js`. The files `app.scss` and
`admin.scss` have been included as a starting point.

### Helpers

Inevitably we end up needing to use our own helper functions when building Laravel applications - a handy `app/helpers.php` file
has been created and autoloaded in `composer.json`.

### Modified Users

The user model has been amended; the `name` column has been removed and `first_name`, `last_name` and `role` have been added.
A single method - `isSuperUser()` has been added to the user model, required for the default homepage view.

Two user accounts have been included inside the `UserSeeder`, for testing - remember to set your default passwords in your `.env` 
file.

### Views

The default view for the homepage has been changed, with a minimal, relevant directory structure in place for views - some boilerplate stuff.
Your project will load `app/index.blade.php` at first, which will display a welcome message and links to login and register. If you log in as the
demo `super_user` account, you'll be shown a list of your applications routes. This is a minimal Vue page, serving as an example, or it can be kept
for reference whilst you're developing your application.

A super minimal `<x-app-layout>` component is included, which loads Vue via a CDN. Feel free to remove this and add Vue *properly*, if you 
need Vue that is.

