const modal = document.querySelector('.modal')
const modalOverlay = document.querySelector('.modal-overlay')
const modalOpen = document.querySelectorAll('.js-modal-open')
const modalClose = document.querySelector('.js-modal-close')

for(each of modalOpen){
    each.addEventListener('click',()=>{
        modal.classList.add('active')
        modal.style.display = 'unset'
        modalOverlay.classList.add('active')
        console.log('1')
    })
}


modalClose.addEventListener('click',()=>{
    modal.classList.remove('active')
    modalOverlay.classList.remove('active')
    console.log('2')

})

const mobileMenuButton = document.querySelector('.mobile-menu-title')
const mobileMenuIcon = document.querySelector('.mobile-menu-title img')
const mobileMenu = document.querySelector('.mobile-menu')

let clickCounter = 0
mobileMenuButton.addEventListener('click',()=>{
    if(clickCounter%2==0){
        mobileMenu.style.display = 'unset';
        mobileMenuIcon.style.transform = 'rotateX('+180+'deg)'
    }
    else{
        mobileMenu.style.display = 'none';
        mobileMenuIcon.style.transform = 'rotateX(-'+0+'deg)'
    }
    clickCounter+=1
})