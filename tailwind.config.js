/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
      './resources/views/**/*.blade.php',  // Your Blade files
      './resources/js/**/*.js',            // Your JS files (if needed)
    ],
    theme: {
        extend: {
          fontFamily: {
            'gilroy-bold': ['Gilroy', 'sans-serif'], // Add Gilroy-Bold font here
          },
        },
      },
    plugins: [],
  }
