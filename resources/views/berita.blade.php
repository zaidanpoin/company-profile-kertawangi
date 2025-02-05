@extends('layouts.master')


@section('content')
    <div class="max-w-screen-xl mx-auto p-4 ">
        <div class="container mx-auto p-4">

            <h2 class="text-4xl font-bold text-green-800 mb-4">Berita Desa</h2>
            <p class="text-gray-700">Menyajikan informasi terbaru tentang peristiwa, berita terkini, dan artikel-artikel
                jurnalistik dari Desa Kertawangi</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @forelse ($berita as $data)
                <div class="bg-white rounded-lg shadow-2xl overflow-hidden">
                    <img class="w-full h-70 object-cover " src="{{ Storage::url('public/uploads/berita/' . $data->images) }}"
                        alt="Blog Image">
                    <div class="p-4">

                        <a href="{{ url('/detailberita/' . $data->id) }}" class="text-black-500 hover:underline">
                            <h2 class="text-xl text-black  font-semibold mb-2">{{ $data->judul }}</h2>
                        </a>
                        <p class="text-gray-700">{{ Str::limit(strip_tags($data->content), 100) }}</p>
                        <p class="text-gray-500 text-sm flex items-center">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 4h10a2 2 0 012 2v11a2 2 0 01-2 2H7a2 2 0 01-2-2V9a2 2 0 012-2zm3 4h4">
                                </path>
                            </svg>
                            {{ $data->created_at->format('d M Y') }} oleh
                            <svg class="w-6 h-6 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5.121 17.804A3.5 3.5 0 018.5 16h7a3.5 3.5 0 013.379 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 14v1m0 4h.01" />
                            </svg>
                            {{ $data->user->name }}
                        </p>
                    </div>
                </div>
            @empty
                <p class="text-gray-700">Tidak ada berita yang tersedia saat ini.</p>
            @endforelse


        </div>
        <div class="mt-4">
            {{ $berita->links('vendor.pagination.tailwind') }}
        </div>
    </div>
@endsection
