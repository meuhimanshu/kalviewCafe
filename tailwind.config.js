/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.{html,js,php}", "./foodtocart/**/*.{html,js}"],
  theme: {
    extend: {
      colors:{
        'bgColour': '#fbfbe4',
        'primaryColour': '#8e5527',
        'secondryColour': '#445335'
      },
      fontFamily: {
        'sfpro': ['SF Pro Display','sans-serif'],
        'sfprotext':['SF Pro Text','sans-serif'],
        'poppins': ['Poppins','sans-serif'],
        'inter':['Inter','sans-serif'],
        'mystery':['Mystery Quest', 'sans-serif']
      }, 
    },
  },
  plugins: [],
}

