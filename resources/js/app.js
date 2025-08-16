import './bootstrap';

// Lazy load non-critical resources
const loadSwiper = async () => {
    const [{ default: Swiper }, { Autoplay, Pagination, Navigation }] = await Promise.all([
        import('swiper'),
        import('swiper/modules')
    ]);
    
    // Load CSS dynamically
    const loadCSS = (href) => {
        const link = document.createElement('link');
        link.rel = 'stylesheet';
        link.href = href;
        document.head.appendChild(link);
    };
    
    loadCSS('/node_modules/swiper/swiper.css');
    loadCSS('/node_modules/swiper/modules/pagination.css');
    loadCSS('/node_modules/swiper/modules/navigation.css');
    
    return { Swiper, Autoplay, Pagination, Navigation };
};

// Load animations and AOS when needed
const loadAnimations = () => import('./animations');

// Load FontAwesome when needed
const loadFontAwesome = () => import('@fortawesome/fontawesome-free/css/all.css');

    
// Mobile Menu - Critical functionality
const menu = document.querySelector('.mobile-menu');
const overlay = document.querySelector('.mobile-menu-overlay');
const toggleBtn = document.querySelector('.mobile-menu-toggle');
const closeBtn = document.querySelector('.mobile-menu-close');

if (menu && toggleBtn) {
    let isOpen = false;

    const toggle = (show) => {
        if (isOpen === show) return;
        isOpen = show;
        document.body.style.overflow = show ? 'hidden' : '';
        menu.style.transform = `translateX(${show ? '0' : '100%'})`;
        if (overlay) {
            overlay.style.opacity = show ? '1' : '0';
            overlay.style.visibility = show ? 'visible' : 'hidden';
        }
    };

    toggleBtn.addEventListener('click', e => { e.stopPropagation(); toggle(true); });
    closeBtn?.addEventListener('click', e => { e.stopPropagation(); toggle(false); });
    overlay?.addEventListener('click', () => toggle(false));
    document.addEventListener('click', e => isOpen && !menu.contains(e.target) && toggle(false));
    window.addEventListener('keydown', e => e.key === 'Escape' && isOpen && toggle(false));
    window.addEventListener('resize', () => window.innerWidth >= 1024 && isOpen && toggle(false));
    menu.addEventListener('click', e => e.stopPropagation());
}

// Initialize Swiper components when DOM is ready
document.addEventListener('DOMContentLoaded', async () => {
    // Load Swiper only when needed
    const { Swiper, Autoplay, Pagination, Navigation } = await loadSwiper();

    // Hero Swiper - Critical
    if (document.querySelector('.hero-swiper')) {
        new Swiper('.hero-swiper', {
            modules: [Autoplay, Pagination],
            loop: true,
            speed: 800,
            autoplay: { delay: 4000, disableOnInteraction: false },
            pagination: { el: '.swiper-pagination', clickable: true },
            preloadImages: false,
            lazy: { loadPrevNext: true },
        });
    }

    // Load other Swipers with intersection observer
    const observerOptions = { rootMargin: '50px' };
    
    const projectsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                new Swiper('.projects-swiper', {
                    modules: [Navigation, Autoplay],
                    loop: true,
                    speed: 800,
                    autoplay: { delay: 2000, disableOnInteraction: false, pauseOnMouseEnter: true },
                    grabCursor: true,
                    lazy: { loadPrevNext: true },
                    breakpoints: {
                        640: { slidesPerView: 2 },
                        1024: { slidesPerView: 3, spaceBetween: 32 },
                        1280: { slidesPerView: 3, spaceBetween: 40 }
                    }
                });
                projectsObserver.disconnect();
            }
        });
    }, observerOptions);

    const partnersObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                new Swiper('.partners-swiper', {
                    modules: [Autoplay],
                    loop: true,
                    centeredSlides: true,
                    slidesPerView: 3,
                    spaceBetween: 30,
                    speed: 2000,
                    autoplay: { delay: 0, disableOnInteraction: false },
                    allowTouchMove: false,
                    breakpoints: {
                        320: { slidesPerView: 1 },
                        768: { slidesPerView: 2 },
                        1024: { slidesPerView: 3 }
                    }
                });
                partnersObserver.disconnect();
            }
        });
    }, observerOptions);

    const mediaObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                new Swiper('.media-news-swiper', {
                    modules: [Navigation],
                    slidesPerView: 1,
                    spaceBetween: 30,
                    loop: true,
                    lazy: { loadPrevNext: true },
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    }
                });
                mediaObserver.disconnect();
            }
        });
    }, observerOptions);

    // Observe elements
    const projectsEl = document.querySelector('.projects-swiper');
    const partnersEl = document.querySelector('.partners-swiper');
    const mediaEl = document.querySelector('.media-news-swiper');
    
    if (projectsEl) projectsObserver.observe(projectsEl);
    if (partnersEl) partnersObserver.observe(partnersEl);
    if (mediaEl) mediaObserver.observe(mediaEl);

    // Load animations when scrolling starts
    let animationsLoaded = false;
    const loadAnimationsOnScroll = () => {
        if (!animationsLoaded) {
            loadAnimations();
            loadFontAwesome();
            animationsLoaded = true;
            window.removeEventListener('scroll', loadAnimationsOnScroll);
        }
    };
    window.addEventListener('scroll', loadAnimationsOnScroll, { passive: true });
});
