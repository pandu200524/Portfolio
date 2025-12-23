document.addEventListener('DOMContentLoaded', function() {
    // Loader
    document.body.classList.add('no-scroll');
    
    const letters = ['R', 'E', 'V', 'A', 'N', 'T', 'H'];
    const letterContainer = document.getElementById('letter-container');
    let currentIndex = 0;

    const letterInterval = setInterval(() => {
        currentIndex = (currentIndex + 1) % letters.length;
        letterContainer.textContent = letters[currentIndex];

        letterContainer.style.transform = 'scale(1.2)';
        setTimeout(() => {
            letterContainer.style.transform = 'scale(1)';
        }, 200);
    }, 450);

    setTimeout(() => {
        clearInterval(letterInterval);
        const loader = document.getElementById('loader');
        loader.style.opacity = '0';
        loader.style.transform = 'scale(0.98)';
        document.body.classList.remove('no-scroll');

        setTimeout(() => {
            loader.style.display = 'none';
        }, 600);
    }, 3500);

    // Mobile Navigation
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
        hamburger.innerHTML = navLinks.classList.contains('active') ?
            '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
    });

    // Close mobile menu when clicking a link
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', () => {
            navLinks.classList.remove('active');
            hamburger.innerHTML = '<i class="fas fa-bars"></i>';
        });
    });

    // Particles.js Configuration
    particlesJS('particles-js', {
        "particles": {
            "number": {
                "value": 80,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#FFD700"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                }
            },
            "opacity": {
                "value": 0.3,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 40,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#CCA800",
                "opacity": 0.2,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 2,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            if (targetId === '#') return;

            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Sticky navigation on scroll
    window.addEventListener('scroll', () => {
        const nav = document.querySelector('nav');
        if (window.scrollY > 50) {
            nav.classList.add('scrolled');
        } else {
            nav.classList.remove('scrolled');
        }
    });

    // Form submission with mailto link
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const submitButton = this.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.innerHTML;

            // Show loading state
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitButton.disabled = true;

            // Get form values
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const subject = document.getElementById('subject').value;
            const message = document.getElementById('message').value;

            // Encode values for URL
            const encodedSubject = encodeURIComponent(subject || "Inquiry from Portfolio");
            const encodedBody = encodeURIComponent(
                `Sender Name: ${name}\nSender Email: ${email}\n\nMessage:\n${message}`
            );

            // Create mailto link
            const mailtoLink = `mailto:vrevanth200524@gmail.com?subject=${encodedSubject}&body=${encodedBody}`;

            // Open email client
            window.location.href = mailtoLink;

            // Reset button and form after a short delay
            setTimeout(() => {
                submitButton.innerHTML = originalButtonText;
                submitButton.disabled = false;
                contactForm.reset();
            }, 2000);
        });
    }

    // Animation on scroll
    function animateOnScroll() {
        const elements = document.querySelectorAll('.timeline-item, .project-card, .about-content, .hero-content');

        elements.forEach(element => {
            const elementPosition = element.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.3;

            if (elementPosition < screenPosition) {
                element.style.opacity = '1';
                element.style.transform = 'translateY(0)';
            }
        });
    }

    // Set initial state for animated elements
    document.querySelectorAll('.timeline-item, .project-card, .about-content, .hero-content').forEach(element => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    });

    // Run once on page load
    animateOnScroll();

    // Then run on scroll
    window.addEventListener('scroll', animateOnScroll);

    // View All Card hover effects
    document.querySelectorAll('.view-all-card').forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-8px)';
            this.style.boxShadow = '0 15px 30px -5px rgba(0, 0, 0, 0.15)';
            this.style.borderColor = 'rgba(0, 0, 0, 0.5)';
            const icon = this.querySelector('.project-icon');
            const cta = this.querySelector('.project-cta');
            const arrow = this.querySelector('.project-cta i');
            
            if (icon) icon.style.transform = 'rotate(15deg) scale(1.1)';
            if (icon) icon.style.background = 'var(--primary-dark)';
            if (cta) cta.style.background = 'var(--secondary)';
            if (cta) cta.style.color = 'var(--primary-light)';
            if (arrow) arrow.style.transform = 'translateX(3px)';
        });

        card.addEventListener('mouseleave', function() {
            this.style.transform = '';
            this.style.boxShadow = '';
            this.style.borderColor = 'rgba(0, 0, 0, 0.3)';
            const icon = this.querySelector('.project-icon');
            const cta = this.querySelector('.project-cta');
            const arrow = this.querySelector('.project-cta i');
            
            if (icon) icon.style.transform = '';
            if (icon) icon.style.background = 'var(--primary)';
            if (cta) cta.style.background = 'var(--dark)';
            if (cta) cta.style.color = 'var(--primary)';
            if (arrow) arrow.style.transform = '';
        });
    });

    // Contact form label animation
    document.querySelectorAll('.form-group input, .form-group textarea').forEach(input => {
        input.addEventListener('focus', function() {
            const label = this.previousElementSibling;
            label.style.top = '-0.6rem';
            label.style.left = '0.8rem';
            label.style.fontSize = '0.8rem';
            label.style.color = 'var(--primary-dark)';
            label.style.fontWeight = '500';
        });

        input.addEventListener('blur', function() {
            if (!this.value) {
                const label = this.previousElementSibling;
                label.style.top = '0.8rem';
                label.style.left = '1rem';
                label.style.fontSize = '1rem';
                label.style.color = 'var(--gray)';
                label.style.fontWeight = '400';
            }
        });

        // Initialize labels if input has value
        if (input.value) {
            const label = input.previousElementSibling;
            label.style.top = '-0.6rem';
            label.style.left = '0.8rem';
            label.style.fontSize = '0.8rem';
            label.style.color = 'var(--primary-dark)';
            label.style.fontWeight = '500';
        }
    });
});
