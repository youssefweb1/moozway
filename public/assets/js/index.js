
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

// === animation ===
document.addEventListener("DOMContentLoaded", function () {
    gsap.registerPlugin(ScrollTrigger);

    setTimeout(function () {
        gsap.from("#about .rounded-full", {
            scale: 0,
            opacity: 0,
            duration: 1.5,
            ease: "elastic.out(1, 0.5)",
            scrollTrigger: {
                trigger: "#about",
                start: "top 80%",
            }
        });

        gsap.from("#about p", {
            opacity: 0,
            duration: 1.5,
            ease: "power3.in",
            scrollTrigger: {
                trigger: "#about",
                start: "top 70%",
            }
        });

        gsap.from("#about button", {
            opacity: 0,
            y: 50,
            scale: 0.8,
            duration: 1.2,
            ease: "back.out(1.1)",
            scrollTrigger: {
                trigger: "#about",
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


