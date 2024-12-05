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
      keyframes: {
        levitation: {
          "0%": {
            translate: "0 0rem",
          },
          "50%": {
            translate: "0 -0.2rem",
          },
          "100%": {
            translate: "0 0rem",
          },
        },
      },
      animation: {
        levitation: "levitation 4s ease-in-out infinite",
      },
      fontFamily: {
        sans: ["Gilroy", "sans-serif"],
      },
    },
  },
  plugins: [],
}

