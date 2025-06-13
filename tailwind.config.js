import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            colors: {
                indigo: {
                    50: '#f0f5ff',
                    100: '#e5edff',
                    200: '#cddbfe',
                    300: '#b4c6fc',
                    400: '#8da2fb',
                    500: '#6875f5',
                    600: '#5850ec',
                    700: '#5145cd',
                    800: '#42389d',
                    900: '#362f78',
                },
                teal: {
                    50: '#f0fdfa',   // Lightest (backgrounds)
                    100: '#ccfbf1',  // Very light
                    200: '#99f6e4',  // Light
                    300: '#5eead4',  // Medium-light
                    400: '#2dd4bf',  // Base light teal
                    500: '#14b8a6',  // PRIMARY (your chosen teal)
                    600: '#0d9488',  // Darker
                    700: '#0f766e',  // Dark
                    800: '#115e59',  // Very dark
                    900: '#134e4a',  // Darkest (text/accents)
                },
                amber: {
                    500: '#f59e0b',  // Your accent color
                },
            },
            fontFamily: {
                sans: ['Figtree', 'Inter', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, typography],
};
