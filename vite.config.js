import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css','resources/css/responsive.css','resources/css/font-awesome.css', 'resources/css/boostrap.css','resources/css/style.css', 'resources/js/app.js', 'resources/js/jquery-3.4.1.min.js', 'resources/js/bootstrap.js', 'resources/js/bootstrap.js'],
            refresh: true,
        }),
    ],
});
