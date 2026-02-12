/**
 * ПОЛНЫЙ СКРИПТ САЙТА <?= $domainTitle ?>
 * Включает: Particle Network, Mobile Menu, Scroll Animations, Form Logic, Cookies
 */

document.addEventListener('DOMContentLoaded', () => {
    
    // --- 1. ИНИЦИАЛИЗАЦИЯ ИКОНОК (LUCIDE) ---
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }

    // --- 2. ИНТЕРАКТИВНЫЙ ФОН HERO (НЕЙРОСЕТЬ НА CANVAS) ---
    const canvas = document.getElementById('hero-canvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let particles = [];
        const particleCount = window.innerWidth < 768 ? 40 : 80;

        const resize = () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        };
        window.addEventListener('resize', resize);
        resize();

        class Particle {
            constructor() { this.reset(); }
            reset() {
                this.x = Math.random() * canvas.width;
                this.y = Math.random() * canvas.height;
                this.vx = (Math.random() - 0.5) * 0.5;
                this.vy = (Math.random() - 0.5) * 0.5;
                this.radius = Math.random() * 1.5 + 1;
            }
            update() {
                this.x += this.vx; this.y += this.vy;
                if (this.x < 0 || this.x > canvas.width) this.vx *= -1;
                if (this.y < 0 || this.y > canvas.height) this.vy *= -1;
            }
        }

        for (let i = 0; i < particleCount; i++) particles.push(new Particle());

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.fillStyle = '#3b82f6';
            ctx.strokeStyle = 'rgba(59, 130, 246, 0.1)';
            
            particles.forEach((p, i) => {
                p.update();
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.radius, 0, Math.PI * 2);
                ctx.fill();
                
                for (let j = i + 1; j < particles.length; j++) {
                    const d = Math.hypot(p.x - particles[j].x, p.y - particles[j].y);
                    if (d < 150) {
                        ctx.lineWidth = 1 - d / 150;
                        ctx.beginPath();
                        ctx.moveTo(p.x, p.y);
                        ctx.lineTo(particles[j].x, particles[j].y);
                        ctx.stroke();
                    }
                }
            });
            requestAnimationFrame(animateParticles);
        }
        animateParticles();
    }

    // --- 3. МОБИЛЬНОЕ МЕНЮ (БУРГЕР) ---
    const burger = document.getElementById('burger-menu');
    const navList = document.querySelector('.nav-list');
    const overlay = document.querySelector('.mobile-overlay');

    if (burger && navList) {
        const toggleMenu = () => {
            burger.classList.toggle('open');
            navList.classList.toggle('active');
            if (overlay) overlay.classList.toggle('active');
            document.body.style.overflow = navList.classList.contains('active') ? 'hidden' : '';
        };

        burger.addEventListener('click', (e) => {
            e.stopPropagation();
            toggleMenu();
        });

        // Закрытие при клике на ссылки или оверлей
        if (overlay) {
            overlay.addEventListener('click', toggleMenu);
        }
        
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', () => {
                if (navList.classList.contains('active')) toggleMenu();
            });
        });
    }

    // --- 4. COOKIE POPUP ---
    const cookiePopup = document.getElementById('cookie-popup');
    const cookieBtn = document.getElementById('cookie-accept');

    if (cookiePopup && cookieBtn) {
        if (!localStorage.getItem('cookies-accepted')) {
            setTimeout(() => { cookiePopup.classList.add('active'); }, 2000);
        }
        cookieBtn.addEventListener('click', () => {
            localStorage.setItem('cookies-accepted', 'true');
            cookiePopup.classList.remove('active');
        });
    }

    // --- 5. FAQ АККОРДЕОН ---
    document.querySelectorAll('.faq-question').forEach(question => {
        question.addEventListener('click', () => {
            const item = question.parentElement;
            document.querySelectorAll('.faq-item').forEach(other => {
                if (other !== item) other.classList.remove('active');
            });
            item.classList.toggle('active');
        });
    });

    // --- 6. КОНТАКТНАЯ ФОРМА + КАПЧА + ВАЛИДАЦИЯ ---
    const contactForm = document.getElementById('contact-form');
    const captchaQuest = document.getElementById('captcha-question');
    const phoneInput = document.getElementById('phone');

    if (contactForm && captchaQuest) {
        // Генерация капчи
        const n1 = Math.floor(Math.random() * 10) + 1;
        const n2 = Math.floor(Math.random() * 10) + 1;
        const correct = n1 + n2;
        captchaQuest.textContent = `${n1} + ${n2}`;

        // Валидация телефона (только цифры и +)
        if (phoneInput) {
            phoneInput.addEventListener('input', (e) => {
                e.target.value = e.target.value.replace(/[^0-9+]/g, '');
            });
        }

        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const userAnswer = parseInt(document.getElementById('captcha-input').value);
            const successMsg = document.getElementById('form-success');
            const submitBtn = document.getElementById('submit-btn');

            if (userAnswer !== correct) {
                alert('Пожалуйста, решите математический пример правильно.');
                return;
            }

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = '<span>Отправка...</span>';
            }

            // Эмуляция AJAX
            setTimeout(() => {
                contactForm.reset();
                if (successMsg) successMsg.classList.add('active');
                
                setTimeout(() => {
                    if (successMsg) successMsg.classList.remove('active');
                    if (submitBtn) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = '<span>Узнать детали</span>';
                    }
                }, 4000);
            }, 1500);
        });
    }

    // --- 7. ГЛУБИННАЯ ПОДГРУЗКА (SCROLL REVEAL С GSAP) ---
    if (typeof gsap !== 'undefined') {
        // Анимация текста в Hero
        gsap.from(".hero-content > *", {
            opacity: 0, 
            y: 30, 
            duration: 0.8, 
            stagger: 0.2, 
            ease: "power2.out"
        });

        // Плавное появление всех карточек и блоков
        const revealItems = document.querySelectorAll('.feature-card, .step-item, .faq-item, .feature-box, .growth-card');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    gsap.to(entry.target, {
                        opacity: 1,
                        y: 0,
                        duration: 0.8,
                        ease: "power2.out"
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        revealItems.forEach(item => {
            gsap.set(item, { opacity: 0, y: 50 });
            observer.observe(item);
        });
    }

    // --- 8. ПЛАВНЫЙ СКРОЛЛ ПО ЯКОРЯМ ---
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
});