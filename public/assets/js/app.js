const root = document.documentElement;
const themeToggle = document.querySelector('#theme-toggle');
const menuToggle = document.querySelector('#menu-toggle');
const navLinks = document.querySelector('#nav-links');

function updateThemeIcon() {
    const icon = themeToggle?.querySelector('i');
    if (!icon) return;

    const isDark = root.dataset.theme === 'dark';
    icon.className = isDark ? 'fa-light fa-sun-bright' : 'fa-light fa-moon';
    themeToggle.setAttribute('aria-label', isDark ? 'فعال کردن حالت روشن' : 'فعال کردن حالت تیره');
}

themeToggle?.addEventListener('click', () => {
    const nextTheme = root.dataset.theme === 'dark' ? 'light' : 'dark';
    root.dataset.theme = nextTheme;
    localStorage.setItem('theme', nextTheme);
    updateThemeIcon();
});

menuToggle?.addEventListener('click', () => {
    const isOpen = navLinks.classList.toggle('open');
    menuToggle.setAttribute('aria-expanded', String(isOpen));
    menuToggle.querySelector('i').className = isOpen ? 'fa-light fa-xmark' : 'fa-light fa-bars';
});

navLinks?.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
        navLinks.classList.remove('open');
        menuToggle.setAttribute('aria-expanded', 'false');
        menuToggle.querySelector('i').className = 'fa-light fa-bars';
    });
});

updateThemeIcon();
