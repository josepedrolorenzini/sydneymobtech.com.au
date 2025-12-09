import defaultTheme from 'tailwindcss/defaultTheme';
<<<<<<< HEAD
import forms from '@tailwindcss/forms';
=======
>>>>>>> master

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
<<<<<<< HEAD
        './resources/views/**/*.blade.php',
        './resources/js/**/*.jsx',
    ],

=======
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.css',
        './resources/**/*.vue',
        './resources/**/*.jsx',
    ],
>>>>>>> master
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
<<<<<<< HEAD
        },
    },

    plugins: [forms],
=======
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
>>>>>>> master
};
