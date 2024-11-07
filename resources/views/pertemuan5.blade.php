{{-- Extending the master template --}}
@extends('master')

{{-- Setting the title of the page --}}
@section('judul_halaman', 'Halaman Tentang')

{{-- Content of the page --}}
@section('konten')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <style>
        /* Theme Variables */
        :root {
            --bg-color: #ffffff;
            --text-color: #333333;
            --card-bg: #f8f9fa;
            --footer-bg: #e9ecef;
            --btn-bg: #007bff;
            --btn-color: #ffffff;
        }
        .dark-mode {
            --bg-color: #1a1a1a;
            --text-color: #ffffff;
            --card-bg: #2c2c2c;
            --footer-bg: #333333;
            --btn-bg: #ffc107;
            --btn-color: #1a1a1a;
        }

        /* Base Styles */
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            background-color: var(--bg-color);
            color: var(--text-color);
            transition: background-color 0.3s, color 0.3s;
        }

        /* Container Styles */
        .testimonial-container {
            margin: 50px auto;
            max-width: 1000px;
        }

        /* Card Styles */
        .testimonial-card {
            border: none;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            background-color: var(--card-bg);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .testimonial-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .testimonial-card img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #007bff;
        }
        .client-info {
            margin-left: 20px;
        }

        /* Footer and Marquee Styles */
        footer {
            background-color: var(--footer-bg);
            padding: 40px 0;
        }
        .marquee {
            overflow: hidden;
            white-space: nowrap;
        }
        .marquee-content {
            display: inline-block;
            animation: marquee 30s linear infinite;
        }
        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        .client-logo {
            width: 100px;
            transition: transform 0.3s;
        }
        .client-logo:hover {
            transform: scale(1.1);
        }

        /* Theme Toggle Button */
        .btn-theme {
            background-color: var(--btn-bg);
            color: var(--btn-color);
            border: none;
            padding: 10px 20px;
            border-radius: 30px;
            display: flex;
            align-items: center;
            font-weight: 600;
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 1000;
        }
        .btn-theme .icon {
            margin-right: 8px;
        }
    </style>

    {{-- Theme Toggle Button --}}
    <button class="btn btn-theme theme-toggle" onclick="toggleTheme()">
        <span class="icon">☀️</span>
        <span class="text">Light Mode</span>
    </button>

    {{-- Testimonials Section --}}
    <section class="testimonial-container container">
        <h1 class="text-center text-primary mb-5">Our Clients Love Us</h1>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="testimonial-card card">
                    <div class="card-body d-flex">
                        <img src="/assets/testimoni/capt.png" alt="Client 1">
                        <div class="client-info">
                            <p>"Bank Mandiri has been an incredible partner in our financial journey. Their services have made a tremendous difference for our company's growth."</p>
                            <h6>Tim Silva</h6>
                            <small>CEO of Encaide</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="testimonial-card card">
                    <div class="card-body d-flex">
                        <img src="/assets/testimoni/ironman.png" alt="Client 2">
                        <div class="client-info">
                            <p>"The support from Bank Mandiri has been fantastic. Their team is always responsive and proactive in helping us achieve our financial goals."</p>
                            <h6>Jane Doe</h6>
                            <small>COO of InnovateX</small>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Additional testimonials can be added here in a similar structure -->
        </div>
    </section>

    {{-- Footer with Marquee Logos --}}
    <footer>
        <div class="container">
            <div class="marquee">
                <div class="marquee-content">
                    <img src="/assets/sponsor/bbc.png" alt="Logo 1" class="client-logo mx-4">
                    <img src="/assets/sponsor/mcd.png" alt="Logo 2" class="client-logo mx-4">
                    <img src="/assets/sponsor/nutella.png" alt="Logo 3" class="client-logo mx-4">
                    <img src="/assets/sponsor/statoil.png" alt="Logo 4" class="client-logo mx-4">
                    <img src="/assets/sponsor/toyota.png" alt="Logo 5" class="client-logo mx-4">
                </div>
            </div>
        </div>
    </footer>

    {{-- JavaScript for Theme Toggle --}}
    <script>
        function toggleTheme() {
            const body = document.body;
            const button = document.querySelector('.btn-theme');
            const icon = button.querySelector('.icon');
            const text = button.querySelector('.text');

            body.classList.toggle('dark-mode');
            
            if (body.classList.contains('dark-mode')) {
                icon.textContent = '🌙';
                text.textContent = 'Dark Mode';
            } else {
                icon.textContent = '☀️';
                text.textContent = 'Light Mode';
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
