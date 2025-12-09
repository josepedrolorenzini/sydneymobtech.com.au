import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
<<<<<<< HEAD
import react from '@vitejs/plugin-react';
=======
import tailwindcss from '@tailwindcss/vite';
>>>>>>> master

export default defineConfig({
    plugins: [
        laravel({
<<<<<<< HEAD
            input: 'resources/js/app.jsx',
            refresh: true,
        }),
        react(),
    ],
=======
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/js/swiperBanner.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    build: {
        manifest: true,  // Ensure Vite generates manifest.json
        outDir: 'public/build',  // Correct output directory for assets
    },
>>>>>>> master
});
