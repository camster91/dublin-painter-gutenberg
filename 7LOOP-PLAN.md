# Dublin Painter — 7-Loop QA & Improvement Plan

## Loop 1: Typography & Spacing Consistency
**Goal**: Unified rhythm across all sections — heading sizes, gaps, margins, padding
- Check every h2 uses clamp() consistently
- Check inter-section spacing (padding top/bottom)
- Check body text line-height consistency
- Check list item spacing
- Add missing paragraph spacing classes if needed

## Loop 2: Button & CTA Unification
**Goal**: Every button looks identically styled across all patterns
- Primary CTA (green fill + white text)
- Secondary CTA (outline)
- Hover states (lift + shadow)
- Active/focus states
- Mobile sticky CTA styling

## Loop 3: Card Hover Effects & Micro-interactions
**Goal**: All cards feel alive and premium
- Service cards: lift + shadow on hover
- Testimonial cards: lift + glow
- Pricing table rows: highlight on hover
- Award cards: subtle scale
- Why Choose cards: icon pulse/color shift

## Loop 4: Mobile-First Responsive Fixes
**Goal**: Site looks premium on all breakpoints
- Check section padding on mobile (< 768px)
- Before/After stack to single column on mobile
- Service cards alternate layout collapse
- Pricing table horizontal scroll
- Service areas pills wrap correctly

## Loop 5: Edge Case & Consistency Fixes
**Goal**: Polish remaining rough edges
- FAQ accordion open/close animation polish
- Process timeline scroll-reveal trigger accuracy
- Dark mode toggle: all sections properly inverted
- Footer links spacing consistency
- Quote CTA dark-mode readability

## Loop 6: Section-Specific Polish
**Goal**: Each section reaches "final" quality
- Service Cards: unify image aspect ratio
- Testimonials: star rating color consistency
- Awards: icon sizing relative to card
- Pricing: currency formatting consistency
- Service Areas: pill hover → active feel

## Loop 7: Final Integration & End-to-End QA
**Goal**: All pages + homepage together
- Verify all 8 pages (home, interior, exterior, commercial, about, gallery, pricing, contact)
- Biome check 0 errors
- Full-page screenshot compare with Next.js
- Performance check (images lazy-loaded?)
- Cross-browser: dark mode toggle persists

---
**QA Gates**:
- After EACH loop: `npx biome check .` must pass 0 errors
- After loops 1,4,7: screenshot comparison
- After loop 7: final commit + push
