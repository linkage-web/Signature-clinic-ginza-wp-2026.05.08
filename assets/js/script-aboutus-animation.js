gsap.registerPlugin(ScrollTrigger);

/**
 * ABOUT SIGNATURE CLINICのアニメーション
 */
let ABOUT_SIG = gsap.timeline({ 
    scrollTrigger: { 
        trigger: "#about-signature-clinic", 
        start: "top 30%", 
        toggleActions: 'play none none none', 
    }
});

gsap.set('#about-signature-clinic .container .title', {autoAlpha: 0, y: 50});
gsap.set('#about-signature-clinic .container .contents', {autoAlpha: 0, y: 50});

ABOUT_SIG
.to('#about-signature-clinic .container .title', 1.2, {autoAlpha: 1, y: 0})
.to('#about-signature-clinic .container .contents', 1.2, {autoAlpha: 1, y: 0}, "-=1.2")


/**
 * ABOUT SIGNATURE CLINICのアニメーション
 */
let HOS_DIRE = gsap.timeline({ 
    scrollTrigger: { 
        trigger: "#hospital-director", 
        start: "top 40%", 
        toggleActions: 'play none none none', 
    }
});

gsap.set('#hospital-director .container .contents .wrap', {autoAlpha: 0,});
gsap.set('#hospital-director .container .contents .career', {autoAlpha: 0,});

HOS_DIRE
.to('#hospital-director .container .contents .wrap', 2, {autoAlpha: 1, y: 0})
.to('#hospital-director .container .contents .career', 2, {autoAlpha: 1, y: 0}, "-=2")

