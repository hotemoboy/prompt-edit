<script setup lang="ts">
import { ref } from 'vue';
import type { FaqItem } from '@/types/sales';
import SectionHeading from '@/Components/sales/SectionHeading.vue';

defineProps<{ faqs: FaqItem[] }>();

const openIndex = ref<number | null>(0);

const toggle = (index: number): void => {
    openIndex.value = openIndex.value === index ? null : index;
};
</script>

<template>
    <section id="faq" class="px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-3xl">
            <SectionHeading
                eyebrow="FAQ"
                title="Common questions"
                align="center"
            />
            <div class="mt-12 divide-y divide-white/10 rounded-2xl border border-white/10 bg-[#13131f]">
                <div v-for="(faq, index) in faqs" :key="faq.question">
                    <h3>
                        <button
                            type="button"
                            class="flex w-full items-center justify-between gap-4 px-6 py-5 text-left text-white transition-colors hover:text-violet-300"
                            :aria-expanded="openIndex === index"
                            @click="toggle(index)"
                        >
                            <span class="font-semibold">{{ faq.question }}</span>
                            <svg
                                class="h-5 w-5 shrink-0 text-white/50 transition-transform duration-200"
                                :class="openIndex === index ? 'rotate-180' : ''"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                    </h3>
                    <div
                        v-show="openIndex === index"
                        class="px-6 pb-5 text-white/60"
                    >
                        {{ faq.answer }}
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
