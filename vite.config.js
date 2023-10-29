import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                    'resources/js/app.js',
                    'node_modules/bootstrap/dist/css/bootstrap.min.css',
                    'node_modules/bootsrap/dist/js/bootstrap.bundle.js',
                    'node_modules/jquery-mask-plugin/dist/jquery.mask.js'
        ],
            refresh: true,
        }),
    ],
});