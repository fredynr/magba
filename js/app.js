let lastScrollTop = 0;
const contentMenu = document.getElementById('content-menu');

window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    if (scrollTop > 100 && scrollTop > lastScrollTop) {
        contentMenu.classList.add("hidden-menu");
    } else if (scrollTop < lastScrollTop) {
        contentMenu.classList.remove("hidden-menu");
        contentMenu.classList.add("menu-show")
    }

    if(scrollTop < 100){
        contentMenu.classList.remove("menu-show")
    }

    lastScrollTop = scrollTop;
});


//GSAP
gsap.registerPlugin(SplitText);
gsap.registerPlugin(ScrollTrigger)

gsap.from(".g-h1-header", {
    x: -100,
    opacity: 0,
    duration: 3,
    ease: "elastic.out(1,0.3)"
})

gsap.from("#content-menu li", {
    y: -100,
    ease: "power3.out",
    duration: .5,
    stagger: .20
})

gsap.from(".servicios--bg", {
    opacity: 0,
    scale: 0,
    duration: 2,
    stagger: .30,
    scrollTrigger: {
        trigger: ".servicios",
        start: "top center",
        end: "bottom top",
        toggleActions: "play reverse play reverse",
    }
})

gsap.from(".g-btn-cita", {
    y:-300,
    opacity:0,
    rotate:180,
    duration:.40,
    delay:2
})
