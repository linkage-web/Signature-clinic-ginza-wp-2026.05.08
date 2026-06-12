'use strict';

{
  let caseRisks = document.querySelectorAll('.case .case-risk');
  caseRisks.forEach(function (e) {
    e.addEventListener('click', function () {
      e.classList.toggle('is-active');
    });
  });

  let caseArticleRisk = document.querySelector('#case-detail .container .case-risk');
  caseArticleRisk.addEventListener('click', function () {
    caseArticleRisk.classList.toggle('is-active');
  });
}

// Case Detail Img Swiper
document.addEventListener('DOMContentLoaded', function () {
  const sliderEl = document.querySelector('.js-case-detail-img');
  if (!sliderEl) return;

  const slides = sliderEl.querySelectorAll('.swiper-slide');
  const slideCount = slides.length;

  // 1枚しかなければスライダー化しない
  if (slideCount <= 1) {
    sliderEl.classList.add('is-single'); // 必要ならCSSで装飾
    return;
  }

  const caseSwiper = new Swiper(sliderEl, {
    slidesPerView: 1,
    loop: false,
    autoplay: false,
    navigation: {
      nextEl: sliderEl.querySelector('.js-case-detail-img-next'),
      prevEl: sliderEl.querySelector('.js-case-detail-img-prev'),
    },
    pagination: {
      el: sliderEl.querySelector('.js-case-detail-img-pagination'),
      clickable: true,
    },
  });
});
