module.exports = {
    content: [
        "./resources/views/**/*.blade.php",
        "./resources/js/**/*.js",
        "./resources/js/**/*.vue",
        "./resources/scss/**/*.scss"
    ],
    theme: {
        extend: {
            fontFamily: {

            }
        },
    },
    variants: {
        extend: {},
    },
    plugins: [
        require("@tailwindcss/forms")
    ]
}
