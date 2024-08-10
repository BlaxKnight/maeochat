import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
  server: {
    cors: {
      origin: "http://localhost", // or the specific origin of your Laravel app
      credentials: true,
    },
    hmr: {
      host: "localhost",
    },
  },
  plugins: [
    laravel({
      input: ["resources/css/app.css", "resources/js/app.js"],
      refresh: true,
    }),
  ],
});
