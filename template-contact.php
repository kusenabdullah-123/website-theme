<?php
/**
 * Template Name: Contact Page
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header(); ?>

<main class="main-page-padding">
    <section class="container reveal active">
        <div class="mb-40">
            <span class="section-badge">Kontak</span>
            <h1 class="section-title text-left mb-20">Hubungi Saya</h1>
            <p class="font-md text-secondary max-w-800">
                Mari diskusikan kebutuhan proyek pembuatan website, manajemen server, perbaikan IT support, atau sekadar bertukar ide seputar teknologi.
            </p>
        </div>

        <div class="contact-grid">
            <div class="card contact-card">
                <h2 class="mb-20 font-lg">Informasi Kontak</h2>
                <div class="contact-info-list mb-32">
                    <div class="contact-info-item">
                        <i class="ri-mail-line contact-info-icon"></i>
                        <div>
                            <strong>Email:</strong>
                            <a href="mailto:kusena322@gmail.com" class="text-secondary d-block">kusena322@gmail.com</a>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <i class="ri-whatsapp-line contact-info-icon"></i>
                        <div>
                            <strong>WhatsApp:</strong>
                            <a href="https://wa.me/6282333086744?text=halo%20saya%20mau%20konsultasi" target="_blank" rel="noopener noreferrer" class="text-secondary d-block">+62 823-3308-6744</a>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <i class="ri-map-pin-line contact-info-icon"></i>
                        <div>
                            <strong>Lokasi:</strong>
                            <span class="text-secondary d-block">Indonesia</span>
                        </div>
                    </div>
                </div>
                
                <h3 class="mb-16 font-md">Koneksi & Sosial Media</h3>
                <?php wt_render_social_links( 'cards' ); ?>
            </div>
            
            <div class="card contact-card">
                <h2 class="mb-20 font-lg">Kirim Pesan</h2>
                <form class="contact-form" action="https://wa.me/6282333086744" method="GET" target="_blank">
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="text" placeholder="Masukkan nama Anda..." required>
                    </div>
                    <div class="form-group">
                        <label for="email">Alamat Email</label>
                        <input type="email" id="email" placeholder="nama@domain.com">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subjek / Topik</label>
                        <input type="text" id="subject" placeholder="Contoh: Diskusi Pembuatan Website / Server">
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan / Detail Kebutuhan</label>
                        <textarea id="message" rows="5" placeholder="Tuliskan detail kebutuhan atau pertanyaan Anda di sini..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary w-full">
                        <i class="ri-send-plane-fill"></i> Kirim Pesan via WhatsApp
                    </button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>