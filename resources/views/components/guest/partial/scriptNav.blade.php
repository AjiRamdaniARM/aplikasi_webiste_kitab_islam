<script>
    const menuToggle = document.getElementById('menu-toggle');
    const closeMenu = document.getElementById('close-menu');
    const mobileMenu = document.getElementById('mobile-menu');

    // Function to disable scroll
    function disableScroll() {
        document.body.style.overflow = 'hidden';
    }

    // Function to enable scroll
    function enableScroll() {
        document.body.style.overflow = 'auto';
    }

    // Show mobile menu and disable scroll
    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.remove('-translate-x-full');
        disableScroll();
    });

    // Hide mobile menu and enable scroll
    closeMenu.addEventListener('click', () => {
        mobileMenu.classList.add('-translate-x-full');
        enableScroll();
    });


    // component sistem splahscreen
    function showSplashAndRedirect(url) {
    // Tampilkan splash screen
    const splashScreen = document.getElementById('splash-screen');
    splashScreen.classList.remove('hidden');

    // Delay sebelum redirect
    setTimeout(() => {
        window.location.href = url;
    }, 2000); // 2000ms = 2 detik
}

</script>