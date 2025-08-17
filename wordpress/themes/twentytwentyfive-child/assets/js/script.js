 window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.custom');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });