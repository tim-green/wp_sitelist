//vite.config.mjs
import { defineConfig } from 'vite';
import { resolve } from 'path';

// Get the app.js where all your JavaScript files are imported
const JS_FILE = resolve('assets/js/app.js')

// Define where the compiled and minified JavaScript files will be saved
const BUILD_DIR = resolve(__dirname, 'build/');

export default defineConfig({
  build: {
    assetsDir: '', // Will save the compiled JavaScript files in the root of the dist folder
    emptyOutDir: true, // Empty the dist folder before building
    outDir: BUILD_DIR,
    rollupOptions: {
      input: JS_FILE,
      output: {
        entryFileNames: `[name].min.js`,
        chunkFileNames: `[name].min.js`,
        assetFileNames: `[name].min.css`
      }
    },
  },
});