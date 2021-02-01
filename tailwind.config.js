module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      height: {
        sm: '8px',
        nav: '5.7rem',
        md: '50px',
        lg: '450px',
        xl: '550px',
       },
       colors: {
         neutral: {
           100: '#EEF0F7',
         },
        primary: {
          100: '#CAC8FF',
          200: '#9F9FFF',
          300: '#7379EC',
          400: '#4655C2',
          500: '#003399',

        },
        secondary:  { 
          100: '#FFBEC4',
          200: '#FFA296',
          300: '#FF8867',
          400: '#F37335',
          
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
