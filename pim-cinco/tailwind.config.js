/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            width: {
                "default": "400px",
            },
            height: {
                "default": "700px",
            }
        },
    },
    plugins: [],
}
