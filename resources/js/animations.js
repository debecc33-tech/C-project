import AOS from 'aos';
import 'aos/dist/aos.css';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);
AOS.init({ once: true, offset: 50, duration: 800 });

/* ===================
   Main Animation
   ===================
*/

document.addEventListener('DOMContentLoaded', () => {
    // General scroll animations
    gsap.utils.toArray('[data-scroll]').forEach(el => {
        gsap.fromTo(el, { y: 30, opacity: 0 }, {
            y: 0, opacity: 1, duration: 0.8,
            scrollTrigger: { trigger: el, start: "top 90%", once: true }
        });
    });
});

/*====================
   Why-choose-us section
 ====================
*/
       // counter trigger 
    const counters = document.querySelectorAll('.stat-counter');
    if (counters.length) {
        ScrollTrigger.create({
            trigger: '.why-choose-stats',
            start: 'top 85%',
            once: true,
            onEnter: () => counters.forEach((counter, i) => animateCounter(counter, i * 200))
        });
    }

// Counter animation function
const animateCounter = (el, delay = 0) => {
    setTimeout(() => {
        const target = +el.dataset.target;
        const prefix = el.dataset.prefix;
        gsap.to(el, {
            textContent: target,
            duration: target > 100 ? 2.5 : 2,
            onUpdate() { 
                el.textContent = prefix + Math.round(this.targets()[0].textContent);
            }
        });
    }, delay);
};