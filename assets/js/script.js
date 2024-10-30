$(document).ready(function() {
    $('.destination-card').hover(function() {
        $(this).find('.overlay').fadeIn();
    }, function() {
        $(this).find('.overlay').fadeOut();
    });
});
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 250) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});