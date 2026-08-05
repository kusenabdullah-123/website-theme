<?php
/**
 * Template Name: Contact Page
 */
get_header(); ?>

<main>
        <section class="hero section">
            <div class="container">
                <h1 class="hero__title">Hubungi Saya</h1>
                <p class="hero__subtitle">Mari diskusikan proyek Anda bersama saya</p>
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="grid grid-2">
                    <div class="card">
                        <h2>Informasi Kontak</h2>
                        <p><strong>Email:</strong> email@example.com</p>
                        <p><strong>Telepon:</strong> +62 123 4567 8900</p>
                        <p><strong>Lokasi:</strong> Jakarta, Indonesia</p>
                        
                        <h3 class="mt-40">Sosial Media</h3>
                        <p>
                            <a href="#">LinkedIn</a> | 
                            <a href="#">GitHub</a> | 
                            <a href="#">Twitter</a>
                        </p>
                    </div>
                    
                    <div class="card">
                        <h2>Kirim Pesan</h2>
                        <form>
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="subject">Subjek</label>
                                <input type="text" id="subject" name="subject" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Pesan</label>
                                <textarea id="message" name="message" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>