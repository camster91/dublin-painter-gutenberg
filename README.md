# Dublin Painter — WordPress Block Theme

A professional painting contractor website built with WordPress Full Site Editing (Gutenberg Block Editor). No page builders — pure code-first, version-controlled WordPress blocks and patterns.

**[Live Demo (WordPress Playground)](https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/camster91/dublin-painter-gutenberg/main/blueprint.json)**

---

## Quick Start

### Local Development

```bash
# Clone into your WordPress themes directory
cd wp-content/themes/
git clone https://github.com/camster91/dublin-painter-gutenberg.git dublin-painter
```

Or with DDEV:

```bash
ddev config --project-type=wordpress
ddev start
git clone https://github.com/camster91/dublin-painter-gutenberg.git wp-content/themes/dublin-painter
# Activate in: Appearance → Themes
```

### WordPress Playground (instant, no install)

Open in browser:
```
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/camster91/dublin-painter-gutenberg/main/blueprint.json
```

---

## What's Built

### 15 Block Patterns
Patterns are pre-built page sections using core Gutenberg blocks. Add them from **Appearance → Editor → Patterns**.

| Pattern | Description |
|---------|-------------|
| `hero` | Full-width hero with main_hero.jpg, gradient overlay, heading, CTA buttons |
| `trust-badges` | 4-column stats: 500+ projects, 10+ years, 100% satisfaction, 5★ |
| `service-cards` | 3 service cards (Interior, Exterior, Commercial) with images |
| `process-timeline` | 5-step numbered process (Consultation → Quote → Schedule → Work → Final) |
| `before-after` | Interactive before/after slider using the custom `[before-after-slider]` block |
| `testimonials` | 3-column testimonial grid with star ratings |
| `pricing` | 3-tier pricing cards (Interior €35/m², Exterior €45/m², Commercial Custom) |
| `service-areas` | Dark section — Dublin area pills (24 Dublin city/county areas) |
| `faq` | 5-question FAQ accordion (uses theme color variables) |
| `quote-cta` | Dark CTA band with free quote prompt |
| `about-intro` | About page hero with team image, values grid (Trusted, Local, Professional, Guaranteed) |
| `service-hero` | Service page cover section for interior/exterior/commercial pages |
| `contact-section` | Two-column: quote form (7-step estimator) + business details sidebar |
| `gallery-grid` | 6-card project grid with category badges (Interior/Exterior/Commercial) |
| `stats-bar` | 4-column animated stats |

### 10 Custom Blocks

| Block | Description |
|-------|-------------|
| `dublin-painter/before-after-slider` | Interactive before/after image slider. Drag handle left/right. Full editor controls. |
| `dublin-painter/quote-form` | 7-step multi-step quote estimator. Calculates real-time price based on service/size/condition. |
| `dublin-painter/faq-accordion` | Expandable FAQ items with `<details>` element |
| `dublin-painter/pricing-table` | 3-tier pricing tier display |
| `dublin-painter/process-timeline` | 5-step numbered process |
| `dublin-painter/service-areas` | Dublin area pills display |
| `dublin-painter/service-features` | 4-column feature cards |
| `dublin-painter/stats-bar` | Stats display (value + label) |
| `dublin-painter/testimonial-grid` | Testimonial cards with star ratings |
| `dublin-painter/trust-badges` | Trust indicator badges |

### 12 Page Templates

| Template | Used For |
|----------|----------|
| `home.html` | Front page — all major patterns |
| `interior.html` | Interior Painting service page |
| `exterior.html` | Exterior Painting service page |
| `commercial.html` | Commercial Painting service page |
| `about.html` | About Us page |
| `gallery.html` | Portfolio/gallery page |
| `pricing.html` | Pricing page |
| `contact.html` | Contact page |
| `page.html` | Default (generic pages) |
| `index.html` | WordPress index fallback |
| `blank.html` | Blank (for landing pages) |
| `no-title.html` | No page title display |

---

## Theme Configuration

### Customizer Settings (Appearance → Customize)

| Setting | Shortcode | Description |
|---------|-----------|-------------|
| Phone | `[dp_phone]` | Main phone (Click-to-call link) |
| Email | `[dp_email]` | Email address |
| WhatsApp | `[dp_whatsapp]` | WhatsApp chat link |
| Form Endpoint | — | Contact form submission URL |
| Plausible Domain | — | Privacy-friendly analytics |

### Custom Colors (via `theme.json`)
```
brand-blue    #2563EB  — Primary CTA, links, active states
brand-dark    #0F172A  — Headings, dark backgrounds
brand-green   #16A34A  — Checkmarks, success states
brand-light   #F8FAFC  — Light section backgrounds
card-border   #E2E8F0  — Borders, dividers
dark-card     #1E293B  — Dark card backgrounds
text-primary  #0F172A  — Body text
text-secondary #64748B — Muted text, captions
text-light    #CBD5E1  — Light text on dark backgrounds
```

---

## Development

### Requirements
- WordPress 6.4+
- PHP 8.0+
- Node.js (for linting only)

### Linting
```bash
# Lint all .js, .css, .json files (biome)
npx biome check .

# Auto-fix
npx biome check --write .
```

### File Structure
```
dublin-painter-wp-gutenberg/
├── theme.json          # WordPress design system (colors, typography, spacing)
├── style.css           # Theme header
├── functions.php       # Theme setup, block/pattern registration, shortcodes
├── index.php           # Fallback template
├── patterns.php       # Block pattern registration
├── blueprint.json     # WordPress Playground setup
├── biome.json         # Linter config
├── screenshot.png     # Theme screenshot (required)
├── templates/         # Page templates (FSE)
├── parts/             # Template parts (header.html, footer.html)
├── blocks/            # Custom blocks (10 directories)
│   ├── before-after-slider/
│   ├── quote-form/
│   └── [8 more blocks]/...
├── patterns/          # Block patterns (15 PHP files)
├── assets/
│   ├── fonts/         # Inter-Variable.woff2
│   ├── images/        # 27 project photos + hero images
│   ├── css/           # global.css (animations, mobile CTA, print)
│   └── js/            # main.js (mobile nav, smooth scroll)
└── node_modules/      # biome only
```

### Adding Pages in WordPress Admin
1. **Pages → Add New** → Enter title (e.g., "Interior Painting")
2. In **Page Attributes** sidebar, select template (e.g., "Interior Painting")
3. Publish — the template applies automatically

### Adding Patterns
1. Open **Appearance → Editor** (Site Editor)
2. Click **+** to insert a block
3. Go to **Patterns** tab → scroll to **Dublin Painter** section
4. Click any pattern to insert at cursor position

---

## Content Mapping (Next.js → WordPress)

| Next.js Component | WordPress Equivalent |
|-------------------|---------------------|
| `hero.tsx` | `patterns/hero.php` |
| `trust-badges.tsx` | `patterns/trust-badges.php` + `blocks/trust-badges` |
| `service-features.tsx` | `patterns/service-cards.php` |
| `our-process.tsx` | `patterns/process-timeline.php` + `blocks/process-timeline` |
| `before-after-slider.tsx` | `blocks/before-after-slider/` (interactive) |
| `testimonial-grid.tsx` | `patterns/testimonials.php` + `blocks/testimonial-grid` |
| `pricing.tsx` | `patterns/pricing.php` + `blocks/pricing-table` |
| `service-areas.tsx` | `patterns/service-areas.php` + `blocks/service-areas` |
| `faq-section.tsx` | `patterns/faq.php` + `blocks/faq-accordion` |
| `header.tsx` | `parts/header.html` |
| `footer.tsx` | `parts/footer.html` |
| `quote-form.tsx` | `blocks/quote-form/` (full 7-step interactive) |
| `stats.tsx` | `patterns/stats-bar.php` + `blocks/stats-bar` |

---

## Troubleshooting

### Q: Patterns don't appear in the Editor?
A: Confirm `patterns.php` is being loaded. Check that function `dublin_painter_register_patterns()` exists in `functions.php`.

### Q: Custom blocks don't show in the inserter?
A: Check `functions.php` for `dublin_painter_register_blocks()` function. Ensure the `blocks/` directory is scanned.

### Q: Front page shows a redirect loop?
A: Go to **Settings → Reading** and ensure "Your homepage displays" is set to "A static page". Select the correct page.

### Q: Fonts (Inter) not loading?
A: `theme.json` loads Inter from `assets/fonts/Inter-Variable.woff2`. Ensure that path exists in the theme directory.

### Q: Patterns show as plain HTML in the editor?
A: WordPress renders patterns in the Site Editor as block markup. They display fully on the front-end.

---

## License
GPL-2.0-or-later

---

**Repo:** https://github.com/camster91/dublin-painter-gutenberg  
**Source (Next.js → WordPress):** Dublin Painter Template (Next.js 16 + React 19)