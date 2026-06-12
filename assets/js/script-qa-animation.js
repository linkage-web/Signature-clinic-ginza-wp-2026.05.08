gsap.registerPlugin(ScrollTrigger);

const qaCardsTreatment = document.querySelectorAll('#treatment-content .qa-card');
qaCardsTreatment.forEach(target => {
    let QA_CARD = gsap.timeline({ 
        scrollTrigger: { 
            trigger: target, 
            start: "top 80%", 
            toggleActions: 'play none none none', 
        }
    });
    
    gsap.set(target, {autoAlpha: 0, y: 50})
    
    QA_CARD
    .to(target, 1, {autoAlpha: 1, y: 0})        
});

const qaCardsReservation = document.querySelectorAll('#reservation-content .qa-card');
qaCardsReservation.forEach(target => {
    let QA_CARD = gsap.timeline({ 
        scrollTrigger: { 
            trigger: target, 
            start: "top 80%", 
            toggleActions: 'play none none none', 
        }
    });
    
    gsap.set(target, {autoAlpha: 0, y: 50})
    
    QA_CARD
    .to(target, 1, {autoAlpha: 1, y: 0})        
});

const qaCardsOther = document.querySelectorAll('#other-content .qa-card');
qaCardsOther.forEach(target => {
    let QA_CARD = gsap.timeline({ 
        scrollTrigger: { 
            trigger: target, 
            start: "top 80%", 
            toggleActions: 'play none none none', 
        }
    });
    
    gsap.set(target, {autoAlpha: 0, y: 50})
    
    QA_CARD
    .to(target, 1, {autoAlpha: 1, y: 0})        
});