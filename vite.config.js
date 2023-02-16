import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [                
                'resources/css/app.css', 
                'resources/js/app.js',
                // JS                 
                'resources/js/global.js',
                'resources/js/home.js',
                // SCSS
                'resources/scss/home.scss',
                'resources/scss/commons/header.scss',
                'resources/scss/commons/footer.scss',                
            ],
            refresh: true,
        }),
    ],
});
