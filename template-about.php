<?php
/**
 * Template Name: About Page
 */
get_header(); ?>

<main class="main-page-padding">
        
        <!-- Section: Profil Lengkap -->
        <section class="container reveal">
            <div class="about-profile-grid">
                <div class="about-sticky-profile">
                    <img src="" alt="Foto Profil Lengkap" class="about-profile-image">
                </div>
                
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
    </main>

<?php get_footer(); ?>