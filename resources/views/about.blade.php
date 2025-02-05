@extends('layouts.master')


@section('content')

    <head>
        <title>Tentang Desa Kami</title>
    </head>

    <body class="bg-gray-100 font-sans">

        <!-- Header Section -->
        <header class="bg-green-700 text-white py-6">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl font-bold">Tentang Desa Kertawangi</h1>
                <p class="mt-2 text-lg">Mengenal lebih dekat desa kami yang indah dan penuh keramahan.</p>
            </div>
        </header>

        <!-- Main Content Section -->
        <main class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Left Column: Image -->
                <div class="flex justify-center items-center">
                    <img src="{{ asset('assets/desa.JPG') }}" alt="Desa Kami" class="rounded-lg shadow-lg">
                </div>

                <!-- Right Column: Description -->
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold text-green-800">Selamat Datang di Desa Kertawangi</h2>
                    <p class="text-gray-700 leading-relaxed">
                        Desa kami terletak di tengah alam yang asri, dikelilingi oleh perbukitan dan sawah hijau yang luas.
                        Kami bangga dengan warisan budaya dan tradisi yang masih terjaga hingga saat ini.
                        Masyarakat desa kami dikenal ramah dan saling membantu, menciptakan lingkungan yang harmonis.
                    </p>
                    <p class="text-gray-700 leading-relaxed">
                        Selain keindahan alam, desa kami juga memiliki berbagai kegiatan ekonomi seperti pertanian,
                        kerajinan tangan, dan pariwisata. Kami mengundang Anda untuk berkunjung dan merasakan
                        pengalaman yang tak terlupakan di desa kami.
                    </p>
                    <!-- <a href="#visi-misi"
                        class="inline-block bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition duration-300">
                        Baca Visi & Misi Kami
                    </a> -->
                </div>
            </div>

            <!-- Visi & Misi Section -->
            <div id="visi-misi" class="mt-16">
                <h2 class="text-3xl font-bold text-green-800 text-center mb-8">Visi & Misi Desa</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Visi -->
                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-green-700 mb-4">Visi</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Menjadikan desa kami sebagai desa yang mandiri, sejahtera, dan berkelanjutan,
                            dengan memanfaatkan potensi alam dan sumber daya manusia yang ada.
                        </p>
                    </div>

                    <!-- Misi -->
                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <h3 class="text-2xl font-bold text-green-700 mb-4">Misi</h3>
                        <ul class="list-disc list-inside text-gray-700 leading-relaxed">
                            <li>Meningkatkan kesejahteraan masyarakat melalui pengembangan ekonomi kreatif.</li>
                            <li>Melestarikan budaya dan tradisi lokal.</li>
                            <li>Membangun infrastruktur yang mendukung pertumbuhan desa.</li>
                            <li>Mendorong partisipasi aktif masyarakat dalam pembangunan desa.</li>
                        </ul>
                    </div>
                </div>
                <!-- Struktur Organisasi Section -->
                <div id="struktur-organisasi" class="mt-16">
                    <h2 class="text-3xl font-bold text-green-800 text-center mb-8">Struktur Organisasi Desa</h2>
                    <div class="flex justify-center items-center">
                        <img src="{{ asset('assets/struktur_pemerintahan.png') }}" alt="Struktur Organisasi Desa" class="rounded-lg shadow-lg">
                    </div>
                </div>
            </div>
        </main>

    </body>

    </html>
@endsection
