import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';
import vue from "@vitejs/plugin-vue";
export default defineConfig({
    plugins: [
        vue(), // write this
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                /** CSS FILES*/
                'resources/assets/admin/vendor/fontawesome-free/css/all.css',
                'resources/assets/admin/css/sb-admin-2.min.css',

                 /**JS FILES*/

                'resources/assets/admin/vendor/jquery/jquery.min.js',
                'resources/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js',

                'resources/assets/admin/js/sb-admin-2.min.js',

                'resources/assets/admin/js/demo/chart-area-demo.js',
                'resources/assets/admin/js/demo/chart-pie-demo.js'
            ],

            refresh: true,
        }),
    ],

    resolve: {
        alias: {
            '@':'/resources/js',
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            vue:"vue/dist/vue.esm-bundler.js"
        }
    },
    build : {
        rollupOptions:{
            output:{
                manualChunks:{
                    vendor:[

                    ]
                }
            }
        }
    },
});
