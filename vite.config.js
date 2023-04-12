import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
export default defineConfig({
    plugins: [
        laravel({
            input: [
                //'resources/sass/app.scss',
                //'resources/js/app.js',
                /** CSS FILES*/
                'resources/assets/admin/vendor/fontawesome-free/css/all.min.css',
                'resources/assets/admin/css/sb-admin-2.min.css',

                 /**JS FILES*/

                'resources/assets/admin/vendor/jquery/jquery.min.js',
                'resources/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js',
                'resources/assets/admin/vendor/jquery-easing/jquery.easing.min.js',
                'resources/assets/admin/js/demo/sb-admin-2.min.js',
                'resources/assets/admin/vendor/chart.js/Chart.min.js',

                'resources/assets/admin/js/demo/chart-area-demo.js',
                'resources/assets/admin/js/demo/chart-pie-demo.js',


            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});
