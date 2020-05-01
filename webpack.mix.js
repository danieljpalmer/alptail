const mix = require("laravel-mix");
require("laravel-mix-jigsaw");
require("laravel-mix-tailwind");

mix.disableSuccessNotifications();
mix.setPublicPath("source/assets/build");

mix
  .jigsaw()
  .js("source/_assets/js/main.js", "js")
  .sass("source/_assets/sass/main.scss", "css")
  .tailwind("./tailwind.config.js")
  .version();
