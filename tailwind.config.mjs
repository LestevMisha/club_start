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
        fadeIn: {
          "0%": {
            backgroundColor: "rgba(0, 0, 0, 0)",
          },
          "100%": {
            backgroundColor: "rgba(0, 0, 0, 0.7)",
          },
        },        
      },
      animation: {
        levitation: "levitation 4s ease-in-out infinite",
        fadeIn: "fadeIn 0.5s cubic-bezier(0.165, 0.84, 0.44, 1) forwards",
      },
      fontFamily: {
        sans: ["Gilroy", "sans-serif"],
      },
    },
  },
  plugins: [],
}

