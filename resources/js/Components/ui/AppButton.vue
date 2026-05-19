<script setup lang="ts">
withDefaults(
    defineProps<{
        href: string;
        variant?: 'primary' | 'secondary' | 'ghost';
        size?: 'md' | 'lg';
    }>(),
    {
        variant: 'primary',
        size: 'md',
    },
);

const variantClasses: Record<string, string> = {
    primary:
        'bg-linear-to-r from-violet-500 to-fuchsia-500 text-white shadow-lg shadow-violet-500/25 hover:shadow-violet-500/40 hover:brightness-110',
    secondary:
        'border border-white/20 bg-white/5 text-white hover:bg-white/10',
    ghost: 'text-white/80 hover:text-white hover:bg-white/5',
};

const sizeClasses: Record<string, string> = {
    md: 'px-5 py-2.5 text-sm',
    lg: 'px-7 py-3.5 text-base',
};
</script>

<template>
    <a
        :href="href"
        class="inline-flex items-center justify-center gap-2 rounded-full font-semibold transition-all duration-200 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-violet-400"
        :class="[variantClasses[variant], sizeClasses[size]]"
    >
        <slot />
    </a>
</template>
