    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-grid">
            <div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" style="font-size: 1.5rem; font-weight: 700; text-decoration: none; color: var(--text-primary); display: block; margin-bottom: 16px;">DevPortfolio.</a>
                <p style="color: var(--text-secondary); margin-bottom: 24px;">Membangun sistem yang handal, cepat, dan mudah dikembangkan secara terstruktur.</p>
                <div style="display: flex; gap: 16px;">
                    <a href="#" aria-label="GitHub" style="color: var(--text-secondary);"><i data-lucide="github"></i></a>
                    <a href="#" aria-label="LinkedIn" style="color: var(--text-secondary);"><i data-lucide="linkedin"></i></a>
                    <a href="#" aria-label="YouTube" style="color: var(--text-secondary);"><i data-lucide="youtube"></i></a>
                </div>
            </div>
            <div>
                <h3 style="margin-bottom: 20px;">Quick Links</h3>
                <ul style="list-style: none;">
                    <li style="margin-bottom: 12px;"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" style="color: var(--text-secondary); text-decoration: none;">About Me</a></li>
                    <li style="margin-bottom: 12px;"><a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" style="color: var(--text-secondary); text-decoration: none;">Services</a></li>
                    <li style="margin-bottom: 12px;"><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" style="color: var(--text-secondary); text-decoration: none;">Blog</a></li>
                    <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" style="color: var(--text-secondary); text-decoration: none;">Contact</a></li>
                </ul>
            </div>
            <div>
                <h3 style="margin-bottom: 20px;">Layanan</h3>
                <ul style="list-style: none;">
                    <li style="margin-bottom: 12px;"><span style="color: var(--text-secondary);">Backend Development</span></li>
                    <li style="margin-bottom: 12px;"><span style="color: var(--text-secondary);">System Integration</span></li>
                    <li style="margin-bottom: 12px;"><span style="color: var(--text-secondary);">Database Architecture</span></li>
                </ul>
            </div>
        </div>
        <div class="container footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Nama Anda. Dibuat dengan HTML5, SCSS, dan Vanilla JS.</p>
        </div>
    </footer>

    <?php wp_footer(); ?>

    <!-- JavaScript -->
    <script>
        // Ensure Lucide loads correctly
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }

        // Dark Mode
        const themeToggle = document.getElementById('theme-toggle');
        const currentTheme = localStorage.getItem('theme') || 'light';
        const setTheme = (theme) => {
            document.documentElement.setAttribute('data-theme', theme);
            localStorage.setItem('theme', theme);
            if(themeToggle) {
                themeToggle.innerHTML = theme === 'dark' ? '<i data-lucide="sun"></i>' : '<i data-lucide="moon"></i>';
            }
            if (typeof lucide !== 'undefined') lucide.createIcons();
        };
        setTheme(currentTheme);
        if(themeToggle) {
            themeToggle.addEventListener('click', () => {
                const theme = document.documentElement.getAttribute('data-theme');
                setTheme(theme === 'light' ? 'dark' : 'light');
            });
        }

        // Mobile Menu
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.getElementById('nav-menu');
        if(hamburger && navMenu) {
            hamburger.addEventListener('click', () => navMenu.classList.toggle('active'));
        }

        // Scroll Reveal & Skill Bar Animation
        const revealElements = document.querySelectorAll('.reveal');
        const revealOnScroll = () => {
            const windowHeight = window.innerHeight;
            revealElements.forEach(el => {
                const elementTop = el.getBoundingClientRect().top;
                if (elementTop < windowHeight - 80) {
                    el.classList.add('active');
                    const progressBars = el.querySelectorAll('.skill-progress');
                    if (progressBars) {
                        progressBars.forEach(bar => {
                            bar.style.width = bar.getAttribute('data-width');
                        });
                    }
                }
            });
        };
        window.addEventListener('scroll', revealOnScroll);
        revealOnScroll(); // Trigger on load
        
        // FAQ Accordion Logic Khusus Halaman About
        const faqQuestions = document.querySelectorAll('.faq-question');
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                question.classList.toggle('active');
                const answer = question.nextElementSibling;
                if(answer) answer.classList.toggle('active');
            });
        });
    </script>
</body>
</html>
