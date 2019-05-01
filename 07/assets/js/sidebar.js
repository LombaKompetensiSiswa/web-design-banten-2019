const navSlide = () => {
    const bars = document.querySelector('.bars');
    const sidebar = document.querySelector('.sidebar');

    bars.addEventListener('click', () => {
        sidebar.classList.toggle('sidebar-active');
        bars.classList.toggle('toggle');
    }); 
}
navSlide();