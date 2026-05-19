<script setup lang="ts">
import SectionHeading from '@/Components/sales/SectionHeading.vue';

const benefits = [
    {
        title: 'One login, every tool',
        description: 'Stop juggling subscriptions and interfaces. Access image, video, audio, and plugin AI from a single marketplace.',
        icon: 'layers',
    },
    {
        title: 'Pay only for what you use',
        description: 'Buy credits like fuel for a car. Try tools freely, then spend only when you create — no monthly lock-in required.',
        icon: 'wallet',
    },
    {
        title: 'Always up to date',
        description: 'When revolutionary AI drops, we add it. You stay on the cutting edge without hunting new sign-up pages.',
        icon: 'sparkles',
    },
];
</script>

<template>
    <section class="px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <SectionHeading
                eyebrow="Why Prompt Edit"
                title="Think grocery store, not subscription stack"
                subtitle="Prompt Edit is where creators shop for AI — pick your tools, load up credits, and build without another monthly bill."
                align="center"
            />

            <div class="mt-16 grid gap-6 md:grid-cols-3">
                <article
                    v-for="benefit in benefits"
                    :key="benefit.title"
                    class="group rounded-2xl border border-white/10 bg-[#13131f] p-8 transition-all duration-300 hover:border-violet-500/30 hover:bg-[#16162a]"
                >
                    <div
                        class="mb-5 flex h-12 w-12 items-center justify-center rounded-xl bg-violet-500/15 text-violet-300 transition-transform group-hover:scale-110"
                    >
                        <svg v-if="benefit.icon === 'layers'" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                        </svg>
                        <svg v-else-if="benefit.icon === 'wallet'" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                        </svg>
                        <svg v-else class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold text-white">{{ benefit.title }}</h3>
                    <p class="mt-3 text-white/55">{{ benefit.description }}</p>
                </article>
            </div>
        </div>
    </section>
</template>
