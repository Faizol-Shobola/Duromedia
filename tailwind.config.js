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
      'hero-pattern': "url('https://conklinmedia.com/wp-content/uploads/2018/08/Dark-Background-888.png')",
      'footer-texture': "url('/img/footer-texture.png')",
      })
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
