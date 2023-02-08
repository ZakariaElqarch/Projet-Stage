import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
 
export default defineConfig({
    plugins: [
        laravel({
            input: [
                
                'assets\\css\\style.css',
                'assets\\js\\custom.js'
            ],
            refresh: true,
        }),
    ],
});