import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.css',
        './resources/**/*.vue',
        './resources/**/*.jsx',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            fontSize:{
                '11px': '11px', // Custom font size
            }
            colors:{
                'dark-charcoal': '#1d2327',
            }
        },
    },
    plugins: [],
    safelist: [
    'swiper-container',
    'swiper-slide',
    'swiper-wrapper', // and any other Swiper-related classes
  ],
};
