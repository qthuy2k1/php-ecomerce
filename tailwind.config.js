
const colors = require('tailwindcss/colors')

module.exports = {
  content: ["./*.php", "./*/**/*.php"],
  theme: {
    extend: {
      keyframes: {
        dropDown: {
          '0%': {
              opacity: '0',
              transform: 'rotateX(-90deg)',
          },
          '100%': {
              opacity: '1',
              transform: 'rotateX(0)',
          },
        },
      },
      animation: {
        dropDown: 'dropDown 0.3s ease-in-out',
      }
    },
    colors: {
      body: "#f2f2f2",
      primary: "#F43939",
      secondary: "#2F80ED",
      transparent: 'transparent',
      current: 'currentColor',
      black: colors.black,
      white: colors.white,
      gray: colors.gray,
      emerald: colors.emerald,
      indigo: colors.indigo,
      yellow: colors.yellow,
    },
  },
  plugins: [],
}
