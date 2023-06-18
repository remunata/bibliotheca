import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Poppins', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'magenta': '#ff9f9f4d',
                'dark-magenta': '#ff9f9f',
                'slight-magenta': '#ff9f9f80',
                'yellow': '#fffad7',
                'abu': '#7e7a7a',
                'red': '#FF0000',
            }
        },
    },

    plugins: [forms],
};
