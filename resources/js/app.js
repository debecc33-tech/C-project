import './bootstrap';
import Swiper from 'swiper';
import { Autoplay, Pagination, Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';
import 'aos/dist/aos.css';
import './animations';

document.addEventListener('DOMContentLoaded', () => {
    
    // Mobile Menu
    const menu = document.querySelector('.mobile-menu');
    const overlay = document.querySelector('.mobile-menu-overlay');
    const toggleBtn = document.querySelector('.mobile-menu-toggle');
    const closeBtn = document.querySelector('.mobile-menu-close');
    
    if (menu && toggleBtn) {
        let isOpen = false;
        
        const toggle = (show) => {
            isOpen = show;
            document.body.style.overflow = show ? 'hidden' : '';
            menu.style.transform = `translateX(${show ? '0' : '100%'})`;
            if (overlay) overlay.style.opacity = show ? '1' : '0';
        };

        toggleBtn.addEventListener('click', e => { e.stopPropagation(); toggle(true); });
        closeBtn?.addEventListener('click', e => { e.stopPropagation(); toggle(false); });
        overlay?.addEventListener('click', () => toggle(false));
        document.addEventListener('click', e => isOpen && !menu.contains(e.target) && toggle(false));
        window.addEventListener('keydown', e => e.key === 'Escape' && isOpen && toggle(false));
        window.addEventListener('resize', () => window.innerWidth >= 1024 && isOpen && toggle(false));
        menu.addEventListener('click', e => e.stopPropagation());
    }
});

    // Hero Swiper
    new Swiper('.hero-swiper', {
        modules: [Autoplay, Pagination],
        loop: true,
        speed: 800,
        autoplay: { delay: 4000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true }
    });

    // Projects Swiper
new Swiper('.projects-swiper', {
    modules: [Navigation, Autoplay],
    loop: true,
    speed: 800,
    autoplay: { delay: 2000, disableOnInteraction: false, pauseOnMouseEnter: true },
    grabCursor: true,
    on: { init() { this.el.classList.add('group'); } },
    breakpoints: {
        640: { slidesPerView: 2 },
        1024: { slidesPerView: 3, spaceBetween: 32 },
        1280: { slidesPerView: 3, spaceBetween: 40 }
    }
});
// Partners Infinite Loop
new Swiper('.partners-swiper', {
    modules: [Autoplay],
    loop: true,
    centeredSlides: true,
    slidesPerView: 3,
    spaceBetween: 30,
    speed: 2000,
    autoplay: {
        delay: 0,
        disableOnInteraction: false
    },
    allowTouchMove: false,
    breakpoints: {
        320: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 }
    }
});