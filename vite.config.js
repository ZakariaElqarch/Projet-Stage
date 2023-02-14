import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
 
export default defineConfig({
    plugins: [
        laravel({
            input: [
                
                'resources\\js\\script-convention.js',
                'resources\\js\\script-commun-Validate.js',
                'resources\\js\\script-partenaire-Validate.js',
                'resources\\css\\style-convention.css'
                
            ],
            refresh: true,
        }),
      
    ],
   
});