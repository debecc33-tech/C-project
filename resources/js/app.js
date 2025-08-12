import './bootstrap';
import Swiper from 'swiper';
import { Autoplay, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';

/*
 * 1. Hero Swiper Handler
 */
class HeroSwiperHandler {
    constructor() {
        this.initialize();
    }

    initialize() {
        this.swiper = new Swiper('.hero-swiper', {
            modules: [Autoplay, Pagination],
            loop: true,
            slidesPerView: 1,
            speed: 800,
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            }
        });
    }
}

/*
 * 2. Navbar Effect Handler
 */
class NavbarEffectHandler {
    constructor() {
        this.navbar = document.getElementById('navbar');
        if (this.navbar) {
            this.initialize();
        }
    }

    handleScroll = () => {
        if (window.scrollY > 100) {
            this.navbar.classList.add('scrolled');
        } else {
            this.navbar.classList.remove('scrolled');
        }
    };

    initialize() {
        window.addEventListener('scroll', this.handleScroll);
    }
}


/*
 * 3. Mobile Menu Handler
 */
class MobileMenuHandler {
    constructor() {
        this.elements = {
            menu: document.querySelector('.mobile-menu'),
            overlay: document.querySelector('.mobile-menu-overlay'),
            toggleButton: document.querySelector('.mobile-menu-toggle'),
            closeButton: document.querySelector('.mobile-menu-close')
        };

        if (!this.elements.menu || !this.elements.toggleButton) return;
        
        this.isOpen = false;
        this.addEventListeners();
    }

    addEventListeners() {
        // Toggle menu
        this.elements.toggleButton.addEventListener('click', (e) => {
            e.stopPropagation();
            this.toggleMenu(true);
        });

        // Close button
        this.elements.closeButton?.addEventListener('click', (e) => {
            e.stopPropagation();
            this.toggleMenu(false);
        });

        // Close on overlay click
        this.elements.overlay?.addEventListener('click', () => this.toggleMenu(false));

        // Close on clicking outside
        document.addEventListener('click', (e) => {
            if (this.isOpen && !this.elements.menu.contains(e.target)) {
                this.toggleMenu(false);
            }
        });
        
        // Close on escape key
        window.addEventListener('keydown', e => {
            if (e.key === 'Escape' && this.isOpen) this.toggleMenu(false);
        });
        
        // Close on desktop view
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024 && this.isOpen) this.toggleMenu(false);
        });

        //  menu clicks from closing
        this.elements.menu.addEventListener('click', (e) => e.stopPropagation());
    }

    toggleMenu(show) {
        this.isOpen = show;
        document.body.style.overflow = show ? 'hidden' : '';
        
        if (show) {
            this.elements.menu.classList.remove('translate-x-full');
            this.elements.overlay?.classList.remove('opacity-0', 'pointer-events-none');
            
            // Menu animation
            requestAnimationFrame(() => {
                this.elements.menu.style.transform = 'translateX(0)';
                this.elements.overlay.style.opacity = '1';
            });
        } else {
            this.elements.menu.style.transform = 'translateX(100%)';
            this.elements.overlay.style.opacity = '0';
            
            // dealy before close menu for animation
            setTimeout(() => {
                if (!this.isOpen) {
                    this.elements.menu.classList.add('translate-x-full');
                    this.elements.overlay?.classList.add('opacity-0', 'pointer-events-none');
                }
            }, 300);
        }
    }

    /**
     * Initializes all event listeners
     */
    initialize() {
        // Click events
        this.button?.addEventListener('click', this.openMenu);
        this.closeBtn?.addEventListener('click', this.closeMenu);
        this.overlay?.addEventListener('click', this.closeMenu);

        // Global events
        document.addEventListener('keydown', this.handleKeyboard);
        window.addEventListener('resize', this.handleResize);
    }
}

/*
 * 4. Back To Top Handler
 */
class BackToTopHandler {
    constructor() {
        this.button = document.getElementById('backToTop');
        if (this.button) {
            this.initialize();
        }
    }

    handleScroll = () => {
        if (window.pageYOffset > 300) {
            this.button.classList.remove('opacity-0', 'invisible');
            this.button.classList.add('opacity-100', 'visible');
        } else {
            this.button.classList.add('opacity-0', 'invisible');
            this.button.classList.remove('opacity-100', 'visible');
        }
    };

    scrollToTop = () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    };

    initialize() {
        window.addEventListener('scroll', this.handleScroll);
        this.button.addEventListener('click', this.scrollToTop);
    }
}


/*
  5. Main Initialization
  Initialize all components when the DOM is fully loaded
 */
document.addEventListener('DOMContentLoaded', () => {
    new HeroSwiperHandler();    
    new NavbarEffectHandler();  
    new BackToTopHandler();    
    new MobileMenuHandler();    
});
