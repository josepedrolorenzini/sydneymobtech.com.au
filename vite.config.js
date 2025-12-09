import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
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
});
