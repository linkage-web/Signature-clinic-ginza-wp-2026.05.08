"use strict";

{
    /**
     * ポップアップ オープン処理
     */
    let topMenuMachine = document.getElementById('top-menu-machine');
    let topMenuTreatment = document.getElementById('top-menu-treatment');
    let topPopMachine = document.getElementById('top-pop-machine');
    let topPopTreatment = document.getElementById('top-pop-treatment');

    topMenuMachine.addEventListener('click', function() {
        topPopMachine.classList.add('is-active');
    });

    topMenuTreatment.addEventListener('click', function() {
        topPopTreatment.classList.add('is-active');
    });

    /**
     * ポップアップ クローズ処理
     */
    let popMachineOverlay = document.getElementById('pop-machine-overlay');
    let popMachineClose = document.getElementById('pop-machine-close');
    let popTreatmentOverlay = document.getElementById('pop-treatment-overlay');
    let popTreatmentClose = document.getElementById('pop-treatment-close');

    popMachineOverlay.addEventListener('click', function() {
        topPopMachine.classList.remove('is-active');
    });
    popMachineClose.addEventListener('click', function() {
        topPopMachine.classList.remove('is-active');
    });
    
    popTreatmentOverlay.addEventListener('click', function() {
        topPopTreatment.classList.remove('is-active');
    });
    popTreatmentClose.addEventListener('click', function() {
        topPopTreatment.classList.remove('is-active');
    });
}