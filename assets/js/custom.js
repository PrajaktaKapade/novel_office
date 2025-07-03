// Example: Smooth scroll for "Scroll to know more"
document.addEventListener('DOMContentLoaded', function() {
    var scrollDown = document.querySelector('.scroll-down');
    if(scrollDown){
        scrollDown.addEventListener('click', function(e){
            e.preventDefault();
            window.scrollTo({ top: window.innerHeight, behavior: 'smooth' });
        });
    }
});
