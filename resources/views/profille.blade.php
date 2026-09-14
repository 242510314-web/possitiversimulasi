<!-- memanggil file app.blade.php -->
@extends('layouts.app')

<!-- mengirimkan nilai title -->
@section('title', 'Profil Sugar Bloom')

<!-- batas isi konten -->
@section('content')

@include('layouts.navbar') 

<!-- BAGIAN STYLE CSS UNTUK MEMPERCANTIK HALAMAN -->
<style>
    :root {
        --primary-color: #2c5d91; /* Pink pastel khas donat */
        --secondary-color: #2c5d91;
        --dark-color: #487eaa; /* Cokelat tua hangat untuk teks */
        --bg-light: #fff8f8; /* Background pink sangat muda */
        --shadow: 0 10px 30px rgba(93, 153, 187, 0.25);
    }

    body {
        background-color: var(--bg-light);
        color: var(--dark-color);
        font-family: 'Poppins', 'Segoe UI', sans-serif;
    }

    .sugar-container {
        max-width: 1140px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    /* Header Section */
    .sugar-header {
        text-align: center;
        margin-bottom: 50px;
        position: relative;
    }

    .sugar-title {
        font-size: 2.8rem;
        font-weight: 800;
        color: var(--dark-color);
        margin-bottom: 10px;
        letter-spacing: -0.5px;
    }

    .sugar-title span {
        color: var(--primary-color);
    }

    .sugar-subtitle {
        font-size: 1.1rem;
        text-transform: uppercase;
        letter-spacing: 3px;
        color: #2c5d91;
        font-weight: 600;
    }

    .sugar-header::after {
        content: '';
        display: block;
        width: 60px;
        height: 4px;
        background: var(--primary-color);
        margin: 20px auto 0;
        border-radius: 10px;
    }

    /* Grid Layout */
    .sugar-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
        align-items: stretch;
    }

    @media (max-width: 768px) {
        .sugar-grid {
            grid-template-columns: 1fr;
        }
    }

    /* Card Styling */
    .sugar-card {
        background: #ffffff;
        padding: 40px;
        border-radius: 24px;
        box-shadow: var(--shadow);
        border: 1px solid rgba(93, 153, 187, 0.25);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .sugar-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(93, 153, 187, 0.25);
    }

    .card-title {
        font-size: 1.6rem;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 20px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .card-title::before {
        content: '🍩';
        font-size: 1.5rem;
    }

    .about-text {
        font-size: 1.05rem;
        line-height: 1.8;
        color: #6f89a6;
        margin-bottom: 15px;
    }

    .about-text:last-child {
        margin-bottom: 0;
    }

    /* Badge/Highlight info */
    .highlight-box {
        background: linear-gradient(135deg, var(--primary-color), #2c5d91);
        color: white;
    }

    .highlight-box .card-title {
        color: white;
    }

    .highlight-box .card-title::before {
        content: '✨';
    }

    .highlight-box .about-text {
        color: rgba(255, 255, 255, 0.9);
    }
</style>

<!-- ISI KONTEN UTAMA -->
<div class="sugar-container">

    <div class="sugar-header">
        <h1 class="sugar-title">Tentang <span>Sugar Bloom</span></h1>
        <p class="sugar-subtitle">Premium Homemade Donuts</p>
    </div>
    
    <div class="sugar-grid">
        <!-- Kartu 1: Kisah Kami -->
        <div class="sugar-card">
            <div class="card-title">Kisah Sugar Bloom</div>
            <p class="about-text">
                Sugar Bloom adalah toko donat premium yang berdedikasi untuk menghadirkan kebahagiaan di setiap gigitan. Kami memadukan bahan-bahan berkualitas tinggi dengan teknik pembuatan <em>homemade</em> untuk menghasilkan produk terbaik.
            </p>
            <p class="about-text">
                Lebih dari sekadar camilan, kami percaya bahwa setiap donat di Sugar Bloom adalah teman terbaik untuk merayakan momen manis Anda—baik saat bersantai sendiri maupun berkumpul bersama keluarga.
            </p>
        </div>

        <!-- Kartu 2: Komitmen Kami (Dengan warna highlight kontras yang cantik) -->
        <div class="sugar-card highlight-box">
            <div class="card-title">Komitmen & Mutu</div>
            <p class="about-text">
                Kami selalu berkomitmen untuk menjaga kesegaran produk karena semua donat kami diproduksi secara segar setiap harinya (<em>freshly baked everyday</em>).
            </p>
            <p class="about-text">
                Kebersihan proses pembuatan dan inovasi tanpa henti adalah pilar utama kami untuk terus menciptakan varian rasa baru yang unik guna memanjakan lidah Anda para pencinta rasa manis.
            </p>
        </div>
    </div>

</div>

@endsection
