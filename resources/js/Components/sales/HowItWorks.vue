<script setup lang="ts">
import SectionHeading from '@/Components/sales/SectionHeading.vue';

const steps = [
    { step: '01', title: 'Create your account', description: 'Sign up in seconds. No credit card required to browse the marketplace.' },
    { step: '02', title: 'Load AI credits', description: 'Purchase credits once or subscribe for monthly boosts and template access.' },
    { step: '03', title: 'Pick any tool & create', description: 'Generate images, videos, audio, or use in-editor plugins — pay only for what you use.' },
];
</script>

<template>
    <section id="how-it-works" class="border-y border-white/10 bg-white/[0.02] px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <SectionHeading
                eyebrow="How it works"
                title="Credits, not subscriptions"
                subtitle="Like buying gas for a car — load up, create, and top up when you need more."
                align="center"
            />
            <ol class="mt-16 grid gap-8 md:grid-cols-3">
                <li
                    v-for="item in steps"
                    :key="item.step"
                    class="relative rounded-2xl border border-white/10 p-8"
                >
                    <span class="font-display text-5xl font-bold text-white/10">{{ item.step }}</span>
                    <h3 class="mt-4 font-display text-xl font-bold text-white">{{ item.title }}</h3>
                    <p class="mt-2 text-white/55">{{ item.description }}</p>
                </li>
            </ol>
        </div>
    </section>
</template>
