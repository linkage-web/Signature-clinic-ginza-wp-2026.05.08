// Home FV Thumbnail Swiper
document.addEventListener('DOMContentLoaded', function () {
  const thumbContainerSel = '.js-home-fv-thumbnail-swiper';
  const thumbWrapperSel = `${thumbContainerSel} .swiper-wrapper`;
  const nextBtnSel = '.js-home-fv-thumbnail-next';
  const prevBtnSel = '.js-home-fv-thumbnail-prev';
  const btnWrapper = document.querySelector('.home-fv-thumbnail-button-wrapper');

  const thumbWrapperEl = document.querySelector(thumbWrapperSel);
  const mainSwiperEl = document.querySelector('.main-swiper');

  if (!thumbWrapperEl || !mainSwiperEl) {
    console.warn('Required swiper elements not found');
    return;
  }

  const nextBtn = document.querySelector(nextBtnSel);
  const prevBtn = document.querySelector(prevBtnSel);

  const origEls = Array.from(thumbWrapperEl.children);
  if (origEls.length === 0) {
    console.warn('No thumbnail slides found');
    return;
  }

  const ORIGINAL_COUNT = origEls.length;
  origEls.forEach((el, i) => el.setAttribute('data-real-index', String(i)));
  const ORIGINAL_HTMLS = origEls.map((el) => el.outerHTML);

  const isPc = window.matchMedia('(min-width: 769px)').matches;
  const DISPLAY_PER_VIEW = isPc ? 4 : 3;

  let syncLock = false;
  let suppressPrepend = false;
  let fromThumbClick = false;
  let fromArrowClick = false;
  let mainReady = false;
  let thumbsSwiper;
  let THUMBS_STATIC_MODE = false;

  function pickNearestIndexBidirectional(swiper, realIndex) {
    if (!swiper || !swiper.slides) return 0;

    const slides = swiper.slides;
    const total = slides.length;
    const base = swiper.activeIndex || 0;
    let best = -1,
      bestDist = Infinity;

    for (let i = 0; i < total; i++) {
      const slide = slides[i];
      if (!slide) continue;

      const r = Number(slide.getAttribute('data-real-index'));
      if (r !== realIndex) continue;
      const fwd = (i - base + total) % total;
      const bwd = (base - i + total) % total;
      const dist = Math.min(fwd, bwd);
      if (dist < bestDist) {
        best = i;
        bestDist = dist;
      }
    }
    return best === -1 ? base : best;
  }

  function slideThumbsToLeftByRealIndex(swiper, realIndex, duration = 300) {
    if (!swiper) return;

    if (THUMBS_STATIC_MODE) {
      if (swiper.slides && swiper.slides.length > 0) {
        swiper.activeIndex = Math.max(0, Math.min(realIndex, swiper.slides.length - 1));
        updateThumbActiveClass(swiper);
      }
      return;
    }
    const target = pickNearestIndexBidirectional(swiper, realIndex);
    swiper.slideTo(target, duration, false);
  }

  function ensureBuffers(swiper) {
    if (!swiper || THUMBS_STATIC_MODE) return;

    const view = typeof swiper.params.slidesPerView === 'number' ? swiper.params.slidesPerView : 3;
    const BUFFER_RIGHT = view + 2;
    const BUFFER_LEFT = 2;
    const total = swiper.slides.length;
    const idx = swiper.activeIndex;

    if (total - (idx + view) < BUFFER_RIGHT) {
      swiper.appendSlide(ORIGINAL_HTMLS);
    }
    if (!suppressPrepend && idx < BUFFER_LEFT) {
      swiper.prependSlide(ORIGINAL_HTMLS);
      swiper.slideTo(idx + ORIGINAL_COUNT, 0, false);
    }
  }

  function getLeftmostRealIndex(swiper) {
    if (!swiper || !swiper.slides) return 0;
    const s = swiper.slides[swiper.activeIndex || 0];
    return s ? Number(s.getAttribute('data-real-index')) || 0 : 0;
  }

  function updateThumbActiveClass(swiper) {
    if (!swiper || !swiper.slides) return;

    const slides = swiper.slides;
    const a = swiper.activeIndex || 0;
    for (let i = 0; i < slides.length; i++) {
      const slide = slides[i];
      if (slide) {
        slide.classList.toggle('is-active', i === a);
      }
    }
  }

  if (ORIGINAL_COUNT < DISPLAY_PER_VIEW) {
    THUMBS_STATIC_MODE = true;

    thumbWrapperEl.innerHTML = ORIGINAL_HTMLS.join('');
    const container = document.querySelector(thumbContainerSel);
    if (container) {
      container.classList.add('no-swiper');
    }
    btnWrapper?.classList.add('is-disabled', 'swiper-initialized', 'is-static');

    thumbsSwiper = {
      slides: Array.from(thumbWrapperEl.children),
      activeIndex: 0,
      params: { slidesPerView: DISPLAY_PER_VIEW },
      slideTo: () => {},
      appendSlide: () => {},
      prependSlide: () => {},
      on: () => {},
    };
  } else {
    const HEAD_CLONES = 1;
    const TAIL_CLONES = 2;

    let rebuilt = '';
    for (let i = 0; i < HEAD_CLONES; i++) rebuilt += ORIGINAL_HTMLS.join('');
    rebuilt += ORIGINAL_HTMLS.join('');
    for (let i = 0; i < TAIL_CLONES; i++) rebuilt += ORIGINAL_HTMLS.join('');
    thumbWrapperEl.innerHTML = rebuilt;

    thumbsSwiper = new Swiper('.js-home-fv-thumbnail-swiper', {
      loop: false,
      speed: 400,
      spaceBetween: 17,
      slidesPerView: 3,
      slidesPerGroup: 1,
      centeredSlides: false,
      watchOverflow: false,
      slideToClickedSlide: false,
      resistanceRatio: 0,
      allowTouchMove: false,
      simulateTouch: false,
      preventClicks: false,
      preventClicksPropagation: false,
      shortSwipes: false,
      longSwipes: false,
      navigation: {
        nextEl: '.js-home-fv-thumbnail-next',
        prevEl: '.js-home-fv-thumbnail-prev',
      },
      breakpoints: {
        769: { slidesPerView: 4, spaceBetween: 12 },
      },
      initialSlide: ORIGINAL_COUNT * HEAD_CLONES,
      on: {
        init(swiper) {
          btnWrapper?.classList.add('swiper-initialized');
          suppressPrepend = true;
          ensureBuffers(swiper);
          updateThumbActiveClass(swiper);
          suppressPrepend = false;
        },
        slideChange(swiper) {
          ensureBuffers(swiper);
          updateThumbActiveClass(swiper);

          if (fromThumbClick) return;
          if (mainReady && !syncLock) {
            const realLeft = getLeftmostRealIndex(swiper);
            syncLock = true;
            if (mainSwiper) {
              mainSwiper.slideToLoop(realLeft, 500, false);
            }
            syncLock = false;
          }
        },
        resize(swiper) {
          ensureBuffers(swiper);
          updateThumbActiveClass(swiper);
        },
      },
    });
  }

  const mainSwiper = new Swiper('.main-swiper', {
    loop: true,
    speed: 700,
    effect: 'fade',
    fadeEffect: { crossFade: true },
    allowTouchMove: false,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    on: {
      init(swiper) {
        mainReady = true;
        syncLock = true;
        slideThumbsToLeftByRealIndex(thumbsSwiper, swiper.realIndex ?? 0, 0);
        ensureBuffers(thumbsSwiper);
        updateThumbActiveClass(thumbsSwiper);
        syncLock = false;
      },
      slideChange(swiper) {
        if (fromThumbClick) {
          fromThumbClick = false;
          return;
        }
        if (syncLock) return;
        syncLock = true;
        slideThumbsToLeftByRealIndex(thumbsSwiper, swiper.realIndex, 300);
        ensureBuffers(thumbsSwiper);
        updateThumbActiveClass(thumbsSwiper);
        syncLock = false;
      },
    },
  });

  thumbWrapperEl.addEventListener('click', (evt) => {
    const clickedEl = evt.target.closest(`${thumbContainerSel} .swiper-slide`);
    if (!clickedEl) return;

    const real = Number(clickedEl.getAttribute('data-real-index'));
    if (Number.isNaN(real) || syncLock) return;

    evt.preventDefault();
    evt.stopPropagation();

    syncLock = true;
    suppressPrepend = true;
    fromThumbClick = true;

    if (THUMBS_STATIC_MODE) {
      const slides = Array.from(thumbWrapperEl.children);
      const targetIdx = slides.indexOf(clickedEl);
      thumbsSwiper.activeIndex = targetIdx >= 0 ? targetIdx : 0;
      updateThumbActiveClass(thumbsSwiper);
    } else {
      const view = typeof thumbsSwiper.params.slidesPerView === 'number' ? thumbsSwiper.params.slidesPerView : 3;
      const SAFETY = view + 2;
      const indexOf = (el) => Array.prototype.indexOf.call(thumbsSwiper.slides, el);
      const ahead = indexOf(clickedEl) - thumbsSwiper.activeIndex;
      while (thumbsSwiper.slides.length - (thumbsSwiper.activeIndex + view) < ahead + SAFETY) {
        thumbsSwiper.appendSlide(ORIGINAL_HTMLS);
      }
      const target = indexOf(clickedEl);
      if (target >= 0) thumbsSwiper.slideTo(target, 300, false);
      updateThumbActiveClass(thumbsSwiper);
    }

    if (mainSwiper) {
      mainSwiper.slideToLoop(real, 500, false);
    }

    ensureBuffers(thumbsSwiper);
    suppressPrepend = false;
    syncLock = false;
  });
});

// Home Menu Tab
document.addEventListener('DOMContentLoaded', function () {
  const triggers = document.querySelectorAll('.js-home-menu-tab-trigger');
  const contents = document.querySelectorAll('.js-home-menu-tab-content');

  contents.forEach((content, index) => {
    if (index === 0) {
      content.style.display = 'block';
      content.style.opacity = '1';
    } else {
      content.style.display = 'none';
      content.style.opacity = '0';
    }
  });

  triggers.forEach((trigger, index) => {
    trigger.addEventListener('click', function () {
      triggers.forEach((t) => t.classList.remove('is-active'));

      this.classList.add('is-active');

      contents.forEach((content) => {
        content.style.opacity = '0';
        setTimeout(() => {
          content.style.display = 'none';
        }, 300);
      });

      setTimeout(() => {
        contents[index].style.display = 'block';
        setTimeout(() => {
          contents[index].style.opacity = '1';
        }, 10);
      }, 300);
    });
  });
});

// Home Case Swiper
document.addEventListener('DOMContentLoaded', function () {
  // スライドの数を取得
  const swiperContainer = document.querySelector('.js-home-case-swiper');
  if (!swiperContainer) return;

  const slideCount = swiperContainer.querySelectorAll('.swiper-slide:not(.swiper-slide-duplicate)').length;

  // スライドが0件の場合は初期化しない
  if (slideCount === 0) return;

  // ループモードを有効にするかどうかの判定
  // PC表示のslidesPerView(4)の2倍以上ある場合のみループ有効
  const shouldEnableLoop = slideCount >= 8;

  const swiperConfig = {
    loop: shouldEnableLoop,
    watchOverflow: true,
    observer: true,
    observeParents: true,

    navigation: {
      nextEl: '.home-case-button-next',
      prevEl: '.home-case-button-prev',
    },

    pagination: {
      el: '.home-case-pagination',
      clickable: true,
    },

    breakpoints: {
      0: {
        slidesPerView: 1.2,
        centeredSlides: true,
        spaceBetween: 15,
      },
      769: {
        slidesPerView: 2,
        centeredSlides: false,
        spaceBetween: 15,
      },
      901: {
        slidesPerView: 4,
        centeredSlides: false,
        spaceBetween: 15,
      },
    },
  };

  // ループが有効な場合のみ、ループ関連のオプションを追加
  if (shouldEnableLoop) {
    swiperConfig.loopedSlides = slideCount;
    swiperConfig.loopAdditionalSlides = 2;
  }

  const homeCaseSwiper = new Swiper('.js-home-case-swiper', swiperConfig);
});

// Home Case Risk アコーディオン
document.addEventListener('DOMContentLoaded', function () {
  const riskLabels = document.querySelectorAll('.js-risk-lbl');

  riskLabels.forEach(function (label) {
    label.addEventListener('click', function () {
      this.classList.toggle('is-show');
      const riskText = this.nextElementSibling;
      if (riskText && riskText.classList.contains('js-risk-txt')) {
        riskText.classList.toggle('is-show');
      }
    });
  });
});

// スクロールアニメーション
document.addEventListener('DOMContentLoaded', function () {
  const options = {
    root: null,
    rootMargin: '-20% 0px -20% 0px',
    threshold: 0,
  };
  // ========================

  const targets = document.querySelectorAll('.js-sc-trigger');

  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-show');
      } else {
      }
    });
  }, options);

  targets.forEach(function (target) {
    observer.observe(target);
  });
});
