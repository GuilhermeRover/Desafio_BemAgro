module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: 'class', // or 'media' or 'class'
  theme: {
    screens: {
      'mini': '360px',
      
      'sm': '640px',
      
      'md': '768px',

      'lg': '1024px',

      'xl' : '1280px',
      
      '2xl' : '1536px',
    },
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    // ...
  ],
}
