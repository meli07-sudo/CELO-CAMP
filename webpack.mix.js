const mix = require("laravel-mix");

mix
    // .js("resources/js/app.js", "public/js")
    .js("resources/js/layouts/public.js", "public/js/layouts/")
    .js("resources/js/public/index.js", "public/js/public/")
    .js("resources/js/auth/auth.js", "public/js/auth/")
    // .sass("resources/scss/app.scss","public/css")
    .sass("resources/scss/layouts/public.scss","public/css/layouts")
    .sass("resources/scss/public/index.scss","public/css/public")
    .sass("resources/scss/public/teacher.scss","public/css/public")
    .sass("resources/scss/auth/auth.scss","public/css/auth")
    .sass("resources/scss/layouts/auth.scss","public/css/layouts")
    .sass("resources/scss/public/contacts.scss","public/css/public");
