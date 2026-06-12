"use strict";

{
    /**
     * スマホヘッダーメニュー用
     */
    let headerMenu = document.getElementById("header-menu");
    let headerMenuBody = document.getElementById("header-menu-body");

    headerMenu.addEventListener('click', function() {
        let menuLbl = this.querySelector('.menu-lbl');
        if (!this.classList.contains('is-close')) {
            this.classList.add('is-close');
            menuLbl.innerHTML= 'close';
            headerMenuBody.classList.add('is-active');
        } else {
            this.classList.remove('is-close');
            menuLbl.innerHTML= 'menu';
            headerMenuBody.classList.remove('is-active');
        }
    });

    /**
     * 下のメニュー用
     */
    let underMenu = document.getElementById("under-menu");
    let underMenuBody = document.getElementById("under-menu-body");

    underMenu.addEventListener('click', function() {
        let underMenuLbl = this.querySelector('.under-menu-lbl');
        if (!this.classList.contains('is-close')) {
            this.classList.add('is-close');
            underMenuLbl.innerHTML= 'close';
            underMenuBody.classList.add('is-active');
        } else {
            this.classList.remove('is-close');
            underMenuLbl.innerHTML= 'menu';
            underMenuBody.classList.remove('is-active');
        }
    });

    /**
   * ドロップダウンメニュー用アコーディオン
   */
    let dmSubMenuTriggers = document.querySelectorAll('.js-dm-sub-menu-trigger');

    dmSubMenuTriggers.forEach(function (trigger) {
        trigger.addEventListener('click', function () {
            let subMenu = this.parentElement.querySelector('.dm-sub-menu');

            if (subMenu) {
                if (subMenu.classList.contains('is-open')) {
                    subMenu.style.maxHeight = '0px';
                    subMenu.classList.remove('is-open');
                    this.classList.remove('is-active');
                    } else {
                    subMenu.style.maxHeight = 'none';
                    let scrollHeight = subMenu.scrollHeight;
                    subMenu.style.maxHeight = '0px';

                    requestAnimationFrame(function () {
                        subMenu.style.maxHeight = scrollHeight + 'px';
                        subMenu.classList.add('is-open');
                        trigger.classList.add('is-active');
                    });
                }
            }
        });
    });
}