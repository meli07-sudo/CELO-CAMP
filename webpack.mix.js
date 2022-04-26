const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js").js("resources/js/index.js", "public/js/public/").sass("resources/scss/app.scss","public/css").sass("resources/scss/partials/_config.scss","public/css/config.css").sass("resources/scss/partials/_utils.scss","public/css/utils.css").sass("resources/scss/public/index.scss","public/css/index.css");
