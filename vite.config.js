import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    plugins: [
        viteStaticCopy({
            targets: [
                {
                    src: path.join(__dirname, "/resources/images"),
                    dest: path.join(__dirname, "/public"),
                },
                {
                    src: path.join(__dirname, "/resources/favicon"),
                    dest: path.join(__dirname, "/public"),
                },
                {
                    src: path.join(__dirname, "/resources/favicon/favicon.ico"),
                    dest: path.join(__dirname, "/public"),
                },
            ],
        }),
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
