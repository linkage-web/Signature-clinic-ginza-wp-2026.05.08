gsap.registerPlugin(ScrollTrigger);

/**
 * MINORS DOWNLOAD アニメーション
 */
let MINORS_DOWNLOAD = gsap.timeline({ 
    scrollTrigger: { 
        trigger: "#minors-download", 
        start: "top 80%", 
        toggleActions: 'play none none none', 
    }
});

gsap.set('#minors-download .btn-area a', {autoAlpha: 0, y: 30});
gsap.set('#minors-download .popup', {autoAlpha: 0, y: 30});

MINORS_DOWNLOAD
.to('#minors-download .btn-area a', 1, {autoAlpha: 1, y: 0})
.to('#minors-download .popup ', 1, {autoAlpha: 1, y: 0}, "-=1")