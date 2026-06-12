gsap.registerPlugin(ScrollTrigger);

/**
 * キャンペーンモニターのアニメーション
 */
if (window.matchMedia('(min-width: 601px)').matches) {
  let CAMPAIGN_MONITOR = gsap.timeline({
    scrollTrigger: {
      trigger: '#campaign-monitor',
      start: 'top 50%',
      toggleActions: 'play none none none',
    },
  });

  gsap.set('#campaign-monitor .container a', { autoAlpha: 0 });

  CAMPAIGN_MONITOR.to('#campaign-monitor .container a', 1, { autoAlpha: 1 });
} else {
  const banners = document.querySelectorAll('#campaign-monitor .container a');
  banners.forEach((target) => {
    let BANNER = gsap.timeline({
      scrollTrigger: {
        trigger: target,
        start: 'top 80%',
        toggleActions: 'play none none none',
      },
    });

    gsap.set(target, { autoAlpha: 0 });

    BANNER.to(target, 1, { autoAlpha: 1 });
  });
}

/**
 * キャンペーンバナーのアニメーション
 */
let CAMPAIGN_BNR = gsap.timeline({
  scrollTrigger: {
    trigger: '.home-campaign-bnr',
    start: 'top 880%',
    toggleActions: 'play none none none',
  },
});

gsap.set('.home-campaign-bnr-list', { autoAlpha: 0 });

CAMPAIGN_BNR.to('.home-campaign-bnr-list', 1, { autoAlpha: 1 });

/**
 * 支払いガイドのアニメーション
 */
let PAYMENT_GUIDE = gsap.timeline({
  scrollTrigger: {
    trigger: '#payment-guide',
    start: 'top 60%',
    toggleActions: 'play none none none',
  },
});

gsap.set('#payment-guide .container', { autoAlpha: 0 });

PAYMENT_GUIDE.to('#payment-guide .container', 1, { autoAlpha: 1 });

/**
 * informationのアニメーション
 */
let INFORMATION = gsap.timeline({
  scrollTrigger: {
    trigger: '#information',
    start: 'top 60%',
    toggleActions: 'play none none none',
  },
});

gsap.set('#information .contents a', { autoAlpha: 0, y: 50 });

INFORMATION.to('#information .contents a', 0.8, { autoAlpha: 1, y: 0, stagger: 0.1 });

/**
 * 当院について１のアニメーション
 */
let ABOUTUS1 = gsap.timeline({
  scrollTrigger: {
    trigger: '#aboutus .container .upper .l-area img',
    start: 'top 90%',
    toggleActions: 'play none none none',
  },
});

gsap.set('#aboutus .container .upper .l-area img', { autoAlpha: 0 });

ABOUTUS1.to('#aboutus .container .upper .l-area img', 1.2, { autoAlpha: 1 });

/**
 * 当院について2のアニメーション
 */
let ABOUTUS2 = gsap.timeline({
  scrollTrigger: {
    trigger: '#aboutus .container .lower .r-area img',
    start: 'top 90%',
    toggleActions: 'play none none none',
  },
});

gsap.set('#aboutus .container .lower .r-area img', { autoAlpha: 0, y: 50 });

ABOUTUS2.to('#aboutus .container .lower .r-area img', 0.8, { autoAlpha: 1, y: 0 });

/**
 * メニューのアニメーション1
 */
if (window.matchMedia('(min-width: 601px)').matches) {
  let MENU1 = gsap.timeline({
    scrollTrigger: {
      trigger: '#menu .container .contents .menu-trouble',
      start: 'top 60%',
      toggleActions: 'play none none none',
    },
  });
  gsap.set('#menu .container .contents .menu-trouble .wrap .m-trouble .trouble-thumb', { autoAlpha: 0 });

  MENU1.to('#menu .container .contents .menu-trouble .wrap .m-trouble .trouble-thumb', 0.8, { autoAlpha: 1 });
} else {
  const troubleThumbs = document.querySelectorAll('#menu .container .contents .menu-trouble .wrap .m-trouble .trouble-thumb');
  troubleThumbs.forEach((target) => {
    let MENU1 = gsap.timeline({
      scrollTrigger: {
        trigger: target,
        start: 'top 90%',
        toggleActions: 'play none none none',
      },
    });

    gsap.set(target, { autoAlpha: 0 });

    MENU1.to(target, 1, { autoAlpha: 1, y: 0 });
  });
}

/**
 * メニューのアニメーション2
 */
if (window.matchMedia('(min-width: 451px)').matches) {
  let MENU2 = gsap.timeline({
    scrollTrigger: {
      trigger: '#menu .container .contents .menu-machine-treatment',
      start: 'top 50%',
      toggleActions: 'play none none none',
    },
  });
  gsap.set('#menu .container .contents .menu-machine-treatment .wrap .m-machine-treatment', { autoAlpha: 0, y: 50 });

  MENU2.to('#menu .container .contents .menu-machine-treatment .wrap .m-machine-treatment', 0.8, { autoAlpha: 1, y: 0 });
} else {
  const machineTreatments = document.querySelectorAll('#menu .container .contents .menu-machine-treatment .wrap .m-machine-treatment');
  machineTreatments.forEach((target) => {
    let MENU2 = gsap.timeline({
      scrollTrigger: {
        trigger: target,
        start: 'top 90%',
        toggleActions: 'play none none none',
      },
    });

    gsap.set(target, { autoAlpha: 0, y: 50 });

    MENU2.to(target, 1, { autoAlpha: 1, y: 0 });
  });
}

/**
 * 症例写真アニメーション
 */
const caseBanners = document.querySelectorAll('#case .container .banner-area a.case-banner');
caseBanners.forEach((target) => {
  let CASE_BANNER = gsap.timeline({
    scrollTrigger: {
      trigger: target,
      start: 'top 100%',
      toggleActions: 'play none none none',
    },
  });

  gsap.set(target, { autoAlpha: 0, y: 50 });

  CASE_BANNER.to(target, 1, { autoAlpha: 1, y: 0 });
});

/**
 * アクセス・クリニック情報のアニメーション
 */
let CLINIC_INFO = gsap.timeline({
  scrollTrigger: {
    trigger: '#clinic-info .container .r-area',
    start: 'top 80%',
    toggleActions: 'play none none none',
  },
});
gsap.set('#clinic-info .container .r-area', { autoAlpha: 0 });

CLINIC_INFO.to('#clinic-info .container .r-area', 1.2, { autoAlpha: 1 });
