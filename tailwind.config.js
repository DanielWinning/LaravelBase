module.exports = {
    purge: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php"
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
