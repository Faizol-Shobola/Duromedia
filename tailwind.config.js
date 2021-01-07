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
