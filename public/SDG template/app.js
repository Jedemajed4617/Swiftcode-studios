window.onload = function() {
    const sliders = document.querySelector('.gallery').children;
    let isDown = false;
    let startX;
    let scrollLeft;

    for (let i = 0; i < sliders.length; i++) {
        const slider = sliders[i];

        slider.addEventListener('mousedown', e => {
            isDown = true;
            slider.classList.add('active');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', _ => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mouseup', _ => {
            isDown = false;
            slider.classList.remove('active');
        });

        slider.addEventListener('mousemove', e => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const SCROLL_SPEED = 3;
            const walk = (x - startX) * SCROLL_SPEED;
            slider.scrollLeft = scrollLeft - walk;
        });
    }
};