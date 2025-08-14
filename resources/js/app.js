import './bootstrap';
import Swiper from 'swiper';
import { Autoplay, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'aos/dist/aos.css';
import './animations';

document.addEventListener('DOMContentLoaded', () => {
    
    // Hero Swiper
    new Swiper('.hero-swiper', {
        modules: [Autoplay, Pagination],
        loop: true,
        speed: 800,
        autoplay: { delay: 4000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true }
    });

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