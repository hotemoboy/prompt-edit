<script setup lang="ts">
import type { Testimonial } from '@/types/sales';
import SectionHeading from '@/Components/sales/SectionHeading.vue';

defineProps<{ testimonials: Testimonial[] }>();
</script>

<template>
    <section class="px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <SectionHeading
                eyebrow="Social proof"
                title="Creators are shipping faster"
                align="center"
            />
            <div class="mt-16 grid gap-6 md:grid-cols-3">
                <blockquote
                    v-for="item in testimonials"
                    :key="item.author"
                    class="flex flex-col rounded-2xl border border-white/10 bg-[#13131f] p-8"
                >
                    <p class="flex-1 text-lg leading-relaxed text-white/80">
                        &ldquo;{{ item.quote }}&rdquo;
                    </p>
                    <footer class="mt-6 border-t border-white/10 pt-6">
                        <cite class="not-italic">
                            <span class="font-semibold text-white">{{ item.author }}</span>
                            <span class="mt-1 block text-sm text-white/50">{{ item.role }}</span>
                        </cite>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>
</template>
