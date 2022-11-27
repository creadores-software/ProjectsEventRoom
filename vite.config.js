import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

// Bootstrap5
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],

    // Bootstrap5
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});
