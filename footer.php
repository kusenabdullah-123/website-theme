    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-grid">
            <div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo font-lg font-bold no-underline text-primary d-block mb-16">Kusena.Dev</a>
                <p class="text-secondary mb-24">Memberikan solusi IT yang komprehensif, mulai dari pengembangan website hingga dukungan teknis operasional.</p>
                <div class="flex-align-center footer-social">
                    <a href="#" aria-label="GitHub" class="text-secondary"><i data-lucide="github"></i></a>
                    <a href="#" aria-label="LinkedIn" class="text-secondary"><i data-lucide="linkedin"></i></a>
                    <a href="#" aria-label="YouTube" class="text-secondary"><i data-lucide="youtube"></i></a>
                </div>
            </div>
            <div>
                <h3 class="mb-20">Quick Links</h3>
                <ul class="list-none">
                    <li class="mb-12"><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="text-secondary no-underline">About Me</a></li>
                    <li class="mb-12"><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="text-secondary no-underline">Blog</a></li>
                </ul>
            </div>
            <div>
                <h3 class="mb-20">Layanan</h3>
                <ul class="list-none">
                    <li class="mb-12"><span class="text-secondary">Pembuatan Website & Aplikasi</span></li>
                    <li class="mb-12"><span class="text-secondary">Management Server</span></li>
                    <li class="mb-12"><span class="text-secondary">IT Support Offline</span></li>
                </ul>
            </div>
        </div>
        <div class="container footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Kusen A</p>
        </div>
    </footer>

    <?php wp_footer(); ?>

</body>
</html>
