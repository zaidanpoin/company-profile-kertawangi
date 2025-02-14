@extends('layouts.master')




@section('content')

    <head>

        <title>Peta Desa Kertawangi</title>

        <link rel = "stylesheet" href = "http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.css" />
        <script src="http://cdn.leafletjs.com/leaflet-0.7.3/leaflet.js"></script>
    </head>
    <div class="container mx-auto p-4">
        <h1 class="text-4xl font-bold text-center text-green-800 mb-4">Peta Wisata</h1>

        <div id="map" class="w-full h-[500px] rounded-lg shadow-md"></div>

        <div id="info-card"
            class="hidden fixed bottom-4 left-1/2 transform -translate-x-1/2 bg-white p-4 rounded-lg shadow-lg w-80">
            <h2 id="wisata-nama" class="text-lg font-bold">Nama Wisata</h2>
            <p id="wisata-deskripsi" class="text-gray-700"></p>
            <button onclick="hideCard()" class="mt-2 px-4 py-1 bg-red-500 text-white rounded">Tutup</button>
        </div>
    </div>

    <script>
        var map = L.map('map', {
            center: [-6.803090, 107.569948], // Koordinat Desa Kertawangi
            zoom: 16

        }).setView([-6.803090, 107.569948], 14); // Fokus ke Desa Kertawangi
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Polygon Wilayah Desa Kertawangi (disesuaikan dengan peta referensi)


        // Data wisata (pastikan formatnya benar dalam database)
        var wisataData = @json($wisatas);

        wisataData.forEach(wisata => {
            console.log(wisataData)
            var marker = L.marker([wisata.latitude, wisata.longtitude]).addTo(map)
                .bindPopup(
                    `<b>${wisata.nama}</b><br>
            <img src="{{ asset('storage/') }}/${wisata.gambar}"
            alt="${wisata.nama}" style="width:120px;height:120px;object-fit:cover;"><br>
            <p>${wisata.deskripsi}</p>
            <p><b>Alamat:</b> ${wisata.alamat}</p>`
                )
                .on('click', function() {
                    showCard(wisata.nama, wisata.deskripsi);
                });
        });

        function showCard(nama, deskripsi) {
            document.getElementById('wisata-nama').innerText = nama;
            document.getElementById('wisata-deskripsi').innerText = deskripsi;
            document.getElementById('info-card').classList.remove('hidden');
        }

        function hideCard() {
            document.getElementById('info-card').classList.add('hidden');
        }
    </script>
@endsection
