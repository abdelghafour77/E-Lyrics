/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}", "./include/*.{html,js,php}", "./views/*.{html,js,php}"],
  theme: {
    extend: {
      colors: {

        black: '#222831',
        dark: '#393E46',
        teal: '#00ADB5',
        grey: '#EEEEEE',
        white: '#FAFAFA',
        transparentBlack: '#00000066',
        // purple: '#4D148C',
        // orange: '#FF6600',
        // orange_h: '#d55500',
        // white: '#FAFAFA',
        // bluee: '#2d6bad',
        // gold: '#FFD700',
        // goldenrod: '#DAA520',
        // goldenyellow: '#FFDF00',
        // goldtransparent: '#ffd90033',
        // transparentBlack: '#00000066',
      }
    },
  },

  plugins: [],
}
