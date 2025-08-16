import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { compression } from 'vite-plugin-compression2';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        compression({
            algorithm: 'gzip',
            exclude: [/\.(br)$ /, /\.(gz)$/]
        }),
        compression({
            algorithm: 'brotliCompress',
            exclude: [/\.(br)$ /, /\.(gz)$/]
        })
    ],
    build: {
        rollupOptions: {
            output: {
                manualChunks: {
                    'swiper': ['swiper'],
                    'animations': ['aos', 'gsap'],
                    'fontawesome': ['@fortawesome/fontawesome-free']
                }
            }
        },
        cssCodeSplit: true,
        minify: 'terser',
        terserOptions: {
            compress: {
                drop_console: true,
                drop_debugger: true
            }
        }
    },
    server: {
        hmr: {
            overlay: false
        }
    }
});
