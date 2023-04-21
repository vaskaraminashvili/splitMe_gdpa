import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";
import inertia from "./resources/vite/inertia-layout.ts";

export default defineConfig({
    plugins: [
        inertia(),
        vue({
            include: [/\.vue$/, /\.md$/],
        }),
        laravel({
            input: [
                './resources/admin/scss/app.scss',
                './resources/web/scss/app.scss',

                './resources/admin/scripts/app.js',
                './resources/web/scripts/app.js'
            ],
            refresh: [
                'resources/**',
                'routes/**',
            ],
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/',
        },
    },
});
