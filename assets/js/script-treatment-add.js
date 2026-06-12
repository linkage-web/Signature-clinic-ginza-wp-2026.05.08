// 目次
document.addEventListener('DOMContentLoaded', function () {
  const toggleButton = document.querySelector('.js-treatment-toc-toggle');
  const tocList = document.querySelector('.js-treatment-toc-list');
  if (toggleButton && tocList) {
    toggleButton.addEventListener('click', function () {
      const open = tocList.style.display === 'block';
      tocList.style.display = open ? 'none' : 'block';
      toggleButton.textContent = open ? '【開く】' : '【閉じる】';
    });
  }
});

// 関連コラム
document.addEventListener('DOMContentLoaded', function () {
  const qaCards = document.querySelectorAll('.treatment-qa .qa-card');
  qaCards.forEach(function (card) {
    card.addEventListener('click', function () {
      const isActive = this.classList.contains('is-active');
      qaCards.forEach((c) => c.classList.remove('is-active'));
      if (!isActive) this.classList.add('is-active');
    });
  });
});

// Case Swiper
document.addEventListener('DOMContentLoaded', function () {
  const swiperContainer = document.querySelector('.js-treatment-case-swiper');
  if (!swiperContainer) return;
  const slideCount = swiperContainer.querySelectorAll('.swiper-slide:not(.swiper-slide-duplicate)').length;
  if (slideCount === 0) return;
  const shouldEnableLoop = slideCount >= 8;
  const swiperConfig = {
    loop: shouldEnableLoop,
    watchOverflow: true,
    observer: true,
    observeParents: true,

    navigation: {
      nextEl: '.treatment-case-button-next',
      prevEl: '.treatment-case-button-prev',
    },

    pagination: {
      el: '.treatment-case-pagination',
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

  if (shouldEnableLoop) {
    swiperConfig.loopedSlides = slideCount;
    swiperConfig.loopAdditionalSlides = 2;
  }

  const treatmentCaseSwiper = new Swiper('.js-treatment-case-swiper', swiperConfig);
});

// Case Risk アコーディオン
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

// スムーススクロール
document.addEventListener('DOMContentLoaded', function () {
  const anchorLinks = document.querySelectorAll('a[href^="#"]');
  anchorLinks.forEach(function (link) {
    link.addEventListener('click', function (e) {
      const href = this.getAttribute('href');
      if (href === '#' || href === '') {
        return;
      }
      const targetId = href.substring(1);
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        e.preventDefault();
        if (window.location.hash) {
          history.replaceState(null, '', window.location.pathname + window.location.search);
        }
        const headerOffset = 0;
        const elementPosition = targetElement.getBoundingClientRect().top;
        const offsetPosition = elementPosition + window.pageYOffset - headerOffset;
        window.scrollTo({
          top: offsetPosition,
          behavior: 'smooth',
        });
      }
    });
  });
});
