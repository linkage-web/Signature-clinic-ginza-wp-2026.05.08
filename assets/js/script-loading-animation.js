let LOADING = gsap.timeline();

if (window.matchMedia( '(min-width: 501px)' ).matches) {
    gsap.set("#loading .container #loading-logo", {autoAlpha: 0, y: 30});
    gsap.set("#loading", {autoAlpha: 1});
    
    LOADING
    .to('#loading .container #loading-logo', 1, { autoAlpha: 1, y:0 })
    .to('#loading', 1.5, { autoAlpha: 0}, "+=1");
} else {
    gsap.set("#loading .container #loading-logo", {autoAlpha: 0, y: 30});
    gsap.set("#loading", {autoAlpha: 1});
    
    LOADING
    .to('#loading .container #loading-logo', 0.75, { autoAlpha: 1, y:0 })
    .to('#loading', 1.2, { autoAlpha: 0}, "+=0.5");
}