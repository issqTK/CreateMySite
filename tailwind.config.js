import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brightRed: '#ff3131', 
                darkGray : '#2b2b2b',
            },
            spacing: {
                'mb-s': '4rem 1.25rem',
                'lg-s': '6rem 3.5rem',
            },
            
        },
    },

    plugins: [forms],
};
