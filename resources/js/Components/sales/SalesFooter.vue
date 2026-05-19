<script setup lang="ts">
import AppButton from '@/Components/ui/AppButton.vue';

defineProps<{ ctaUrl: string }>();
</script>

<template>
    <footer class="border-t border-white/10 px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="rounded-3xl border border-white/10 bg-[#13131f] px-8 py-14 text-center sm:px-12">
                <h2 class="font-display text-3xl font-bold text-white sm:text-4xl">
                    Ready to create without another subscription?
                </h2>
                <p class="mx-auto mt-4 max-w-xl text-white/55">
                    Join Prompt Edit — the marketplace where creators access every AI tool they need, pay as they go, and ship faster.
                </p>
                <div class="mt-8">
                    <AppButton :href="ctaUrl" size="lg">Click to get started today</AppButton>
                </div>
            </div>

            <div class="mt-12 flex flex-col items-center justify-between gap-4 border-t border-white/10 pt-8 text-sm text-white/40 sm:flex-row">
                <p>&copy; {{ new Date().getFullYear() }} Prompt Edit. All rights reserved.</p>
                <nav class="flex flex-wrap justify-center gap-6" aria-label="Legal">
                    <a href="#" class="hover:text-white/70">Terms</a>
                    <a href="#" class="hover:text-white/70">Privacy</a>
                    <a href="mailto:support@contentcreator.com" class="hover:text-white/70">Support</a>
                </nav>
            </div>
        </div>
    </footer>
</template>
