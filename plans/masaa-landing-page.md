# Masaa Foundation Landing Page

## Context

The project currently has no public-facing frontend — only a Filament admin panel at `/admin`. We need a modern, elegant landing page for "مؤسسة مسـعي" (Masaa Foundation) that showcases the charity, its impact, and provides a donation UI. The primary color is `#CB3223` (warm red) with shades 50–950. Content is Arabic (RTL). Must support dark/light mode.

---

## File Structure

### Create
```
resources/views/layouts/landing.blade.php
resources/views/landing.blade.php
resources/views/components/landing/navbar.blade.php
resources/views/components/landing/hero.blade.php
resources/views/components/landing/about.blade.php
resources/views/components/landing/statistics.blade.php
resources/views/components/landing/services.blade.php
resources/views/components/landing/active-cases.blade.php
resources/views/components/landing/donation.blade.php
resources/views/components/landing/testimonials.blade.php
resources/views/components/landing/footer.blade.php
app/Http/Controllers/LandingController.php
resources/js/landing.js
```

### Modify
```
resources/css/app.css              → add primary color palette + Alexandria font
routes/web.php                     → point / to LandingController
vite.config.js                     → add resources/js/landing.js entry
```

---

## Color Palette (`@theme` in app.css)

Base: `#CB3223`

| Token | Hex |
|-------|-----|
| `--color-primary-50` | `#FEF2F1` |
| `--color-primary-100` | `#FDE3E1` |
| `--color-primary-200` | `#FCC9C5` |
| `--color-primary-300` | `#F9A29B` |
| `--color-primary-400` | `#F46D62` |
| `--color-primary-500` | `#CB3223` |
| `--color-primary-600` | `#B22A1C` |
| `--color-primary-700` | `#952318` |
| `--color-primary-800` | `#7B2018` |
| `--color-primary-900` | `#681E18` |
| `--color-primary-950` | `#390C08` |

Font: **Alexandria** (Google Fonts) — excellent Arabic readability, wide weight range.

---

## Sections (Each a Blade Component)

### 1. Navbar (`<x-landing.navbar />`)
- Sticky glassmorphism bar (`bg-white/80 dark:bg-gray-950/80 backdrop-blur-lg`)
- Logo + nav links (anchor scroll to sections) + dark mode toggle + "Donate Now" CTA
- Mobile: hamburger → slide-in panel from end side (Alpine.js `x-data`)
- All spacing uses `ps-*`, `pe-*`, `ms-*`, `me-*`

### 2. Hero (`<x-landing.hero />`)
- Full viewport `min-h-screen`, dark gradient overlay (`primary-950/90 → primary-900/70`) over geometric SVG pattern
- Badge pill: "معاً نبني الأمل"
- Heading: `مؤسسة مسعي` (text-5xl md:text-7xl font-black text-white)
- Tagline underneath
- Two CTAs: solid "تبرع الآن" + outline "اعرف المزيد"
- Animated scroll-down chevron at bottom

### 3. About (`<x-landing.about />`) `#about`
- Two-column grid (stacks on mobile)
- Start col: decorative illustration area with `bg-primary-50 dark:bg-primary-950/30`
- End col: section label + heading + description paragraphs
- Two feature cards: "رسالتنا" (Mission) + "رؤيتنا" (Vision) with `border-s-4 border-primary-500`

### 4. Statistics (`<x-landing.statistics />`) `#statistics`
- Full-width gradient band (`bg-gradient-to-bl from-primary-600 via-primary-500 to-primary-700`)
- Four counter cards: families helped, cases resolved, total donations, volunteers
- Numbers animate from 0 → target on scroll (IntersectionObserver + requestAnimationFrame)
- Props: `$stats` array from controller

### 5. Services (`<x-landing.services />`) `#services`
- Two subsections: Case Types + Assistance Types (from DB)
- Grid of cards with `rounded-2xl shadow-sm hover:shadow-lg` transition
- Case types: `border-s-4 border-primary-500` accent
- Assistance types: `border-t-4 border-primary-500` accent
- Props: `$caseTypes`, `$assistanceTypes`

### 6. Active Cases (`<x-landing.active-cases />`) `#cases`
- Subtle bg `bg-gray-50 dark:bg-gray-900/50`
- Grid of DonationTarget cards with:
  - Top gradient strip
  - Type badge (family/case/campaign)
  - Title + truncated description
  - Progress bar (collected/goal)
  - Amount text + "تبرع" button
- Props: `$targets` (active DonationTargets, max 6)
- Fallback: static placeholder cards if DB empty

### 7. Donation (`<x-landing.donation />`) `#donation`
- Split layout: motivational content (start) + form card (end)
- Form card with Alpine.js tabs: عام / عائلة / حالة / حملة
- Preset amount pills (50, 100, 250, 500 EGP) + custom input
- Fields: name, email, phone, anonymous toggle, payment method radio
- Submit button (UI only — no backend, shows static feedback)
- Props: `$targets` for case/campaign selection dropdowns

### 8. Testimonials (`<x-landing.testimonials />`)
- Three static testimonial cards (Arabic content via `__()`)
- Large quotation mark icon in `text-primary-200`
- Quote + person name/role + avatar placeholder

### 9. Footer (`<x-landing.footer />`) `#contact`
- Dark bg `bg-gray-950 text-gray-400` (consistent in both modes)
- Four-column grid: About / Quick Links / Contact / Newsletter
- Bottom bar: copyright + year

---

## Layout (`resources/views/layouts/landing.blade.php`)

```
<html dir="rtl" lang="ar" class="scroll-smooth">
  - Cairo font (Google Fonts CDN)
  - @vite(['resources/css/app.css', 'resources/js/landing.js'])
  - Alpine.js via CDN (not Livewire — static page doesn't need it)
  - <body class="bg-white dark:bg-gray-950 text-gray-900 dark:text-gray-100">
  - <x-landing.navbar /> + <main>{{ $slot }}</main> + <x-landing.footer />
```

Dark mode: class-based, toggled via Alpine + localStorage.

---

## Controller (`LandingController`)

Invokable `__invoke()` method returning `View`:
- Query active DonationTargets (limit 6) with eager-loaded relationships
- Query active CaseTypes and AssistanceTypes
- Compute stats: Family::count(), CharityCase completed count, Donation sum, static volunteer count
- Pass all to `landing` view

---

## JavaScript (`resources/js/landing.js`)

- **Dark mode**: init from localStorage / prefers-color-scheme, toggle `dark` class on `<html>`
- **Counter animation**: IntersectionObserver on stats section, animate 0 → target with requestAnimationFrame
- **Navbar scroll effect**: add shadow/bg change on scroll past hero
- **Smooth scroll offset**: handled by `scroll-mt-20` CSS on each section

Alpine.js handles: mobile menu, donation tabs, amount selection, anonymous toggle.

---

## RTL Rules (enforced throughout)

| Avoid | Use Instead |
|-------|-------------|
| `pl-*` / `pr-*` | `ps-*` / `pe-*` |
| `ml-*` / `mr-*` | `ms-*` / `me-*` |
| `text-left` / `text-right` | `text-start` / `text-end` |
| `left-*` / `right-*` | `start-*` / `end-*` |
| `rounded-l-*` / `rounded-r-*` | `rounded-s-*` / `rounded-e-*` |
| `border-l-*` / `border-r-*` | `border-s-*` / `border-e-*` |
| `space-x-*` | `gap-*` with flex |

---

## Implementation Order

**Phase 1 — Foundation**
1. `resources/css/app.css` — color palette + font
2. `vite.config.js` — add JS entry
3. `resources/js/landing.js` — dark mode, counters, navbar scroll
4. `resources/views/layouts/landing.blade.php` — base HTML shell

**Phase 2 — Structure**
5. `resources/views/components/landing/navbar.blade.php`
6. `resources/views/components/landing/footer.blade.php`
7. `app/Http/Controllers/LandingController.php`
8. `routes/web.php` — update route
9. `resources/views/landing.blade.php` — assemble components

**Phase 3 — Static Sections**
10. Hero
11. About
12. Testimonials

**Phase 4 — Data-Driven Sections**
13. Statistics
14. Services
15. Active Cases
16. Donation

**Phase 5 — Polish**
17. `npm run build` — verify assets compile
18. Test: RTL, dark/light toggle, mobile responsive, all sections render
19. `vendor/bin/pint --dirty --format agent` on PHP files

---

## Verification

1. Run `npm run build` — no compilation errors
2. Visit `/` in browser — full landing page renders in Arabic RTL
3. Toggle dark mode — all sections switch correctly
4. Resize to mobile — hamburger menu works, layout stacks properly
5. Click nav links — smooth scroll to correct sections with navbar offset
6. Statistics counters animate on scroll
7. Donation form tabs switch, amount pills are selectable
8. Run `vendor/bin/pint --dirty --format agent` — passes
