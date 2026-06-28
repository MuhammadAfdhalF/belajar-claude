/*
 * Navigation module.
 *
 * Small, dependency-free behavior for the navbar:
 *   - toggle the mobile menu open/closed
 *   - close the mobile menu when a nav link is clicked
 *
 * The navbar markup provides the hooks via data attributes:
 *   [data-nav-toggle]  the hamburger button
 *   [data-nav-menu]    the collapsible mobile menu panel
 *   [data-nav-link]    a link inside the mobile menu
 */
export default function initNavigation() {
    const toggle = document.querySelector('[data-nav-toggle]');
    const menu = document.querySelector('[data-nav-menu]');

    // Nothing to wire up if the markup isn't present.
    if (!toggle || !menu) {
        return;
    }

    const open = () => {
        menu.classList.remove('hidden');
        toggle.setAttribute('aria-expanded', 'true');
    };

    const close = () => {
        menu.classList.add('hidden');
        toggle.setAttribute('aria-expanded', 'false');
    };

    toggle.addEventListener('click', () => {
        if (menu.classList.contains('hidden')) {
            open();
        } else {
            close();
        }
    });

    // Close the menu after the user taps a link.
    menu.querySelectorAll('[data-nav-link]').forEach((link) => {
        link.addEventListener('click', close);
    });
}
