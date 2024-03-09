/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.html",
        "./resources/**/*.blade.php",
        "./resources/**/*.php",
        "./resources/**/*.js",
    ],
    theme: {
        screens: {
            xxs: "360px",
            xs: "500px",
            sm: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1280px",
        },
        extend: {},
    },
    plugins: [],
};
