import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vitejs/plugin-vue";
import inertia from "./resources/admin/js/vite/inertia-layout.ts";

export default defineConfig({
    plugins: [
        inertia(),
        vue({
            include: [/\.vue$/, /\.md$/],
        }),
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
