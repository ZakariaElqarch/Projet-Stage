import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/assets/js/site.js', 'public/assets/css/style.js'],
            refresh: true,
        }),
    ],
});
