document.addEventListener('click', (event) => {
    const control = event.target.closest('[data-scroll-rail]');

    if (! control) {
        return;
    }

    const rail = document.getElementById(control.dataset.scrollRail);

    if (! rail) {
        return;
    }

    const direction = control.dataset.scrollDirection === 'previous' ? -1 : 1;
    const card = rail.querySelector('[data-scroll-card]');
    const gap = Number.parseFloat(getComputedStyle(rail).columnGap) || 0;
    const distance = card ? card.getBoundingClientRect().width + gap : rail.clientWidth * 0.8;

    rail.scrollBy({
        left: direction * distance,
        behavior: 'smooth',
    });
});
