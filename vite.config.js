import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { google } from 'laravel-vite-plugin/fonts';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            assets: ['resources/images/**'],
            refresh: true,
            fonts: [
                google('Noto Sans', {
                    weights: [400, 500, 600, 700],
                    optimizedFallbacks: false,
                }),
                google('Lexend', {
                    weights: [600, 700, 800],
                    optimizedFallbacks: false,
                }),
                google('Varela Round', {
                    weights: [400],
                    optimizedFallbacks: false,
                }),
                google('Indie Flower', {
                    weights: [400],
                    optimizedFallbacks: false,
                }),
            ],
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
