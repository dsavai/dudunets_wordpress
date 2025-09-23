// tailwind.config.js

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    fontFamily: {
      frankRuhlLibre: ["Frank Ruhl Libre", "serif"],
      geist: ["Geist", "serif"],
    },
    colors: {
      'black': "#141416",
      'primary': "#02115E",
      'secondary': "#0CBD92",
      'red': "#D11313",
      'gray': "#72777D",
      'gray-light': "#F8F8F8",
      'gray-feather': "#FAFAFA",
      'white': "#ffffff",
      'fb-900': "#1877F2",
      'tx-900': "#14171a",
      'wa-900': "#128c7e",
    },
    fontWeight: {
      thin: '100',
      hairline: '100',
      extralight: '200',
      light: '300',
      normal: '400',
      medium: '500',
      semibold: '600',
      bold: '700',
      extrabold: '800',
      black: '900',
    }
  },
  plugins: [],
}