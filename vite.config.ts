import {type ConfigEnv, defineConfig, loadEnv, type UserConfig} from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import * as path from 'path';

export default ({ mode }: ConfigEnv): UserConfig => {
    const env: Record<string, string> = loadEnv(mode, process.cwd());
    const port: number = Number(env.VITE_PORT);
    const host: string | undefined = env.VITE_HOST;
    const domain: string | undefined = process.env.DDEV_PRIMARY_URL;
    const origin = `${domain}:${port}`;

    return defineConfig({
        server: {
            host: host,
            port: port,
            strictPort: true,
            origin: origin,
            cors: {
                origin: domain,
            },
        },
        plugins: [
            laravel({
                input: [
                    'resources/scss/main.scss',
                    'resources/ts/index.ts',
                ],
                refresh: true,
            }),
        ],
        resolve: {
            alias: {
                '@ts': path.resolve(__dirname, 'resources/ts'),
                '@': path.resolve(__dirname, './resources'),
            },
        },
    });
};
