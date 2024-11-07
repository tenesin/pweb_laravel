<!DOCTYPE html>
<html lang="en">
<head>
    <title>MalasNgoding Blog</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .nav-link {
            position: relative;
            transition: color 0.3s;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: #6366F1;
            transition: width 0.3s;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .content-section {
            animation: fadeIn 0.8s ease-out;
        }
        
        .gradient-text {
            background: linear-gradient(45deg, #6366F1, #8B5CF6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
    @stack('styles')
</head>
<body class="bg-gray-50 min-h-screen flex flex-col">
    <header class="bg-white shadow-sm">
        <div class="max-w-5xl mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <h2 class="text-2xl font-bold gradient-text">Blog MalasNgoding</h2>
                
                <!-- Hamburger Menu for Mobile -->
                <button id="menu-toggle" class="md:hidden text-gray-600 hover:text-indigo-600 focus:outline-none focus:text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>

                <!-- Navigation Links -->
                <nav id="nav-links" class="hidden md:flex space-x-4 text-lg">
                    <a href="/tugas" class="nav-link text-gray-600 hover:text-indigo-600">Home Tugas</a>
                    <a href="/tugas/pertemuan1" class="nav-link text-gray-600 hover:text-indigo-600">Pertemuan 1</a>
                    <a href="/tugas/pertemuan2" class="nav-link text-gray-600 hover:text-indigo-600">Pertemuan 2</a>
                    <a href="/tugas/pertemuan3" class="nav-link text-gray-600 hover:text-indigo-600">Pertemuan 3</a>
                    <a href="/tugas/pertemuan5" class="nav-link text-gray-600 hover:text-indigo-600">Pertemuan 5</a>
                    <a href="/tugas/pertemuan7" class="nav-link text-gray-600 hover:text-indigo-600">Pertemuan 7</a>
                </nav>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden mt-4 hidden">
                <nav class="flex flex-col space-y-2 text-lg">
                    <a href="/tugas" class="nav-link text-gray-600 hover:text-indigo-600">Home Tugas</a>
                    <a href="/tugas/pertemuan1" class="nav-link text-gray-600 hover:text-indigo-600">Pertemuan 1</a>
                    <a href="/tugas/pertemuan2" class="nav-link text-gray-600 hover:text-indigo-600">Pertemuan 2</a>
                    <a href="/tugas/pertemuan3" class="nav-link text-gray-600 hover:text-indigo-600">Pertemuan 3</a>
                    <a href="/tugas/pertemuan5" class="nav-link text-gray-600 hover:text-indigo-600">Pertemuan 5</a>
                    <a href="/tugas/pertemuan7" class="nav-link text-gray-600 hover:text-indigo-600">Pertemuan 7</a>
                </nav>
            </div>
        </div>
    </header>

    <main class="flex-grow max-w-5xl mx-auto px-4 py-12 w-full">
        <div class="content-section">
            <h3 class="text-2xl font-semibold mb-8 text-gray-800">@yield('judul_halaman')</h3>
            <div class="prose max-w-none">
                @yield('konten')
            </div>
        </div>
    </main>

    <footer class="bg-white border-t border-gray-200 mt-auto">
        <div class="max-w-5xl mx-auto px-4 py-6">
            <p class="text-center text-gray-600">
                &copy; <a href="https://www.malasngoding.com" class="text-indigo-600 hover:text-indigo-500 transition">www.malasngoding.com</a>
                <span class="mx-2">2018 - 2024</span>
            </p>
        </div>
    </footer>

    <script>
        // JavaScript for toggling mobile menu visibility
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
