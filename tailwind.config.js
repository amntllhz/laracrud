/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily : {        
        in : "'Inter var', sans-serif",
      },
      colors : {        
        prim : '#6366f2',        
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),


    function({ addUtilities }) {
      addUtilities({
        '.font-feature-settings-cv11': {
          'font-feature-settings': '"cv11"',
        },
      }, ['responsive', 'hover']);
    },
  ],
}