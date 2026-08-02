<?php
/**
 * Template Name: Services Page
 */
get_header(); ?>

<main class="main-page-padding">
        
        <!-- Hero Services -->
        <section class="container text-center reveal">
            <h1 class="hero-title" style="font-size: 3rem; margin-bottom: 20px;">Solusi Teknis untuk <span class="gradient-text">Skala Besar</span></h1>
            <p style="font-size: 1.1rem; color: var(--text-secondary); max-width: 600px; margin: 0 auto 60px;">
                Saya menawarkan layanan pengembangan perangkat lunak spesialis dari backend API hingga sistem terdistribusi berkinerja tinggi, didukung integrasi sistem terpusat.
            </p>
        </section>

        <!-- Detail Layanan (Showcase Grid) -->
        <section class="container" style="margin-bottom: 100px;">
            <div class="services-grid-new">
                <div class="service-grid-card reveal">
                    <div class="glowing-icon">
                        <i data-lucide="server-cog" width="32" height="32"></i>
                    </div>
                    <h3>Arsitektur Event-Driven & Integrasi</h3>
                    <p>Membangun sistem terdistribusi yang tangguh dan cepat. Saya berpengalaman merancang sinkronisasi data real-time antar aplikasi (SSO, sistem akademik & finansial) menggunakan Apache Kafka.</p>
                    <div class="service-tags">
                        <span class="service-tag">Apache Kafka</span>
                        <span class="service-tag">Microservices</span>
                        <span class="service-tag">System Integration</span>
                    </div>
                </div>

                <div class="service-grid-card reveal" style="transition-delay: 0.1s;">
                    <div class="glowing-icon">
                        <i data-lucide="braces" width="32" height="32"></i>
                    </div>
                    <h3>Backend API Development (PHP)</h3>
                    <p>Pembuatan RESTful API kustom yang aman, terdokumentasi, dan mudah diskalakan menggunakan PHP 8.x modern serta Laravel framework. Termasuk proteksi keamanan ketat seperti cegah Path Traversal.</p>
                    <div class="service-tags">
                        <span class="service-tag">PHP 8.x</span>
                        <span class="service-tag">Laravel</span>
                        <span class="service-tag">RESTful API</span>
                    </div>
                </div>

                <div class="service-grid-card reveal" style="transition-delay: 0.2s;">
                    <div class="glowing-icon">
                        <i data-lucide="cpu" width="32" height="32"></i>
                    </div>
                    <h3>Systems Programming (Rust)</h3>
                    <p>Eksplorasi modul performa tinggi dan konkurensi aman menggunakan Rust. Sempurna untuk optimasi memori kritis, pemrosesan data masif, atau integrasi engine AI lokal di perangkat internal.</p>
                    <div class="service-tags">
                        <span class="service-tag">Rust</span>
                        <span class="service-tag">System Engine</span>
                        <span class="service-tag">Memory Safety</span>
                    </div>
                </div>

                <div class="service-grid-card reveal" style="transition-delay: 0.3s;">
                    <div class="glowing-icon">
                        <i data-lucide="video" width="32" height="32"></i>
                    </div>
                    <h3>Video Editing (CapCut)</h3>
                    <p>Layanan multimedia pendukung seperti pengeditan video YouTube Shorts / reguler secara dinamis dengan CapCut. Membantu pembuatan visual cyber-futuristic/gaming, dan copywriting SEO YouTube.</p>
                    <div class="service-tags">
                        <span class="service-tag">CapCut</span>
                        <span class="service-tag">YouTube Shorts</span>
                        <span class="service-tag">Digital Content</span>
                    </div>
                </div>

                <div class="service-grid-card reveal" style="transition-delay: 0.4s;">
                    <div class="glowing-icon">
                        <i data-lucide="wrench" width="32" height="32"></i>
                    </div>
                    <h3>IT Support & Repair (Offline)</h3>
                    <p>Selain fokus pada development, saya juga melayani perbaikan software komputer dan laptop secara offline. Instalasi OS (Windows/Linux), optimasi performa sistem, serta instalasi berbagai aplikasi esensial.</p>
                    <div class="service-tags">
                        <span class="service-tag">Install Windows</span>
                        <span class="service-tag">Install Linux</span>
                        <span class="service-tag">Optimasi Sistem</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Alur Kerja (Workflow) -->
        <section class="container reveal" style="margin-bottom: 100px;">
            <div style="text-align: center; margin-bottom: 50px;">
                <h2 class="section-title">Metodologi Kerja Saya</h2>
                <p class="section-subtitle">Bagaimana saya membantu mewujudkan sistem impian Anda.</p>
            </div>
            
            <div class="workflow-grid">
                <div class="workflow-step reveal">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h4>Discovery</h4>
                        <p>Analisis kebutuhan sistem, identifikasi masalah utama, dan penentuan tujuan bisnis.</p>
                    </div>
                </div>
                <div class="workflow-step reveal" style="transition-delay: 0.1s;">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h4>Architecture</h4>
                        <p>Perancangan skema database terpusat, alur event Kafka, dan spesifikasi API.</p>
                    </div>
                </div>
                <div class="workflow-step reveal" style="transition-delay: 0.2s;">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h4>Development</h4>
                        <p>Penulisan kode backend secara modular, efisien, aman, dan berstandar clean code.</p>
                    </div>
                </div>
                <div class="workflow-step reveal" style="transition-delay: 0.3s;">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h4>Testing</h4>
                        <p>Pengujian performa API, validasi integrasi data real-time, dan audit keamanan bypass.</p>
                    </div>
                </div>
                <div class="workflow-step reveal" style="transition-delay: 0.4s;">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h4>Deployment</h4>
                        <p>Setup environment server (Linux/Docker) dan penyerahan sistem terintegrasi.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Pricing / Paket Layanan -->
        <section class="container reveal" style="margin-bottom: 100px;">
            <div style="text-align: center; margin-bottom: 40px;">
                <h2 class="section-title">Paket Estimasi Proyek</h2>
                <p class="section-subtitle">Pilih model kerja sama yang paling sesuai dengan kebutuhan sistem Anda.</p>
            </div>

            <div class="pricing-grid">
                <!-- Paket 1 -->
                <div class="pricing-card reveal">
                    <div class="plan-name">Backend API Basic</div>
                    <div class="price">Mulai $300<span>/proyek</span></div>
                    <ul class="features-list">
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Desain Skema Database (MySQL/PgSQL)</li>
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Pengembangan RESTful API CRUD</li>
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Autentikasi dasar (JWT/Sanctum)</li>
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Dokumentasi Postman / Swagger</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Pilih Paket</a>
                </div>

                <!-- Paket 2 -->
                <div class="pricing-card popular reveal">
                    <div class="plan-name">Integrasi Event-Driven</div>
                    <div class="price">Mulai $800<span>/proyek</span></div>
                    <ul class="features-list">
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Setup Server & Cluster Apache Kafka</li>
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Script PHP Producer & Consumer (rdkafka)</li>
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Arsitektur Sinkronisasi Multi-Aplikasi</li>
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Konfigurasi Keamanan (ACLs) & Testing</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary">Diskusikan Proyek</a>
                </div>

                <!-- Paket 3 -->
                <div class="pricing-card reveal">
                    <div class="plan-name">Custom Retainer</div>
                    <div class="price">$35<span>/jam</span></div>
                    <ul class="features-list">
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Refactoring kode PHP legacy</li>
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Eksplorasi performa dengan Rust/C++</li>
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Troubleshooting bug server / backend</li>
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Termasuk layanan Video Editing (Opsional)</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Hubungi Saya</a>
                </div>

                <!-- Paket 4 -->
                <div class="pricing-card reveal">
                    <div class="plan-name">IT Support (Offline)</div>
                    <div class="price">Mulai Rp 100rb<span>/servis</span></div>
                    <ul class="features-list">
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Instalasi OS (Windows / Linux)</li>
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Optimasi performa Windows lambat</li>
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Instalasi aplikasi (Office, Adobe, dll)</li>
                        <li><i data-lucide="check-circle-2" class="icon-check"></i> Pembersihan virus & malware</li>
                    </ul>
                    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline">Hubungi Saya</a>
                </div>
            </div>
        </section>

        <!-- Call To Action -->
        <section class="container reveal">
            <div style="background-color: var(--accent-primary); border-radius: 24px; padding: 60px 40px; text-align: center; color: white;">
                <h2 style="font-size: 2.5rem; margin-bottom: 20px;">Siap Membangun Sistem Anda?</h2>
                <p style="font-size: 1.1rem; max-width: 600px; margin: 0 auto 32px; opacity: 0.9;">
                    Jangan biarkan aplikasi Anda terkendala oleh performa backend yang lambat. Mari berkolaborasi untuk merancang arsitektur yang siap di-scale.
                </p>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="background-color: white; color: var(--accent-primary); padding: 16px 32px; font-size: 1.1rem;">
                    Mulai Konsultasi Gratis <i data-lucide="arrow-right"></i>
                </a>
            </div>
        </section>

    </main>

<?php get_footer(); ?>