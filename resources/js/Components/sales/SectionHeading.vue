<script setup lang="ts">
defineProps<{
    eyebrow?: string;
    title: string;
    subtitle?: string;
    align?: 'left' | 'center';
}>();
</script>

<template>
    <div
        class="max-w-3xl"
        :class="align === 'center' ? 'mx-auto text-center' : ''"
    >
        <p
            v-if="eyebrow"
            class="mb-3 text-xs font-semibold uppercase tracking-[0.2em] text-violet-400"
        >
            {{ eyebrow }}
        </p>
        <h2 class="font-display text-3xl font-bold tracking-tight text-white sm:text-4xl lg:text-5xl">
            {{ title }}
        </h2>
        <p v-if="subtitle" class="mt-4 text-lg text-white/60">
            {{ subtitle }}
        </p>
    </div>
</template>
