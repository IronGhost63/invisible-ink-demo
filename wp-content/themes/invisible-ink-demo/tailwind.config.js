/** @type {import('tailwindcss').Config} config */

import defaultTheme from 'tailwindcss/defaultTheme.js';

const config = {
  content: ['./app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    container: {
      center: true,
    },
    fontFamily: {
      serif: ['Lora', ...defaultTheme.fontFamily.serif]
    },
    extend: {
      colors: {
        'olive-drab': '#3e451f',
        'light-taupe': '#a89a70',
        'lotion': '#fafafa',
        'platinum': '#e3e3e3',
      }, // Extend Tailwind's default colors
    },
  },
  plugins: [],
};

export default config;
