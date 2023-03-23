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
                "booking": "380px",
            },
            height: {
                "default": "700px",
                "booking": "450px",
            }
        },
    },
    plugins: [],
}
