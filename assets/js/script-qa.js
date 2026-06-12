"use strict";

{
    let qaCards = document.querySelectorAll(".qa-card");

    qaCards.forEach(function(e) {
        e.addEventListener('click', function () {
            e.classList.toggle('is-active');
        })
    });
}