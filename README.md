# Prompt Edit — AI Marketplace Sales Page

A performant sales landing page for **Prompt Edit**, an AI tools marketplace where creators access image, video, audio, and in-editor AI without stacking subscriptions.

## Tech stack

- **Laravel 13** — API & server-side rendering via Inertia
- **Vue 3 + TypeScript** — interactive UI components
- **Inertia.js** — SPA-like UX without a separate API layer
- **Tailwind CSS v4** — styling & design tokens
- **PostgreSQL** — primary database (configured in `.env`)
- **AWS S3 / CloudFront** — asset storage & CDN (`config/aws.php`)
- **Typesense** — marketplace search (`config/typesense.php`)

## Getting started

```bash
# PHP dependencies
composer install

# Frontend dependencies (Node 20+)
npm install

# Environment
cp .env.example .env
php artisan key:generate

# Database (PostgreSQL)
createdb prompt_edit
php artisan migrate

# Development
composer run dev
# Or separately:
php artisan serve
npm run dev
```

Visit [http://localhost:8000](http://localhost:8000) for the sales page.

## Sales page structure

Inspired by [contentcreator.com/prompt-edit](https://www.contentcreator.com/prompt-edit) and premium creative marketplaces (Artlist, Epidemic Sound, Motion Array):

| Section | Purpose |
|---------|---------|
| Hero | Value prop + primary CTA |
| Tool marquee | Social proof / supported AI brands |
| Value proposition | “Grocery store for AI” positioning |
| Tool categories | Image, video, audio, plugins |
| How it works | Credits-based model |
| Pricing | Credit pack vs Creator Pro subscription |
| Templates library | 100K+ asset bonus |
| Testimonials | Social proof |
| Audience | Who it's for |
| Guarantee | Money-back policy |
| FAQ | Accordion Q&A |

Content is driven from `config/sales.php` and passed via `SalesPageController`.

## Configuration

| Variable | Description |
|----------|-------------|
| `SALES_CTA_URL` | Primary CTA link (checkout or `#pricing`) |
| `TYPESENSE_*` | Search cluster connection |
| `AWS_*` | S3 bucket & optional CloudFront URL |

## Deploy on Railway

This project requires **PHP 8.4+** (Laravel 13 / Symfony 8). Railway is configured via:

- `.php-version` — `8.4`
- `nixpacks.toml` — `php84`, `php84Packages.composer`, `nodejs_20` (no `"..."` — avoids Node collision)
- `railway.toml` — start command and health check on `/up`

Set these environment variables in Railway:

| Variable | Example |
|----------|---------|
| `APP_KEY` | `base64:...` (run `php artisan key:generate --show`) |
| `APP_ENV` | `production` |
| `APP_DEBUG` | `false` |
| `APP_URL` | `https://your-app.up.railway.app` |
| `DATABASE_URL` | (from Railway PostgreSQL plugin) |

Redeploy after pushing. If the build still uses PHP 8.3, add a Railway variable: `NIXPACKS_PHP_VERSION=8.4`.

Also set `NIXPACKS_PHP_ROOT_DIR=/app/public` so the web server uses Laravel's `public/` directory.

## Build for production

```bash
npm run build
php artisan config:cache
php artisan route:cache
```
