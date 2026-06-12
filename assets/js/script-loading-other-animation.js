let LOADING = gsap.timeline();

gsap.set("#loading .container #loading-logo", {autoAlpha: 0, y: 30});
gsap.set("#loading", {autoAlpha: 1});

LOADING
.to('#loading .container #loading-logo', 0.5, { autoAlpha: 1, y:0 })
.to('#loading', 1, { autoAlpha: 0}, "+=0.4");