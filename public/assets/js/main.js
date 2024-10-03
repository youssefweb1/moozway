// === loading ===
gsap.fromTo(
    ".loading-page",
    { opacity: 1 },
    {
        opacity: 0,
        display: "none",
        duration: 1.5,
        delay: 1.5,
    }
);

// === language ===
const languageToggle = document.getElementById('language-toggle');
const languageDropdown = document.getElementById('language-dropdown');
languageToggle.addEventListener('click', () => {
    languageDropdown.classList.toggle('hidden');
});
function changeLanguage(language) {
    window.location.href = `/lang/${language}`;
}


// === top ===
const scrollToTopButton = document.getElementById('scrollToTop');
window.addEventListener('scroll', () => {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopButton.style.display = "block";
    } else {
        scrollToTopButton.style.display = "none";
    }
});
scrollToTopButton.addEventListener('click', (event) => {
    event.preventDefault();
    gsap.to(window, {
        scrollTo: 0,
        duration: 1,
        ease: "power2.in"
    });
});

// === sidebar ===
const menuToggle = document.getElementById('menu-toggle');
const sidebar = document.getElementById('sidebar');
const overlay = document.getElementById('overlay');
const closeSidebar = document.getElementById('close-sidebar');
menuToggle.addEventListener('click', () => {
    sidebar.classList.toggle('translate-x-full');
    overlay.classList.toggle('hidden');
});
overlay.addEventListener('click', () => {
    sidebar.classList.add('translate-x-full');
    overlay.classList.add('hidden');
});
closeSidebar.addEventListener('click', () => {
    sidebar.classList.add('translate-x-full');
    overlay.classList.add('hidden');
});



// === active ===
document.addEventListener("DOMContentLoaded", function () {
    let currentHash = window.location.hash;
    let currentPath = window.location.pathname;
    if (currentPath === '/' && currentHash === '') {
        currentHash = '#about';
    }
    let links = document.querySelectorAll('.nav-li, .nav-li-active');
    links.forEach(link => {
        link.classList.remove('nav-li-active');
        link.classList.remove('nav-li');
        let linkPath = new URL(link.href).pathname;
        let linkHash = new URL(link.href).hash;
        if (linkPath === currentPath && linkHash === currentHash) {
            link.classList.add('nav-li-active');
        } else {
            link.classList.add('nav-li');
        }
    });
    window.addEventListener('hashchange', function () {
        currentHash = window.location.hash;
        currentPath = window.location.pathname;
        if (currentPath === '/' && currentHash === '') {
            currentHash = '#about';
        }
        links.forEach(link => {
            link.classList.remove('nav-li-active');
            link.classList.remove('nav-li');

            let linkPath = new URL(link.href).pathname;
            let linkHash = new URL(link.href).hash;

            if (linkPath === currentPath && linkHash === currentHash) {
                link.classList.add('nav-li-active');
            } else {
                link.classList.add('nav-li');
            }
        });
    });
});
window.onscroll = function () {
    var nav = document.getElementById("main-nav");

    if (window.scrollY > 50) {
        gsap.to(nav, { duration: 0.5, y: 0, backgroundColor: '#FFF', boxShadow: '0px 4px 12px rgba(0, 0, 0, 0.1)', ease: 'power3.out' });
        nav.classList.add("fixed-nav");
    } else {
        gsap.to(nav, { duration: 0.5, y: 0, backgroundColor: 'transparent', boxShadow: 'none', ease: 'power3.out' });
        nav.classList.remove("fixed-nav");
    }
};







