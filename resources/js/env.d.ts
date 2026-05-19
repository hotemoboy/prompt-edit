/// <reference types="vite/client" />

interface ImportMetaEnv {
    readonly VITE_APP_NAME: string;
}

interface ImportMeta {
    readonly env: ImportMetaEnv;
    glob<T>(pattern: string): Record<string, () => Promise<T>>;
}

declare module '*.vue' {
    import type { DefineComponent } from 'vue';
    const component: DefineComponent<object, object, unknown>;
    export default component;
}

declare module '*.css' {
    const content: string;
    export default content;
}

declare module 'laravel-vite-plugin/inertia-helpers' {
    import type { DefineComponent } from 'vue';
    export function resolvePageComponent(
        path: string,
        pages: Record<string, () => Promise<DefineComponent>>,
    ): Promise<DefineComponent>;
}
