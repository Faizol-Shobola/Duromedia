module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      height: {
        sm: '8px',
        md: '50px',
        lg: '450px',
        xl: '550px',
       },
       colors: {
        primary: {
          100: '#0033991a',
          200: '#00339933',
          300: '#0033994d',
          400: '#00339966',
          500: '#00339980',
          600: '#00339999',
          700: '#003399b3',
          800: '#003399cc',
          900: '#003399',

        },
        secondary:  {
          100: '#F373351a',
          200: '#F3733533',
          300: '#F373354d',
          400: '#F3733566',
          500: '#F3733580',
          600: '#F3733599',
          700: '#F37335b3',
          800: '#F37335cc',
          900: '#F37335',

        }
      },
      backgroundImage: theme => ({
      'hero-pattern': "url('https://lh3.googleusercontent.com/XJX-YWXjE2ZyNs9A5d8_7Mg_2X1SQH3QgWIEOqObIEBivjH2S4TJTvdyZME9enuRG94W3qs4OhgVsDbWMR48vC4=w420')",
      'footer-texture': "url('/img/footer-texture.png')",
      })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
