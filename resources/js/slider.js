let active = 0
let offset = 0
const slider = document.querySelector('.slider-slides')
const prevBtn = document.querySelector('.slider-button-prev')
const nextBtn = document.querySelector('.slider-button-next')
const slide = document.querySelectorAll('.slide')
const bullets = document.querySelectorAll('.bullet')

nextBtn.addEventListener('click', function () {
    if (active < slide.length - 1) {
        performClick(1)
    }
})

prevBtn.addEventListener('click', function () {
    if (active > 0) {
        performClick(-1)
    }
})

const performClick = n => {
    for (bullet of bullets) {
        bullet.classList.remove('active')
    }
    active += n
    bullets[active].classList.add('active')
    offset = 100 * active
    slider.style.transform = 'translateX(-' + offset + '%)'


}

bullets.forEach((item, indexDot) => {
    item.addEventListener('click', () => {
        active = indexDot
        performClick(0)
    })
})


