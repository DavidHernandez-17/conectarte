import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: {
                    DEFAULT: '#2563eb',
                    light: '#3b82f6',
                    dark: '#1d4ed8',
                },
                secondary: {
                    DEFAULT: '#f59e0b',
                    light: '#fbbf24',
                    dark: '#d97706',
                },
                neutral: {
                    100: '#f5f5f5',
                    500: '#737373',
                    900: '#171717',
                },
            },
        },
    },

    plugins: [forms, typography],
};
