const mix = require("laravel-mix");

mix
    // .js("resources/js/app.js", "public/js")
    .js("resources/js/public/app-public.js", "public/js/public/")
    .js("resources/js/public/index.js", "public/js/public/")
    // .sass("resources/scss/app.scss","public/css")
    .sass("resources/scss/public/app-public.scss","public/css/public")
    .sass("resources/scss/public/index.scss","public/css/public")
    .sass("resources/scss/public/teacher.scss","public/css/public")
    .sass("resources/scss/public/contacts.scss","public/css/public");
