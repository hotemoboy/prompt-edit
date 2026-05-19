<script setup lang="ts">
import AppButton from '@/Components/ui/AppButton.vue';

defineProps<{ ctaUrl: string }>();

const stats = [
    { value: '50+', label: 'AI tools' },
    { value: '0', label: 'Subscriptions required' },
    { value: '100K+', label: 'Editing templates' },
];
</script>

<template>
    <section class="relative px-4 pb-20 pt-12 sm:px-6 sm:pt-16 lg:px-8 lg:pt-24">
        <div class="mx-auto max-w-7xl text-center">
            <div
                class="mb-6 inline-flex items-center gap-2 rounded-full border border-violet-500/30 bg-violet-500/10 px-4 py-1.5 text-sm text-violet-200"
            >
                <span class="relative flex h-2 w-2">
                    <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-violet-400 opacity-75" />
                    <span class="relative inline-flex h-2 w-2 rounded-full bg-violet-400" />
                </span>
                Exclusive student offer — save on your first credits
            </div>

            <h1 class="font-display text-4xl font-extrabold leading-[1.05] tracking-tight sm:text-6xl lg:text-7xl">
                The AI marketplace
                <span class="block text-gradient">built for creators</span>
            </h1>

            <p class="mx-auto mt-6 max-w-2xl text-lg text-white/60 sm:text-xl">
                One place for image, video, audio, and in-editor AI tools.
                No subscription stacking — just buy credits and create.
            </p>

            <div class="mt-10 flex flex-col items-center justify-center gap-4 sm:flex-row">
                <AppButton :href="ctaUrl" size="lg">
                    Start creating today
                </AppButton>
                <AppButton href="#tools" variant="secondary" size="lg">
                    Explore tools
                </AppButton>
            </div>

            <dl class="mt-16 grid grid-cols-3 gap-6 border-t border-white/10 pt-10 sm:gap-12">
                <div v-for="stat in stats" :key="stat.label">
                    <dt class="font-display text-3xl font-bold text-white sm:text-4xl">{{ stat.value }}</dt>
                    <dd class="mt-1 text-sm text-white/50">{{ stat.label }}</dd>
                </div>
            </dl>
        </div>

        <div class="pointer-events-none absolute inset-0 -z-10 hidden overflow-hidden lg:block" aria-hidden="true">
            <div
                class="animate-float absolute left-[8%] top-[30%] h-32 w-48 rounded-2xl border border-white/10 bg-linear-to-br from-violet-600/30 to-fuchsia-600/20 backdrop-blur-md"
            />
            <div
                class="animate-float absolute right-[10%] top-[25%] h-28 w-40 rounded-2xl border border-cyan-500/20 bg-linear-to-br from-cyan-600/20 to-blue-600/10 backdrop-blur-md"
                style="animation-delay: 1s"
            />
            <div
                class="animate-float absolute bottom-[20%] left-[20%] h-24 w-36 rounded-2xl border border-amber-500/20 bg-linear-to-br from-amber-600/20 to-orange-600/10 backdrop-blur-md"
                style="animation-delay: 2s"
            />
        </div>
    </section>
</template>
