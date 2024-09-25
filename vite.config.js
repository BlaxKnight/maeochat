import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
  server: {
    https: {
      key: '/etc/letsencrypt/live/amanfromspace.ir/privkey.pem',
      cert: '/etc/letsencrypt/live/amanfromspace.ir/fullchain.pem',
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
