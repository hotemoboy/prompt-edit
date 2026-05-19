export interface ToolUseCase {
    label: string;
}

export interface ToolCategory {
    id: string;
    title: string;
    subtitle: string;
    icon: string;
    gradient: string;
    useCases: ToolUseCase[];
}

export interface PricingPlan {
    id: string;
    name: string;
    price: string;
    period: string | null;
    credits: string;
    badge: string | null;
    highlighted: boolean;
    features: string[];
    cta: string;
}

export interface TemplateCategory {
    id: string;
    title: string;
    count: string;
    description: string;
    emoji: string;
}

export interface TemplateGalleryItem {
    id: string;
    title: string;
    categoryId: string;
    categoryLabel: string;
    preview: 'lut' | 'sfx' | 'text' | 'overlay' | 'background';
    size: 'default' | 'tall' | 'wide';
    accent: string;
}

export interface Testimonial {
    quote: string;
    author: string;
    role: string;
}

export interface FaqItem {
    question: string;
    answer: string;
}

export interface SalesPageProps {
    ctaUrl: string;
    toolLogos: string[];
    categories: ToolCategory[];
    plans: PricingPlan[];
    templateCategories: TemplateCategory[];
    templateGallery: TemplateGalleryItem[];
    testimonials: Testimonial[];
    faqs: FaqItem[];
}
