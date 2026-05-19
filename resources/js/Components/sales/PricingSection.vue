<script setup lang="ts">
import type { PricingPlan } from '@/types/sales';
import SectionHeading from '@/Components/sales/SectionHeading.vue';
import AppButton from '@/Components/ui/AppButton.vue';

defineProps<{
    plans: PricingPlan[];
    ctaUrl: string;
}>();
</script>

<template>
    <section id="pricing" class="px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <SectionHeading
                eyebrow="Pricing"
                title="Start lean. Scale when you're ready."
                subtitle="Claim your student credit pack or go all-in with Creator Pro for templates and monthly savings."
                align="center"
            />

            <div class="mt-16 grid gap-8 lg:grid-cols-2 lg:gap-10">
                <article
                    v-for="plan in plans"
                    :key="plan.id"
                    class="relative flex flex-col rounded-3xl border p-8 sm:p-10 transition-all duration-300"
                    :class="
                        plan.highlighted
                            ? 'border-violet-500/50 bg-linear-to-b from-violet-500/10 to-[#13131f] glow-violet scale-[1.02] lg:scale-105'
                            : 'border-white/10 bg-[#13131f]'
                    "
                >
                    <span
                        v-if="plan.badge"
                        class="absolute -top-3 left-8 rounded-full px-3 py-1 text-xs font-bold uppercase tracking-wider"
                        :class="plan.highlighted ? 'bg-violet-500 text-white' : 'bg-white/10 text-white/80'"
                    >
                        {{ plan.badge }}
                    </span>

                    <h3 class="font-display text-2xl font-bold text-white">{{ plan.name }}</h3>
                    <div class="mt-4 flex items-baseline gap-1">
                        <span class="font-display text-5xl font-extrabold text-white">{{ plan.price }}</span>
                        <span v-if="plan.period" class="text-white/50">{{ plan.period }}</span>
                    </div>
                    <p class="mt-2 text-lg font-medium text-violet-300">{{ plan.credits }}</p>

                    <ul class="mt-8 flex-1 space-y-3">
                        <li
                            v-for="feature in plan.features"
                            :key="feature"
                            class="flex items-start gap-3 text-white/70"
                        >
                            <svg class="mt-0.5 h-5 w-5 shrink-0 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            {{ feature }}
                        </li>
                    </ul>

                    <div class="mt-10">
                        <AppButton
                            :href="ctaUrl"
                            :variant="plan.highlighted ? 'primary' : 'secondary'"
                            size="lg"
                        >
                            {{ plan.cta }}
                        </AppButton>
                    </div>
                </article>
            </div>
        </div>
    </section>
</template>
