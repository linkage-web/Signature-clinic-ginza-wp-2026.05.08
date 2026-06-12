gsap.registerPlugin(ScrollTrigger);

/**
 * MENU SKIN アニメーション
 */
const menuTroubles = document.querySelectorAll('#page-menu-trouble .container .page-menu-trouble-each');
menuTroubles.forEach(target => {
    let MENU_TROUBLE = gsap.timeline({ 
        scrollTrigger: { 
            trigger: target, 
            start: "top 80%", 
            toggleActions: 'play none none none', 
        }
    });
    
    gsap.set(target, {autoAlpha: 0, y: 50})
    
    MENU_TROUBLE
    .to(target, 1, {autoAlpha: 1, y: 0})        
});

/**
 * MENU MACHINE アニメーション
 */
let MENU_MACHINE = gsap.timeline({ 
    scrollTrigger: { 
        trigger: "#page-menu-machine .container .page-menu-machine-each", 
        start: "top 80%", 
        toggleActions: 'play none none none', 
    }
});

gsap.set('#page-menu-machine .container .page-menu-machine-each', {autoAlpha: 0, y: 50});

MENU_MACHINE
.to('#page-menu-machine .container .page-menu-machine-each', 1, {autoAlpha: 1, y: 0})


/**
 * MENU TREATMENT アニメーション
 */
let MENU_TREATMENT = gsap.timeline({ 
    scrollTrigger: { 
        trigger: "#page-menu-treatment .container .page-menu-treatment-each", 
        start: "top 80%", 
        toggleActions: 'play none none none', 
    }
});

gsap.set('#page-menu-treatment .container .page-menu-treatment-each', {autoAlpha: 0, y: 50});

MENU_TREATMENT
.to('#page-menu-treatment .container .page-menu-treatment-each', 1, {autoAlpha: 1, y: 0})