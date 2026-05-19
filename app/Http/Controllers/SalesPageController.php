<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class SalesPageController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('Sales/Index', [
            'ctaUrl' => config('sales.cta_url'),
            'toolLogos' => config('sales.tool_logos'),
            'categories' => config('sales.categories'),
            'plans' => config('sales.plans'),
            'templateCategories' => config('sales.template_categories'),
            'templateGallery' => config('sales.template_gallery'),
            'testimonials' => config('sales.testimonials'),
            'faqs' => config('sales.faqs'),
        ]);
    }
}
