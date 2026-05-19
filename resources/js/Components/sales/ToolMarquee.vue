<script setup lang="ts">
defineProps<{ logos: string[] }>();
</script>

<template>
    <section class="border-y border-white/10 bg-white/[0.02] py-8" aria-label="Supported AI tools">
        <p class="mb-6 text-center text-xs font-semibold uppercase tracking-[0.25em] text-white/40">
            Access the tools you already know — in one place
        </p>
        <div class="relative overflow-hidden">
            <div class="flex w-max animate-marquee gap-12 px-6">
                <span
                    v-for="(logo, i) in [...logos, ...logos]"
                    :key="`${logo}-${i}`"
                    class="shrink-0 whitespace-nowrap text-lg font-semibold text-white/30 transition-colors hover:text-white/60"
                >
                    {{ logo }}
                </span>
            </div>
            <div
                class="pointer-events-none absolute inset-y-0 left-0 w-24 bg-linear-to-r from-[#07070d] to-transparent"
                aria-hidden="true"
            />
            <div
                class="pointer-events-none absolute inset-y-0 right-0 w-24 bg-linear-to-l from-[#07070d] to-transparent"
                aria-hidden="true"
            />
        </div>
    </section>
</template>
