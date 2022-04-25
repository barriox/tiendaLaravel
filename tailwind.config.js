const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],
    theme: {

        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    height:{
        "15v":"15vh",
        "10v":"10vh",
        "75v":"75vh",
        "70v":"70vh",
        "5v":"5vh",
    },
    plugins: [require('@tailwindcss/forms')],
};
