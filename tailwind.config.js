/* @type {import('tailwindcss').Config} */

export default {
    content: [
        './app/**/*.php',
        './resources/**/*.html',
        './resources/**/*.blade.php',
        './resources/**/*.php',
        './resources/**/*.{js,jsx}',
    ],
    theme: {
        screens: {
            // '2xs': '360px',
            xs: '400px',
            sm: '540px',
            base: '640px',
            md: '768px',
            lg: '1024px',
            xl: '1280px',
        },
        extend: {},
    },
    plugins: [],
};
