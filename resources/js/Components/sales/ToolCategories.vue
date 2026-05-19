<script setup lang="ts">
import type { ToolCategory } from '@/types/sales';
import SectionHeading from '@/Components/sales/SectionHeading.vue';

defineProps<{ categories: ToolCategory[] }>();

const iconPaths: Record<string, string> = {
    image: 'M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z',
    video: 'M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z',
    audio: 'M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3',
    plugins: 'M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z',
};
</script>

<template>
    <section id="tools" class="px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <SectionHeading
                eyebrow="Marketplace"
                title="Every format. One platform."
                subtitle="From thumbnails to cinematic films, voice clones to in-editor plugins — build your entire pipeline here."
                align="center"
            />

            <div class="mt-16 grid gap-6 lg:grid-cols-2">
                <article
                    v-for="category in categories"
                    :key="category.id"
                    class="group relative overflow-hidden rounded-3xl border border-white/10 bg-[#13131f] p-8 transition-all hover:border-white/20"
                >
                    <div
                        class="pointer-events-none absolute inset-0 bg-linear-to-br opacity-60"
                        :class="category.gradient"
                        aria-hidden="true"
                    />
                    <div class="relative">
                        <div class="mb-6 flex items-start justify-between gap-4">
                            <div class="flex h-14 w-14 items-center justify-center rounded-2xl bg-white/10 backdrop-blur">
                                <svg class="h-7 w-7 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="1.5"
                                        :d="iconPaths[category.icon] ?? iconPaths.image"
                                    />
                                </svg>
                            </div>
                        </div>
                        <h3 class="font-display text-2xl font-bold text-white">{{ category.title }}</h3>
                        <p class="mt-2 text-white/55">{{ category.subtitle }}</p>
                        <ul class="mt-6 flex flex-wrap gap-2">
                            <li
                                v-for="useCase in category.useCases"
                                :key="useCase.label"
                                class="rounded-full border border-white/10 bg-white/5 px-3 py-1 text-sm text-white/70"
                            >
                                {{ useCase.label }}
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
        </div>
    </section>
</template>
