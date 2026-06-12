gsap.registerPlugin(ScrollTrigger);

/**
 * CLINIC ACCESS アニメーション
 */
let CLINIC_ACCESS = gsap.timeline({ 
    scrollTrigger: { 
        trigger: "#clinic-access", 
        start: "top 60%", 
        toggleActions: 'play none none none', 
    }
});

gsap.set('#clinic-access .container .contents figure', {autoAlpha: 0, y: 50});

CLINIC_ACCESS
.to('#clinic-access .container .contents figure', 1, {autoAlpha: 1, y: 0})

/**
 * CLINIC MAP アニメーション
 */
let CLINIC_MAP = gsap.timeline({ 
    scrollTrigger: { 
        trigger: "#clinic-map", 
        start: "top 60%", 
        toggleActions: 'play none none none', 
    }
});

gsap.set('#clinic-map .container .contents figure', {autoAlpha: 0, y: 50});

CLINIC_MAP
.to('#clinic-map .container .contents figure', 1, {autoAlpha: 1, y: 0})