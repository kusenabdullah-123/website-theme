<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

<main class="main-page-padding">
        
        <!-- Section: Profil Lengkap -->
        <section class="container reveal">
            <div class="about-profile-grid">
                <!-- Profile Image -->
                <div class="about-sticky-profile">
                    <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?auto=format&fit=crop&w=600&q=80" alt="Foto Profil Lengkap" class="about-profile-image">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/resume.pdf" class="btn btn-primary" download>
                        <i data-lucide="download"></i> Download CV
                    </a>
                </div>
                
                <!-- Profile Content -->
                <div>
                    <h1 class="section-title" style="text-align: left;">Tentang Saya</h1>
                    <p style="font-size: 1.1rem; color: var(--text-secondary); margin-bottom: 24px; line-height: 1.8;">
                        Halo! Saya adalah seorang Backend Developer dan System Engineer dengan pengalaman lebih dari 5 tahun dalam merancang dan mengimplementasikan arsitektur perangkat lunak yang skalabel. Saya memiliki ketertarikan mendalam pada sistem terdistribusi, pengolahan data berkecepatan tinggi, dan <em>clean architecture</em>.
                    </p>
                    <p style="font-size: 1.1rem; color: var(--text-secondary); margin-bottom: 24px; line-height: 1.8;">
                        Sehari-hari, saya banyak bekerja menggunakan ekosistem <strong>PHP</strong> untuk pengembangan API dan <strong>Apache Kafka</strong> untuk sinkronisasi event antar microservices. Akhir-akhir ini, saya juga mengeksplorasi <strong>Rust</strong> untuk membangun aplikasi tingkat sistem (*system-level programming*) yang membutuhkan performa tinggi dan manajemen memori yang aman.
                    </p>
                    <p style="font-size: 1.1rem; color: var(--text-secondary); margin-bottom: 24px; line-height: 1.8;">
                        Di samping pengembangan perangkat lunak, saya juga melayani IT Support offline seperti instalasi sistem operasi (Windows/Linux), optimasi performa komputer/laptop, serta instalasi berbagai aplikasi esensial untuk memaksimalkan produktivitas Anda.
                    </p>
                    <p style="font-size: 1.1rem; color: var(--text-secondary); line-height: 1.8;">
                        Di luar pekerjaan profesional, saya aktif membagikan eksplorasi teknis saya di blog ini dan sesekali membuat konten edukasi di channel YouTube pribadi saya.
                    </p>
                </div>
            </div>
        </section>

        <!-- Section: Karir & Pendidikan -->
        <section class="profile-timeline-box container reveal">
            <div class="timeline-grid">
                
                <!-- Perjalanan Karir -->
                <div>
                    <h2 style="display: flex; align-items: center; gap: 12px; margin-bottom: 40px;">
                        <i data-lucide="briefcase" style="color: var(--accent-primary);"></i> Pengalaman Karir
                    </h2>
                    
                    <div class="timeline">
                        <div class="timeline-item reveal">
                            <div class="timeline-header">
                                <span class="timeline-date">Okt 2023 - Sekarang</span>
                                <span class="timeline-status current">Aktif</span>
                            </div>
                            <h3>Senior Backend Engineer</h3>
                            <h4>TechEdu Solutions, Jakarta</h4>
                            <p>Merancang ulang sistem database terpusat untuk multi-aplikasi sekolah. Mengimplementasikan Apache Kafka untuk sinkronisasi data *real-time* yang menekan latensi hingga 40%.</p>
                        </div>
                        <div class="timeline-item reveal">
                            <div class="timeline-header">
                                <span class="timeline-date">Jan 2021 - Sep 2023</span>
                                <span class="timeline-status past">Selesai</span>
                            </div>
                            <h3>Software Engineer</h3>
                            <h4>Karya Digital Agency, Surabaya</h4>
                            <p>Mengembangkan berbagai RESTful API berbasis Laravel. Membuat custom PHP file upload library dengan proteksi *Path Traversal* yang digunakan di 10+ project internal.</p>
                        </div>
                        <div class="timeline-item reveal">
                            <div class="timeline-header">
                                <span class="timeline-date">Agt 2019 - Des 2020</span>
                                <span class="timeline-status past">Selesai</span>
                            </div>
                            <h3>Junior Web Developer</h3>
                            <h4>StartupHub</h4>
                            <p>Membantu maintenance sistem legacy dan mengoptimasi query database MySQL yang berdampak pada peningkatan kecepatan respon server.</p>
                        </div>
                    </div>
                </div>

                <!-- Pendidikan -->
                <div>
                    <h2 style="display: flex; align-items: center; gap: 12px; margin-bottom: 40px;">
                        <i data-lucide="graduation-cap" style="color: var(--accent-primary);"></i> Pendidikan
                    </h2>
                    
                    <div class="timeline">
                        <div class="timeline-item reveal">
                            <div class="timeline-header">
                                <span class="timeline-date">2015 - 2019</span>
                                <span class="timeline-status past">Lulus</span>
                            </div>
                            <h3>S1 Teknik Informatika</h3>
                            <h4>Institut Teknologi Sepuluh Nopember (ITS)</h4>
                            <p>Lulus dengan predikat Cum Laude (IPK 3.85). Aktif di laboratorium komputasi terdistribusi dan jaringan.</p>
                        </div>
                    </div>

                    <!-- Sertifikasi & Prestasi -->
                    <h2 style="display: flex; align-items: center; gap: 12px; margin: 60px 0 30px;">
                        <i data-lucide="award" style="color: var(--accent-primary);"></i> Sertifikasi
                    </h2>
                    <ul style="list-style: none; display: flex; flex-direction: column; gap: 16px; color: var(--text-secondary);">
                        <li style="display: flex; gap: 12px; align-items: start;">
                            <i data-lucide="check-circle-2" style="color: var(--accent-primary); flex-shrink: 0; width: 20px;"></i>
                            AWS Certified Developer – Associate (2025)
                        </li>
                        <li style="display: flex; gap: 12px; align-items: start;">
                            <i data-lucide="check-circle-2" style="color: var(--accent-primary); flex-shrink: 0; width: 20px;"></i>
                            Confluent Certified Developer for Apache Kafka (2024)
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Section: Tools & Skills -->
        <section class="container reveal" style="margin-bottom: 60px;">
            <h2 class="section-title">Tech Stack & Tools</h2>
            <p class="section-subtitle">Teknologi yang sering saya gunakan dalam siklus pengembangan perangkat lunak.</p>
            
            <div class="tech-category-grid">
                <!-- Kategori 1: Languages & Frameworks -->
                <div class="tech-category-card reveal">
                    <h3 class="tech-category-title">
                        <i data-lucide="code-2"></i> Languages & Frameworks
                    </h3>
                    <ul class="tech-list">
                        <li class="tech-item"><i data-lucide="check-circle-2"></i> PHP 8.x (Laravel)</li>
                        <li class="tech-item"><i data-lucide="check-circle-2"></i> Rust (Systems Programming)</li>
                        <li class="tech-item"><i data-lucide="check-circle-2"></i> JavaScript (ES6)</li>
                        <li class="tech-item"><i data-lucide="check-circle-2"></i> HTML5 & SCSS</li>
                    </ul>
                </div>
                
                <!-- Kategori 2: Databases & Systems -->
                <div class="tech-category-card reveal" style="transition-delay: 0.1s;">
                    <h3 class="tech-category-title">
                        <i data-lucide="database"></i> Databases & Infrastructure
                    </h3>
                    <ul class="tech-list">
                        <li class="tech-item"><i data-lucide="check-circle-2"></i> MySQL & PostgreSQL</li>
                        <li class="tech-item"><i data-lucide="check-circle-2"></i> Apache Kafka (Event Broker)</li>
                        <li class="tech-item"><i data-lucide="check-circle-2"></i> Docker (Containerization)</li>
                        <li class="tech-item"><i data-lucide="check-circle-2"></i> Linux Server (Ubuntu)</li>
                    </ul>
                </div>
                
                <!-- Kategori 3: Tools & Multimedia -->
                <div class="tech-category-card reveal" style="transition-delay: 0.2s;">
                    <h3 class="tech-category-title">
                        <i data-lucide="wrench"></i> Development Tools
                    </h3>
                    <ul class="tech-list">
                        <li class="tech-item"><i data-lucide="check-circle-2"></i> Git & GitHub</li>
                        <li class="tech-item"><i data-lucide="check-circle-2"></i> Confluent Cloud</li>
                        <li class="tech-item"><i data-lucide="check-circle-2"></i> AWS Ecosystem</li>
                        <li class="tech-item"><i data-lucide="check-circle-2"></i> CapCut (Video Editing Add-on)</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Section: FAQ -->
        <section class="container reveal" style="max-width: 800px; margin-bottom: 100px;">
            <h2 class="section-title">FAQ</h2>
            <p class="section-subtitle">Pertanyaan yang sering diajukan terkait layanan dan kolaborasi.</p>

            <div class="faq-container">
                <div class="faq-item reveal">
                    <button class="faq-question">
                        Apakah Anda menerima proyek freelance (pekerjaan lepas)?
                        <span class="icon-wrapper"><i data-lucide="chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        Ya, saya secara aktif menerima proyek freelance, terutama yang berfokus pada perbaikan sistem backend (refactoring), pembuatan RESTful API, dan perancangan skema database. Silakan hubungi saya melalui halaman Contact untuk berdiskusi.
                    </div>
                </div>
                
                <div class="faq-item reveal">
                    <button class="faq-question">
                        Tech stack apa yang Anda rekomendasikan untuk project startup?
                        <span class="icon-wrapper"><i data-lucide="chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        Itu sangat bergantung pada kebutuhan skala dan waktu pengembangan. Untuk kecepatan ke pasar (Time-to-Market), Laravel (PHP) adalah pilihan yang sangat matang. Namun, jika sistem menuntut latensi sangat rendah dan konkurensi ekstrem, komponen spesifik dapat ditulis menggunakan Rust atau Golang.
                    </div>
                </div>

                <div class="faq-item reveal">
                    <button class="faq-question">
                        Berapa estimasi pengerjaan untuk integrasi database / API?
                        <span class="icon-wrapper"><i data-lucide="chevron-down"></i></span>
                    </button>
                    <div class="faq-answer">
                        Estimasi bervariasi mulai dari 1 minggu hingga 2 bulan, tergantung kompleksitas arsitektur, jumlah *endpoint*, sistem *message broker* (seperti Kafka) yang digunakan, dan seberapa bersih kode legacy yang sudah ada.
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?>