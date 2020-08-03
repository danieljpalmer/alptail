[![Netlify Status](https://api.netlify.com/api/v1/badges/a6ea4773-6a98-4af1-b330-e512f258dd03/deploy-status)](https://app.netlify.com/sites/alptail/deploys)

# What is Alptail?

Alptail is a collection of open-source UI components, using [Tailwind.css](http://tailwindcss.com/) and [Alpine.js](https://github.com/alpinejs/alpine). Regularly updated and on a mission to make them as accessible as possible. Maintained by [Daniel Palmer](https://www.twitter.com/userlastname).

This static site is built with Tighten's awesome Laravel Blade based [Jigsaw](https://jigsaw.tighten.co/) generator.

[See a demo of the components here.](https://www.alptail.com/)

## Requirements to build locally

-   PHP 7
-   [Composer](https://getcomposer.org/)
-   [Node.js](https://nodejs.org) and NPM

## Getting Started

1. Clone this repo

    ```sh
    git clone https://github.com/danieljpalmer/alptail
    ```

2. Navigate to the folder

    ```sh
    cd alptail
    ```

3. Install PHP dependencies

    ```sh
    composer install
    ```

4. Install JS dependencies

    ```sh
    npm install
    ```

5. Run the dev script to build the site

    ```sh
    npm run dev
    ```

To use BrowserSync, run the watch script instead: `npm run watch`
