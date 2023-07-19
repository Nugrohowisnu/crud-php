const burgerIcon = document.querySelector('.burger-icon');
const navMenu = document.querySelector('.nav-menu');

burgerIcon.addEventListener('click', () => {
    burgerIcon.classList.toggle('active');
    navMenu.classList.toggle('active');
});
