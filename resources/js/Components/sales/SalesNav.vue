<script setup lang="ts">
import { onMounted, onUnmounted, ref } from 'vue';
import AppButton from '@/Components/ui/AppButton.vue';

defineProps<{ ctaUrl: string }>();

const scrolled = ref(false);

const onScroll = (): void => {
    scrolled.value = window.scrollY > 24;
};

onMounted(() => {
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
});

onUnmounted(() => {
    window.removeEventListener('scroll', onScroll);
});

const links = [
    { href: '#tools', label: 'Tools' },
    { href: '#how-it-works', label: 'How it works' },
    { href: '#pricing', label: 'Pricing' },
    { href: '#templates', label: 'Templates' },
    { href: '#faq', label: 'FAQ' },
];
</script>

<template>
    <header
        class="sticky top-0 z-50 transition-all duration-300"
        :class="scrolled ? 'border-b border-white/10 bg-[#07070d]/80 backdrop-blur-xl' : 'bg-transparent'"
    >
        <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-4 sm:px-6 lg:px-8">
            <a href="#" class="group flex items-center gap-2">
                <span
                    class="flex h-9 w-9 items-center justify-center rounded-xl bg-linear-to-br from-violet-500 to-fuchsia-500 text-sm font-bold text-white shadow-lg shadow-violet-500/30"
                >
                    PE
                </span>
                <span class="font-display text-lg font-bold tracking-tight text-white">
                    Prompt<span class="text-violet-400">Edit</span>
                </span>
            </a>

            <nav class="hidden items-center gap-8 md:flex" aria-label="Main">
                <a
                    v-for="link in links"
                    :key="link.href"
                    :href="link.href"
                    class="text-sm text-white/60 transition-colors hover:text-white"
                >
                    {{ link.label }}
                </a>
            </nav>

            <AppButton :href="ctaUrl" size="md">
                Get started
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </AppButton>
        </div>
    </header>
</template>
