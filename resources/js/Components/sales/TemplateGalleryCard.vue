<script setup lang="ts">
import type { TemplateGalleryItem } from '@/types/sales';

defineProps<{
    item: TemplateGalleryItem;
}>();

const sizeClasses: Record<string, string> = {
    default: 'gallery-item--default',
    tall: 'gallery-item--tall',
    wide: 'gallery-item--wide',
};
</script>

<template>
    <article
        class="gallery-item group relative overflow-hidden rounded-2xl border border-white/10 bg-[#13131f] transition-all duration-300 hover:border-violet-500/40 hover:shadow-xl hover:shadow-violet-500/10"
        :class="sizeClasses[item.size]"
    >
        <div class="relative aspect-4/3 w-full overflow-hidden sm:aspect-auto sm:h-full sm:min-h-[180px]">
            <div
                class="absolute inset-0 bg-linear-to-br transition-transform duration-500 group-hover:scale-105"
                :class="item.accent"
            />

            <div v-if="item.preview === 'lut'" class="absolute inset-0 flex">
                <div
                    v-for="n in 5"
                    :key="n"
                    class="flex-1 border-r border-white/5"
                    :style="{ background: `linear-gradient(180deg, hsl(${(n - 1) * 45}, 60%, ${35 + n * 8}%) 0%, hsl(${(n - 1) * 45 + 20}, 50%, 20%) 100%)` }"
                />
            </div>

            <div v-else-if="item.preview === 'sfx'" class="absolute inset-0 flex items-end justify-center gap-1 px-6 pb-8">
                <div
                    v-for="(h, i) in [40, 65, 30, 80, 55, 90, 45, 70, 35, 60, 85, 50]"
                    :key="i"
                    class="w-1.5 rounded-full bg-white/30 transition-all duration-300 group-hover:bg-cyan-400/60"
                    :style="{ height: `${h}%` }"
                />
            </div>

            <div v-else-if="item.preview === 'text'" class="absolute inset-0 flex flex-col items-center justify-center p-6">
                <p class="font-display text-2xl font-extrabold uppercase tracking-tight text-white drop-shadow-lg sm:text-3xl">
                    YOUR
                </p>
                <p class="mt-1 font-display text-xl font-bold text-violet-300 sm:text-2xl">
                    HEADLINE
                </p>
                <div class="mt-4 h-1 w-16 rounded-full bg-violet-500" />
            </div>

            <div
                v-else-if="item.preview === 'overlay'"
                class="absolute inset-0 opacity-40"
                style="background-image: radial-gradient(circle, rgba(255,255,255,0.15) 1px, transparent 1px); background-size: 8px 8px;"
            />

            <template v-else-if="item.preview === 'background'">
                <div class="absolute -left-8 top-1/4 h-32 w-32 rounded-full bg-violet-500/40 blur-2xl" />
                <div class="absolute -right-4 bottom-1/4 h-24 w-24 rounded-full bg-cyan-400/30 blur-2xl" />
                <div class="absolute left-1/2 top-1/2 h-20 w-20 -translate-x-1/2 -translate-y-1/2 rounded-full bg-fuchsia-500/25 blur-xl" />
            </template>

            <div class="absolute right-3 top-3">
                <span class="rounded-full border border-white/20 bg-black/40 px-2.5 py-1 text-[10px] font-semibold uppercase tracking-wider text-white/80 backdrop-blur-sm">
                    {{ item.categoryLabel }}
                </span>
            </div>
        </div>

        <div
            class="absolute inset-0 flex flex-col justify-end bg-linear-to-t from-black/90 via-black/40 to-transparent p-4 opacity-0 transition-opacity duration-300 group-hover:opacity-100 group-focus-within:opacity-100"
        >
            <h3 class="font-display text-base font-bold text-white sm:text-lg">{{ item.title }}</h3>
            <p class="mt-1 text-xs text-white/60">Drag & drop into any editor</p>
            <span class="mt-3 inline-flex w-fit items-center gap-1.5 text-xs font-semibold text-violet-300">
                <svg class="h-3.5 w-3.5" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                    <path d="M6.3 2.841A1.5 1.5 0 004 4.11V15.89a1.5 1.5 0 002.3 1.269l9.344-5.89a1.5 1.5 0 000-2.538L6.3 2.84z" />
                </svg>
                Preview template
            </span>
        </div>
    </article>
</template>
