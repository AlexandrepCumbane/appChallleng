import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from "@vue/cli"


export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
