/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{html,js,php}",
    "./node_modules/flowbite/**/*.js",
  ],
  theme:{
    extend:{
      colors: {
        primary: '#0E2954',
        secondary: '#1F6E8C',
        third: '#2E8A99',
        slate: '#64748b',
    },
  },
},
  plugins: [require('flowbite/plugin')],
}