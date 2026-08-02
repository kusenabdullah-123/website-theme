<?php
get_header(); ?>

<main>
        <!-- Hero Section -->
        <section class="hero container">
            <div class="hero-grid">
                <div class="hero-content reveal">
                    <div class="hero-badge">
                        <i data-lucide="sparkles" style="width: 16px; height: 16px;"></i>
                        <span>Available for freelance</span>
                    </div>
                    <h1 class="hero-title">Building Scalable <span class="gradient-text">Backend Systems</span></h1>
                    <p class="hero-description">Saya adalah Backend Developer yang berfokus pada arsitektur sistem yang skalabel, integrasi database berkinerja tinggi, dan infrastruktur event-driven yang tangguh.</p>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <span class="stat-number">5+</span>
                            <span class="stat-label">Years Experience</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">50+</span>
                            <span class="stat-label">Projects Completed</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">30+</span>
                            <span class="stat-label">Happy Clients</span>
                        </div>
                    </div>
                    <div class="hero-actions">
                        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">
                            <i data-lucide="mail"></i> Hubungi Saya
                        </a>
                        <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="btn btn-outline">
                            <i data-lucide="file-text"></i> Lihat Artikel
                        </a>
                    </div>
                </div>
                <div class="hero-image reveal" style="transition-delay: 0.2s;">
                    <div class="hero-image-wrapper">
                        <div class="hero-glow"></div>
                        <img src="https://ui-avatars.com/api/?name=Nama+Anda&size=400&background=random" alt="Foto Profil">
                        <div class="floating-card card-1">
                            <i data-lucide="server" style="color: var(--accent-primary);"></i>
                            <span>API Development</span>
                        </div>
                        <div class="floating-card card-2">
                            <i data-lucide="database" style="color: var(--accent-primary);"></i>
                            <span>Database Design</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Tentang Singkat -->
        <section class="about-snippet container reveal">
            <div class="about-card">
                <div class="about-icon">
                    <i data-lucide="user" style="width: 32px; height: 32px; color: var(--accent-primary);"></i>
                </div>
                <h2 class="section-title">Tentang Saya</h2>
                <p style="max-width: 800px; margin: 0 auto; color: var(--text-secondary); font-size: 1.1rem; line-height: 1.8;">
                    Saya memiliki fokus yang kuat pada pengembangan backend, desain database terpusat, dan integrasi sistem. Berpengalaman menangani arsitektur multi-aplikasi menggunakan teknologi modern seperti PHP, Rust, dan Apache Kafka untuk memastikan data tersinkronisasi secara real-time dan aman.
                </p>
                <div class="tech-stack">
                    <span class="tech-tag">PHP</span>
                    <span class="tech-tag">Laravel</span>
                    <span class="tech-tag">Rust</span>
                    <span class="tech-tag">Apache Kafka</span>
                    <span class="tech-tag">MySQL</span>
                    <span class="tech-tag">PostgreSQL</span>
                </div>
            </div>
        </section>

        <!-- Layanan Unggulan -->
        <section class="services container reveal">
            <div class="section-header">
                <span class="section-badge">Services</span>
                <h2 class="section-title">Layanan Unggulan</h2>
                <p class="section-subtitle">Solusi teknis yang saya tawarkan untuk bisnis Anda.</p>
            </div>
            
            <div class="services-grid">
                <div class="service-card reveal">
                    <div class="service-icon">
                        <i data-lucide="server"></i>
                    </div>
                    <h3>Backend API Development</h3>
                    <p>Pengembangan RESTful API yang cepat dan aman menggunakan ekosistem PHP modern dan arsitektur event-driven.</p>
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="service-link">
                        Learn More <i data-lucide="arrow-right" style="width: 16px; height: 16px;"></i>
                    </a>
                </div>
                <div class="service-card reveal" style="transition-delay: 0.1s;">
                    <div class="service-icon">
                        <i data-lucide="database"></i>
                    </div>
                    <h3>Database & Sys Integration</h3>
                    <p>Desain skema database terpusat dan sinkronisasi data antar platform menggunakan Apache Kafka.</p>
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="service-link">
                        Learn More <i data-lucide="arrow-right" style="width: 16px; height: 16px;"></i>
                    </a>
                </div>
                <div class="service-card reveal" style="transition-delay: 0.2s;">
                    <div class="service-icon">
                        <i data-lucide="cpu"></i>
                    </div>
                    <h3>Systems Programming</h3>
                    <p>Eksplorasi komputasi performa tinggi dan implementasi model AI lokal menggunakan bahasa tingkat sistem seperti Rust.</p>
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="service-link">
                        Learn More <i data-lucide="arrow-right" style="width: 16px; height: 16px;"></i>
                    </a>
                </div>
                <div class="service-card reveal" style="transition-delay: 0.3s;">
                    <div class="service-icon">
                        <i data-lucide="wrench"></i>
                    </div>
                    <h3>IT Support & Repair (Offline)</h3>
                    <p>Layanan perbaikan software komputer/laptop. Instalasi Windows & Linux, optimasi sistem, dan instalasi aplikasi.</p>
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="service-link">
                        Learn More <i data-lucide="arrow-right" style="width: 16px; height: 16px;"></i>
                    </a>
                </div>
            </div>
        </section>

        <!-- Artikel Terbaru -->
        <section class="articles container reveal">
            <div class="section-header">
                <span class="section-badge">Blog</span>
                <h2 class="section-title">Artikel Terbaru</h2>
                <p class="section-subtitle">Tulisan dan eksplorasi saya seputar teknologi.</p>
            </div>
            
            <div class="articles-grid">
                <a href="#" class="article-card reveal">
                    <div class="article-image">
                        <img src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=600&q=80" alt="Kode Backend" loading="lazy">
                    </div>
                    <div class="article-content">
                        <div class="article-category">System Architecture</div>
                        <h3>Membangun Event-Driven Architecture dengan Apache Kafka dan PHP</h3>
                        <p>Cara menangani sinkronisasi data antar sistem sekolah secara real-time...</p>
                        <div class="article-meta">
                            <span><i data-lucide="calendar" style="width: 14px; height: 14px;"></i> 15 Mei 2026</span>
                            <span><i data-lucide="clock" style="width: 14px; height: 14px;"></i> 5 min read</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="article-card reveal" style="transition-delay: 0.1s;">
                    <div class="article-image">
                        <img src="https://images.unsplash.com/photo-1526374965328-7f61d4dc18c5?auto=format&fit=crop&w=600&q=80" alt="Server Data" loading="lazy">
                    </div>
                    <div class="article-content">
                        <div class="article-category">Security</div>
                        <h3>Mencegah Path Traversal pada Library Upload File Custom</h3>
                        <p>Praktik terbaik menulis sistem upload file di PHP murni yang aman dari eksploitasi...</p>
                        <div class="article-meta">
                            <span><i data-lucide="calendar" style="width: 14px; height: 14px;"></i> 02 Apr 2026</span>
                            <span><i data-lucide="clock" style="width: 14px; height: 14px;"></i> 8 min read</span>
                        </div>
                    </div>
                </a>
                <a href="#" class="article-card reveal" style="transition-delay: 0.2s;">
                    <div class="article-image">
                        <img src="https://images.unsplash.com/photo-1627398225081-24c89544eb1a?auto=format&fit=crop&w=600&q=80" alt="Hardware Laptop" loading="lazy">
                    </div>
                    <div class="article-content">
                        <div class="article-category">AI & Rust</div>
                        <h3>Eksperimen: Menjalankan AI Lokal Menggunakan Rust di CPU Laptop</h3>
                        <p>Bisakah kita menjalankan model bahasa secara efisien tanpa GPU dedicated?</p>
                        <div class="article-meta">
                            <span><i data-lucide="calendar" style="width: 14px; height: 14px;"></i> 12 Mar 2026</span>
                            <span><i data-lucide="clock" style="width: 14px; height: 14px;"></i> 6 min read</span>
                        </div>
                    </div>
                </a>
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" class="btn btn-outline">View All Articles <i data-lucide="arrow-right" style="width: 16px; height: 16px;"></i></a>
            </div>
        </section>
    </main>

<?php get_footer(); ?>