<script setup lang="ts">
import SalesNav from '@/Components/sales/SalesNav.vue';
import SalesFooter from '@/Components/sales/SalesFooter.vue';

defineProps<{
    ctaUrl: string;
}>();
</script>

<template>
    <div class="relative min-h-screen overflow-x-hidden">
        <div
            class="pointer-events-none fixed inset-0 -z-10 mesh-hero"
            aria-hidden="true"
        />
        <SalesNav :cta-url="ctaUrl" />
        <main>
            <slot />
        </main>
        <SalesFooter :cta-url="ctaUrl" />
    </div>
</template>
