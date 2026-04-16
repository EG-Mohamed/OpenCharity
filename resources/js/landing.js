const root = document.documentElement;
const themeStorageKey = 'masaa-theme';

const setTheme = (theme) => {
    if (theme === 'dark') {
        root.classList.add('dark');
    } else {
        root.classList.remove('dark');
    }

    root.dataset.theme = theme;
    localStorage.setItem(themeStorageKey, theme);
    window.dispatchEvent(new CustomEvent('theme-changed', { detail: theme }));
};

const resolveInitialTheme = () => {
    const storedTheme = localStorage.getItem(themeStorageKey);

    if (storedTheme === 'light' || storedTheme === 'dark') {
        return storedTheme;
    }

    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
};

const initTheme = () => {
    setTheme(resolveInitialTheme());

    window.toggleTheme = () => {
        setTheme(root.classList.contains('dark') ? 'light' : 'dark');
    };

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
        if (localStorage.getItem(themeStorageKey)) {
            return;
        }

        setTheme(event.matches ? 'dark' : 'light');
    });
};

const initNavbar = () => {
    const navbar = document.querySelector('[data-landing-navbar]');

    if (! navbar) {
        return;
    }

    const syncNavbar = () => {
        navbar.dataset.scrolled = window.scrollY > 32 ? 'true' : 'false';
    };

    syncNavbar();
    window.addEventListener('scroll', syncNavbar, { passive: true });
};

const animateCounter = (element) => {
    const target = Number(element.dataset.target || 0);
    const suffix = element.dataset.suffix || '';
    const duration = 1600;
    const start = performance.now();

    const step = (timestamp) => {
        const progress = Math.min((timestamp - start) / duration, 1);
        const eased = 1 - Math.pow(1 - progress, 3);
        const value = Math.round(target * eased);

        element.textContent = new Intl.NumberFormat('ar-EG').format(value) + suffix;

        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };

    window.requestAnimationFrame(step);
};

const initCounters = () => {
    const counters = document.querySelectorAll('[data-counter]');

    if (! counters.length) {
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (! entry.isIntersecting || entry.target.dataset.animated === 'true') {
                return;
            }

            entry.target.dataset.animated = 'true';
            animateCounter(entry.target);
            observer.unobserve(entry.target);
        });
    }, { threshold: 0.4 });

    counters.forEach((counter) => observer.observe(counter));
};

const initSmoothScroll = () => {
    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener('click', (event) => {
            const targetId = anchor.getAttribute('href');

            if (! targetId || targetId === '#') {
                return;
            }

            const target = document.querySelector(targetId);

            if (! target) {
                return;
            }

            event.preventDefault();
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        });
    });
};

document.addEventListener('DOMContentLoaded', () => {
    initTheme();
    initNavbar();
    initCounters();
    initSmoothScroll();
});
