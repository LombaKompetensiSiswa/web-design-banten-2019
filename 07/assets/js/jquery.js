const navSlide = () => {
    const bars = document.querySelector('.bars');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    bars.addEventListener('click', () => {
        nav.classList.toggle('nav-active');

        navLinks.forEach((link, index) => {
            if(link.style.animation){
                link.style.animation = ``;
            }else{
                link.style.animation = `NavLinksFade 0.5s forwards ${index / 7 + 5}s`;
            }
        });
    });
}
navSlide();