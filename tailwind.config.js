const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            width: {
                'sidebar-open':'calc(100% - 250px)',
                'sidebar-close':'calc(100% - 50px)',
                'open':'250px',
                'close':'50px',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
