@extends('layouts.master')

@section('content')

    <head>
        <title>Detail Berita - Makkela Kela</title>

    </head>
    <div class="bg-gray-100 font-sans">

        <!-- Main Content Section -->
        <main class="container mx-auto px-4 py-12">
            <!-- Artikel Utama -->
            <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Konten Artikel -->
                <div class="p-8">
                    <!-- Judul Artikel -->
                    <h2 class="text-3xl font-bold text-gray-800 mb-4">Makkela Kela, Pererat Hubungan Antar Warga</h2>

                    <!-- Metadata Artikel -->
                    <div class="flex items-center text-gray-600 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path
                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" />
                        </svg>
                        <span>{{ $berita->created_at->format('d M Y') }}</span>
                        <span class="mx-2">•</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                        </svg>
                        <span>{{ $berita->user->name }}</span>
                    </div>
                    <!-- Gambar Artikel -->
                    <div class="flex justify-center mb-6">
                        <img src="{{ asset('assets/Teater_JKT48_2023.jpg') }}" alt="Makkela Kela"
                            class="w-full h-100 object-content">
                    </div>

                    <!-- Isi Artikel -->
                    <div class="prose max-w-none text-gray-700 leading-relaxed">
                        {!! $berita->content !!}
                    </div>
                </div>
            </article>


        </main>

    </div>
@endsection
