const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Tajawal', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        primary: '#1a1a1a',
        accent: '#00626F',
        light: '#F9FAFB',
        grayish: '#F1F5F9',
      },
    },
  },
  plugins: [
    require('tailwindcss-rtl')
  ],
}
