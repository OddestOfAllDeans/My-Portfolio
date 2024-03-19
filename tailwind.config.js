/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['index.html'],
  theme: {
    container: {
      center: true,
      padding: '16px',
    },
    extend: {
      transitionDuration: {
        900: '900ms'
    },
      fontFamily: {
        instrumentsans: ['Instrument Sans'],
        poppins: ['Poppins'],
        instrumentserif: ['Instrument Serif']
      },
      colors: {
        mustardyellow: '#E1AD01',
        hero: '#181D45',
        other: '#D9C089',
        ivory: '#FFFFF0',
        skye: '#38BDF8',
        medblue: '#2E65A3'
      },
      screens: {
        '2xl': '1320px'
      },
    },
  },
  plugins: [],
}

