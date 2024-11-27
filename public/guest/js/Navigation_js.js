function toggleDropdown() {
    document.getElementById("dropdown").classList.toggle("hidden");
}
window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
        navbar.classList.add('shadow-lg', 'bg-opacity-90', 'backdrop-blur-md');
    } else {
        navbar.classList.remove('shadow-lg', 'bg-opacity-90', 'backdrop-blur-md');
    }
});
document.querySelectorAll('.mobile-menu a').forEach(link => {
    link.addEventListener('click', () => {
        document.getElementById('menu-toggle').checked = false;
    });
});