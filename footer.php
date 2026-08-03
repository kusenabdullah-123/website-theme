    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-grid">
            <div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" style="font-size: 1.5rem; font-weight: 700; text-decoration: none; color: var(--text-primary); display: block; margin-bottom: 16px;">DevPortfolio.</a>
                <p style="color: var(--text-secondary); margin-bottom: 24px;">Memberikan solusi IT yang komprehensif, mulai dari pengembangan website hingga dukungan teknis operasional.</p>
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
                    <li style="margin-bottom: 12px;"><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" style="color: var(--text-secondary); text-decoration: none;">Blog</a></li>
                </ul>
            </div>
            <div>
                <h3 style="margin-bottom: 20px;">Layanan</h3>
                <ul style="list-style: none;">
                    <li style="margin-bottom: 12px;"><span style="color: var(--text-secondary);">Pembuatan Website & Aplikasi</span></li>
                    <li style="margin-bottom: 12px;"><span style="color: var(--text-secondary);">Management Server</span></li>
                    <li style="margin-bottom: 12px;"><span style="color: var(--text-secondary);">IT Support Offline</span></li>
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
