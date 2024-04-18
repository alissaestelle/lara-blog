/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./app/**/*.php",
        "./resources/**/*.html",
        "./resources/**/*.blade.php",
        "./resources/**/*.php",
        "./resources/**/*.js",
    ],
    theme: {
        screens: {
            "3xs": "300",
            "2xs": "360px",
            xs: "500px",
            sm: "600px",
            base: "640px",
            md: "768px",
            lg: "1024px",
            xl: "1280px",
        },
        extend: {},
    },
    plugins: [],
};
