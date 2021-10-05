const modalBtn1 = document.querySelector('.modal-btn-1');
const modalBtn2 = document.querySelector('.modal-btn-2');
const modal1 = document.querySelector('.modal-overlay-1');
const modal2 = document.querySelector('.modal-overlay-2');
const closeBtn1 = document.querySelector('.close-btn-1');
const closeBtn2 = document.querySelector('.close-btn-2');



modalBtn1.addEventListener('click', function() {
    modal1.classList.add('open-modal');
    document.body.style.overflow = 'hidden';
    modal1.style.overflow = 'auto';
});

modalBtn2.addEventListener('click', function() {
    modal2.classList.add('open-modal');
    document.body.style.overflow = 'hidden';
    modal2.style.overflow = 'auto';
});

closeBtn1.addEventListener('click', function() {
    modal1.classList.remove('open-modal');
    document.body.style.overflow = 'auto';
})


closeBtn2.addEventListener('click', function() {
    modal2.classList.remove('open-modal');
    document.body.style.overflow = 'auto';
})