@extends('layouts.master')


@section('content')

    <head>
        <title>Umkm Desa Kertwangi</title>
    </head>
    <div class="max-w-screen-xl mx-auto p-4 ">
        <h1 class="text-3xl font-bold mb-4 text-green-800">List Umkm Kertawangi</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">



            @forelse ($umkm as $data)
                <div class="bg-white rounded-lg shadow-2xl overflow-hidden">
                    <img class="w-full h-70 object-cover" src="{{ Storage::url('public/uploads/umkm/' . $data->thumbnail) }}"
                        alt="Blog Image">
                    <div class="p-4">
                        <h2 class="text-xl font-semibold mb-2">{{ $data->nama_produk }}-{{ $data->nama_umkm }}</h2>
                        <p class="text-lg font-bold text-green-600 mb-2">
                            {{ 'Rp ' . number_format($data->harga, 0, ',', '.') }}</p>
                        <p class="text-gray-700">{{ $data->deskripsi }}</p>

                        <a href="https://wa.me/yourphonenumber" class="text-green-500 hover:underline mt-2 inline-block">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo"
                                class="inline h-7 w-7">
                        </a>
                        <a href="{{ $data->shopee_url }}" class="text-orange-500 hover:underline mt-2 inline-block">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0e/Shopee_logo.svg/1442px-Shopee_logo.svg.png"
                                alt="Shopee Logo" class="inline h-7 w-7">
                        </a>
                        <a href="{{ $data->tokopedia_url }}" class="text-green-500 hover:underline mt-2 inline-block">
                            <img src="https://w7.pngwing.com/pngs/741/278/png-transparent-tokopedia-android-online-shopping-android-shopping-mall-owl-bird-thumbnail.png"
                                alt="Tokopedia Logo" class="inline h-7 w-7">
                        </a>
                        <a href="{{ $data->instagram_url }}" class="text-pink-500 hover:underline mt-2 inline-block">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png"
                                alt="Instagram Logo" class="inline h-7 w-7">
                        </a>
                        <a href="{{ $data->tiktok_url }}" class="text-black hover:underline mt-2 inline-block">
                            <img src="https://i.pinimg.com/originals/0b/db/be/0bdbbef30f3d9833eb35f3befadd4b27.png"
                                alt="TikTok Logo" class="inline h-7 w-7">
                        </a>
                    </div>
                </div>

            @empty

                <h1>konten koson</h1>
            @endforelse

        </div>
        <div class="mt-4">
            {{ $umkm->links('vendor.pagination.tailwind') }}
        </div>
    </div>
@endsection
