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


// === clients ===
function changeClient(imageSrc, name, position, feedback, imgElement) {
    document.getElementById('clientImage').src = imageSrc;
    document.getElementById('clientName').textContent = name;
    document.getElementById('clientPosition').textContent = position;
    document.getElementById('clientFeedback').textContent = feedback;

    const clientImages = document.querySelectorAll('.client-image');
    clientImages.forEach(img => {
        img.classList.add('grayscale');
        img.classList.remove('sm:w-[178px]', 'sm:h-[192px]');
        img.classList.add('sm:w-[136px]', 'sm:h-[146px]', 'w-[77.939px]', 'h-[84px]');
    });

    imgElement.classList.remove('grayscale');
    imgElement.classList.add('sm:w-[178px]', 'sm:h-[192px]');
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



// === animation ===
document.addEventListener("DOMContentLoaded", function () {
    gsap.registerPlugin(ScrollTrigger);

    setTimeout(function () {
        gsap.from("#sec1 .rounded-full", {
            scale: 0,
            opacity: 0,
            duration: 1.5,
            ease: "elastic.out(1, 0.5)",
            scrollTrigger: {
                trigger: "#sec1",
                start: "top 80%",
            }
        });

        gsap.from("#sec1 p", {
            opacity: 0,
            duration: 1.5,
            ease: "power3.in",
            scrollTrigger: {
                trigger: "#sec1",
                start: "top 70%",
            }
        });

        gsap.from("#sec1 button", {
            opacity: 0,
            y: 50,
            scale: 0.8,
            duration: 1.2,
            ease: "back.out(1.1)",
            scrollTrigger: {
                trigger: "#sec1",
                start: "top 60%",
            }
        });

        gsap.from("#sec2 .logo", {
            opacity: 0,
            scale: 0,
            duration: 1.5,
            ease: "elastic.out(1, 0.5)",
            stagger: 0.3,
            scrollTrigger: {
                trigger: "#sec2",
                start: "top 80%",
            }
        });

        gsap.from("#sec3 h6", {
            opacity: 0,
            y: -50,
            duration: 1,
            ease: "power3.out",
            scrollTrigger: {
                trigger: "#sec3",
                start: "top 80%",
            }
        });

        gsap.from("#sec3 p", {
            opacity: 0,
            y: 50,
            duration: 1.2,
            ease: "power2.out",
            scrollTrigger: {
                trigger: "#sec3",
                start: "top 75%",
            }
        });

        gsap.from(".project", {
            opacity: 0,
            y: 50,
            scale: 0.8,
            duration: 1.2,
            ease: "power2.out",
            stagger: 0.3,
            scrollTrigger: {
                trigger: "#sec4",
                start: "top 75%",
            }
        });

        gsap.from("#sec5 h6", {
            opacity: 0,
            y: -50,
            duration: 1.2,
            ease: "power3.out",
            scrollTrigger: {
                trigger: "#sec5",
                start: "top 80%",
            }
        });

        gsap.from("#sec5 p", {
            opacity: 0,
            y: 50,
            duration: 1.5,
            ease: "power2.out",
            scrollTrigger: {
                trigger: "#sec5",
                start: "top 70%",
            }
        });

    }, 1505);
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