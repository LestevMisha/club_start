/** @type {import('tailwindcss').Config} */
export default {
  darkMode: "selector",
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.mjs",
    "./resources/**/*.js",
    // "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Gilroy", "sans-serif"],
      },
    },
  },
  plugins: [],
}

