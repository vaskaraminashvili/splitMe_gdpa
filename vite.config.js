import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/admin/scss/app.scss', 'resources/admin/js/app.js', 'resources/web/scss/app.scss', 'resources/web/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/',
        },
    },
});
