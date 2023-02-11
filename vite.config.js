import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
 
export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources\\css\\style-convention.css',
                'resources\\js\\script-convention.js'
            ],
            refresh: true,
        }),
      
    ],
   
});