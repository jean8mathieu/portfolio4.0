const header = document.querySelector('[data-header]');
const menuButton = document.querySelector('[data-menu-button]');
const menu = document.querySelector('[data-menu]');

// Solid header background once the page is scrolled.
const updateHeader = () => header?.toggleAttribute('data-scrolled', window.scrollY > 16);
updateHeader();
window.addEventListener('scroll', updateHeader, { passive: true });

// Mobile menu.
const setMenuOpen = (open) => {
    menuButton?.setAttribute('aria-expanded', String(open));
    menu?.toggleAttribute('hidden', !open);
};

menuButton?.addEventListener('click', () => {
    setMenuOpen(menuButton.getAttribute('aria-expanded') !== 'true');
});

menu?.querySelectorAll('a').forEach((link) => link.addEventListener('click', () => setMenuOpen(false)));

window.matchMedia('(min-width: 768px)').addEventListener('change', (event) => {
    if (event.matches) setMenuOpen(false);
});

// Reveal sections as they scroll into view.
const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            revealObserver.unobserve(entry.target);
        }
    });
}, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

document.querySelectorAll('[data-reveal]').forEach((el) => revealObserver.observe(el));

// Highlight the nav link of the section currently on screen.
const navLinks = document.querySelectorAll('[data-nav-link]');

const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (!entry.isIntersecting) return;

        navLinks.forEach((link) => {
            const active = link.getAttribute('href') === `#${entry.target.id}`;
            link.toggleAttribute('data-active', active);
            active ? link.setAttribute('aria-current', 'true') : link.removeAttribute('aria-current');
        });
    });
}, { rootMargin: '-45% 0px -50% 0px' });

document.querySelectorAll('main section[id]').forEach((section) => sectionObserver.observe(section));

// Cursor spotlight on cards (skipped on touch devices).
if (window.matchMedia('(hover: hover)').matches) {
    document.querySelectorAll('.card-glow').forEach((card) => {
        card.addEventListener('pointermove', (event) => {
            const rect = card.getBoundingClientRect();
            card.style.setProperty('--glow-x', `${event.clientX - rect.left}px`);
            card.style.setProperty('--glow-y', `${event.clientY - rect.top}px`);
        });
    });
}
