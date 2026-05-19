<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import SalesLayout from '@/Layouts/SalesLayout.vue';
import SalesHero from '@/Components/sales/SalesHero.vue';
import ToolMarquee from '@/Components/sales/ToolMarquee.vue';
import ValueProposition from '@/Components/sales/ValueProposition.vue';
import ToolCategories from '@/Components/sales/ToolCategories.vue';
import HowItWorks from '@/Components/sales/HowItWorks.vue';
import PricingSection from '@/Components/sales/PricingSection.vue';
import TemplatesLibrary from '@/Components/sales/TemplatesLibrary.vue';
import Testimonials from '@/Components/sales/Testimonials.vue';
import AudienceSection from '@/Components/sales/AudienceSection.vue';
import GuaranteeBanner from '@/Components/sales/GuaranteeBanner.vue';
import FaqSection from '@/Components/sales/FaqSection.vue';
import type { SalesPageProps } from '@/types/sales';

defineProps<SalesPageProps>();
</script>

<template>
    <SalesLayout :cta-url="ctaUrl">
        <Head title="Prompt Edit — AI Marketplace for Creators" />
        <SalesHero :cta-url="ctaUrl" />
        <ToolMarquee :logos="toolLogos" />
        <ValueProposition />
        <ToolCategories :categories="categories" />
        <HowItWorks />
        <PricingSection :plans="plans" :cta-url="ctaUrl" />
        <TemplatesLibrary
            :categories="templateCategories"
            :gallery="templateGallery"
            :cta-url="ctaUrl"
        />
        <Testimonials :testimonials="testimonials" />
        <AudienceSection :cta-url="ctaUrl" />
        <GuaranteeBanner />
        <FaqSection :faqs="faqs" />
    </SalesLayout>
</template>
