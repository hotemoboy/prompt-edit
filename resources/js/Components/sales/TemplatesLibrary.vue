<script setup lang="ts">
import { computed, ref } from 'vue';
import type { TemplateCategory, TemplateGalleryItem } from '@/types/sales';
import SectionHeading from '@/Components/sales/SectionHeading.vue';
import TemplateGalleryCard from '@/Components/sales/TemplateGalleryCard.vue';
import AppButton from '@/Components/ui/AppButton.vue';

const props = defineProps<{
    categories: TemplateCategory[];
    gallery: TemplateGalleryItem[];
    ctaUrl: string;
}>();

const activeFilter = ref<string>('all');

const filters = computed(() => [
    { id: 'all', label: 'All templates', emoji: '✦' },
    ...props.categories.map((c) => ({ id: c.id, label: c.title, emoji: c.emoji })),
]);

const filteredGallery = computed(() => {
    if (activeFilter.value === 'all') {
        return props.gallery;
    }
    return props.gallery.filter((item) => item.categoryId === activeFilter.value);
});

const activeCategory = computed(() =>
    props.categories.find((c) => c.id === activeFilter.value),
);
</script>

<template>
    <section id="templates" class="border-t border-white/10 px-4 py-20 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <SectionHeading
                eyebrow="Creator Pro bonus"
                title="Browse the template library"
                subtitle="100,000+ LUTs, SFX, titles, overlays, and backgrounds — professionally designed and ready to drag into any editor."
                align="center"
            />

            <!-- Category stats strip -->
            <div class="mt-12 flex gap-3 overflow-x-auto pb-2 scrollbar-none">
                <div
                    v-for="cat in categories"
                    :key="cat.id"
                    class="flex shrink-0 items-center gap-3 rounded-xl border border-white/10 bg-[#13131f] px-4 py-3"
                >
                    <span class="text-xl" aria-hidden="true">{{ cat.emoji }}</span>
                    <div>
                        <p class="font-display text-lg font-bold text-violet-300">{{ cat.count }}</p>
                        <p class="text-xs text-white/50">{{ cat.title }}</p>
                    </div>
                </div>
            </div>

            <!-- Filter pills -->
            <div
                class="mt-10 flex flex-wrap items-center justify-center gap-2"
                role="tablist"
                aria-label="Filter templates by category"
            >
                <button
                    v-for="filter in filters"
                    :key="filter.id"
                    type="button"
                    role="tab"
                    :aria-selected="activeFilter === filter.id"
                    class="inline-flex items-center gap-2 rounded-full border px-4 py-2 text-sm font-medium transition-all duration-200"
                    :class="
                        activeFilter === filter.id
                            ? 'border-violet-500/50 bg-violet-500/20 text-white shadow-lg shadow-violet-500/10'
                            : 'border-white/10 bg-white/5 text-white/60 hover:border-white/20 hover:text-white'
                    "
                    @click="activeFilter = filter.id"
                >
                    <span aria-hidden="true">{{ filter.emoji }}</span>
                    {{ filter.label }}
                </button>
            </div>

            <!-- Active filter context -->
            <p
                v-if="activeCategory"
                class="mt-6 text-center text-sm text-white/50"
            >
                {{ activeCategory.description }}
            </p>
            <p v-else class="mt-6 text-center text-sm text-white/50">
                Showing a preview of assets included with Creator Pro — unlimited downloads, any editor.
            </p>

            <!-- Masonry gallery -->
            <div
                class="template-gallery mt-10"
                role="list"
            >
                <TemplateGalleryCard
                    v-for="item in filteredGallery"
                    :key="item.id"
                    :item="item"
                />
            </div>

            <!-- Empty state -->
            <p
                v-if="filteredGallery.length === 0"
                class="mt-12 text-center text-white/50"
            >
                No previews in this category yet. Check back soon or browse all templates.
            </p>

            <!-- Bottom CTA bar -->
            <div class="mt-14 overflow-hidden rounded-2xl border border-violet-500/20 bg-linear-to-r from-violet-600/10 via-[#13131f] to-cyan-600/10 p-8 sm:flex sm:items-center sm:justify-between sm:gap-8 sm:p-10">
                <div class="text-center sm:text-left">
                    <p class="font-display text-xl font-bold text-white sm:text-2xl">
                        Unlimited downloads. Every category.
                    </p>
                    <p class="mt-2 text-sm text-white/55">
                        Works with Premiere, DaVinci, Final Cut, CapCut, and more.
                    </p>
                </div>
                <div class="mt-6 flex shrink-0 justify-center sm:mt-0">
                    <AppButton :href="ctaUrl" size="lg">
                        Unlock full library
                    </AppButton>
                </div>
            </div>
        </div>
    </section>
</template>
