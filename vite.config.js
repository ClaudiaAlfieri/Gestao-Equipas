import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/guest.scss',
                'resources/js/app.js',
                'resources/js/guest.js',
            ],
            refresh: true,
        }),
    ],
});
