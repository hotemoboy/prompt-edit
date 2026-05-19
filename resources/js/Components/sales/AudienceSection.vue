<script setup lang="ts">
import AppButton from '@/Components/ui/AppButton.vue';

defineProps<{ ctaUrl: string }>();

const points = [
    'Access every major AI tool in one easy interface',
    'Get the best deal on credits — create more, spend less',
    'Produce cinematic videos with pro-grade templates',
    'Skip the $130 asset packs when you only need one item',
    'Unlimited downloads & commercial usage included',
];
</script>

<template>
    <section class="px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl overflow-hidden rounded-3xl border border-violet-500/30 bg-linear-to-br from-violet-600/20 via-[#13131f] to-cyan-600/10 p-10 sm:p-14">
            <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
                <div>
                    <h2 class="font-display text-3xl font-bold text-white sm:text-4xl">
                        Built for creators who want pro results without pro budgets
                    </h2>
                    <p class="mt-4 text-white/60">
                        Whether you're just learning to edit or you're tired of stacking subscriptions — Prompt Edit is your single home for AI creation.
                    </p>
                </div>
                <ul class="space-y-4">
                    <li
                        v-for="point in points"
                        :key="point"
                        class="flex items-start gap-3 text-white/80"
                    >
                        <span class="mt-1 flex h-5 w-5 shrink-0 items-center justify-center rounded-full bg-violet-500/30 text-violet-300">
                            <svg class="h-3 w-3" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        {{ point }}
                    </li>
                </ul>
            </div>
            <div class="mt-10 flex justify-center lg:justify-start">
                <AppButton :href="ctaUrl" size="lg">Get started today</AppButton>
            </div>
        </div>
    </section>
</template>
