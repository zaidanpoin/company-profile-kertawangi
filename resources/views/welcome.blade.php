<!doctype html>


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>asdasd</title>
</head>

<body>


    <nav class="bg-white border-gray-200 ">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('assets/logo.jpeg') }}" class="h-12 rounded-full" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap ">Desa kertawangi</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const button = document.querySelector('[data-collapse-toggle="navbar-default"]');
                        const menu = document.getElementById('navbar-default');

                        button.addEventListener('click', function() {
                            menu.classList.toggle('hidden');
                        });
                    });
                </script>
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white ">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/umkm') }}"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:bg-transparent">UMKM</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Contact</a>
                    </li>
                    </uldark>
            </div>
        </div>
    </nav>









    <section class="bg-center bg-no-repeat bg-gray-700 bg-blend-multiply"
        style="background-image: url('{{ Storage::url('public/' . $konten[0]['gambar_depan']) }}');">

        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">

            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Selamat Datang Di Desa Kertawangi</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Lorem ipsum dolor sit amet
                consectetur adipisicing elit. Nemo officiis modi eligendi vero, a architecto maiores sapiente quas,
                perspiciatis necessitatibus distinctio facilis, eius odio! Id fugiat eligendi beatae exercitationem
                nesciunt!
            </p>
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                    Get started
                    <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
                <a href="#"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 sm:ms-4 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Learn more
                </a>
            </div>
        </div>
    </section>
    <style>
        @media (max-width: 768px) {
            body {
                overflow-x: hidden;
            }
        }
    </style>
    <section class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
        <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-tight text-gray-900 md:text-4xl">
            Tentang Desa Kertawangi</h2>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48">
            Desa Kertawangi adalah sebuah desa yang terletak di kaki Gunung Tangkuban Perahu. Desa ini dikenal dengan
            keindahan alamnya yang mempesona dan udara yang sejuk. Masyarakat desa ini hidup dengan damai dan saling
            membantu satu sama lain.
        </p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
            <a href="#"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                Pelajari Lebih Lanjut
            </a>
            <a href="#"
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200  ">
                Hubungi Kami
            </a>
        </div>
    </section>

    {{-- kepala desa --}}
    <section class="py-8     px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
        <div class="flex flex-col lg:flex-row items-center justify-between">
            <div class="lg:w-2/3 flex ">
                <img src="https://asset-2.tstatic.net/jabar/foto/bank/images/steve-ewon-kades.jpg" class="h-100 w-100"
                    alt="Logo Desa Kertawangi" />
            </div>
            <div class="lg:w-2/3 mb-8 lg:mb-0">
                <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-tight text-gray-900 md:text-4xl">
                    Sambutan Kepala Desa</h2>

                <p class=" text-2xl font-semibold text-gray-900 ">{{ $konten[0]['nama_pak_kades'] }}</p>

                <p class="mb-4 text-lg font-normal text-gray-500 lg:text-xl ">Kepala Desa Kertawangi</p>

                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl text-justify">
                    {{ $konten[0]['kata_sambutan'] }}
                </p>
            </div>
        </div>
    </section>
    {{-- end kepala desa --}}





    {{-- struktu --}}

    <section class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12 ">
        <h2 class="mb-4 text-3xl font-extrabold test tracking-tight leading-tight text-gray-900 md:text-4xl">
            Struktur Organisasi Desa Kertawangi</h2>

        <div class="md:grid md:gap-8 lg:grid-cols-3 hidden md:block">
            @foreach ($anggotaOrganisasi as $item)
                <div class="bg-white rounded-lg shadow-lg">
                    <img src="{{ Storage::url('public/uploads/struktur/' . $item->images) }}" alt="Kepala Desa"
                        class="w-full h-100 object-contain rounded-t-lg">
                    <div class="p-6">
                        <h3 class="mb-2 text-xl font-bold text-gray-900">{{ $item->jabatan }}</h3>
                        <p class="text-gray-700">{{ $item->nama }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-container md:hidden">
            <div class="swiper-wrapper">
                @foreach ($anggotaOrganisasi as $item)
                    <div class="swiper-slide">
                        <div class="bg-white rounded-lg shadow-lg">
                            <img src="{{ Storage::url('public/uploads/struktur/' . $item->images) }}" alt="Kepala Desa"
                                class="w-full h-100 object-contain rounded-t-lg">
                            <div class="p-6">
                                <h3 class="mb-2 text-xl font-bold text-gray-900">{{ $item->jabatan }}</h3>
                                <p class="text-gray-700">{{ $item->nama }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const swiper = new Swiper('.swiper-container', {
                    slidesPerView: 1,
                    spaceBetween: 10,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {
                        640: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 30,
                        },
                        1024: {
                            slidesPerView: 3,
                            spaceBetween: 40,
                        },
                    },
                });
            });
        </script>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    </section>

    {{-- end struktur --}}
    {{-- admintiastari --}}
    <section class="bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
            <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-tight text-white md:text-4xl">
                Administrasi Penduduk
            </h2>
            <p class="mb-8 text-lg font-normal text-gray-400 lg:text-xl">
                Administrasi penduduk Desa Kertawangi mencakup berbagai layanan seperti pendaftaran penduduk, pencatatan
                sipil, dan pengelolaan data kependudukan. Kami berkomitmen untuk memberikan pelayanan terbaik bagi
                masyarakat desa.
            </p>

            <dl class="grid max-w-screen-md gap-8 mx-auto text-white grid-cols-2 sm:grid-cols-2 md:grid-cols-3">
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl counter font-extrabold"
                        data-target="{{ $administrasi[0]['penduduk'] }}">0</dt>
                    <dd class="font-light text-gray-400">Penduduk</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl counter font-extrabold"
                        data-target="{{ $administrasi[0]['kepala_keluarga'] }}">0</dt>
                    <dd class="font-light text-gray-400">Kepala Keluarga</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl counter font-extrabold"
                        data-target="{{ $administrasi[0]['penduduk_sementara'] }}">0</dt>
                    <dd class="font-light text-gray-400">Penduduk Sementara</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl counter font-extrabold"
                        data-target="{{ $administrasi[0]['laki_laki'] }}">0</dt>
                    <dd class="font-light text-gray-400">Laki-laki</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl counter font-extrabold"
                        data-target="{{ $administrasi[0]['perempuan'] }}">0</dt>
                    <dd class="font-light text-gray-400">Perempuan</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl counter font-extrabold"
                        data-target="{{ $administrasi[0]['mutasi_penduduk'] }}">0</dt>
                    <dd class="font-light text-gray-400">Mutasi Penduduk</dd>
                </div>
            </dl>
        </div>
    </section>
    {{-- end --}}



    {{-- galery --}}
    <section class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold text-center mt-10 mb-5">GALERI DESA</h1>
            <p class="text-center mb-10">Menampilkan kegiatan-kegiatan yang berlangsung di desa</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">



                <div class="rounded-lg shadow-md">
                    <img src="{{ Storage::url('public/' . $galeri[0]['gambar1']) }}" alt="Kegiatan makan bersama"
                        class="rounded-lg h-70 w-full object-cover">
                </div>
                <div class="rounded-lg shadow-md">
                    <img src="{{ Storage::url('public/' . $galeri[0]['gambar2']) }}" alt="Kegiatan pelatihan"
                        class="rounded-lg h-70 w-full object-cover">
                </div>
                <div class="rounded-lg shadow-md">
                    <img src="{{ Storage::url('public/' . $galeri[0]['gambar3']) }}" alt="Kegiatan makan bersama"
                        class="rounded-lg h-70 w-full object-cover">
                </div>
                <div class="rounded-lg shadow-md">
                    <img src="{{ Storage::url('public/' . $galeri[0]['gambar4']) }}" alt="Kegiatan pelatihan"
                        class="rounded-lg h-70 w-full object-cover">
                </div>
                <div class="rounded-lg shadow-md">
                    <img src="{{ Storage::url('public/' . $galeri[0]['gambar5']) }}" alt="Kegiatan pelatihan"
                        class="rounded-lg h-70 w-full object-cover">
                </div>
                <div class="rounded-lg shadow-md">
                    <img src="{{ Storage::url('public/' . $galeri[0]['gambar6']) }}" alt="Kegiatan pelatihan"
                        class="rounded-lg h-70 w-full object-cover">
                </div>

            </div>
        </div>
    </section>
    {{-- end  --}}




    </section>


    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter');
            const options = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const animateCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                const current = +counter.innerText;
                const increment = target / 200;

                if (current < target) {
                    counter.innerText = Math.ceil(current + increment);
                    requestAnimationFrame(() => animateCounter(counter));
                } else {
                    counter.innerText = target;
                    counter.classList.add('animate');
                }
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, options);

            counters.forEach(counter => {
                observer.observe(counter);
            });
        });
    </script>

    <section class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
        <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-tight text-gray-900 md:text-4xl">
            Peta Desa Kertawangi</h2>

        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl">
            Berikut adalah peta Desa Kertawangi yang dapat membantu Anda menemukan lokasi kami dengan mudah. Gunakan
            peta interaktif di bawah ini untuk menjelajahi desa kami dan menemukan tempat-tempat menarik yang ada di
            sekitar.
        </p>

        <div class="flex ">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.548272761825!2d110.369489314776!3d-7.795579994379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a579b1b1b1b1b%3A0x1b1b1b1b1b1b1b1b!2sDesa%20Kertawangi!5e0!3m2!1sen!2sid!4v1634567890123!5m2!1sen!2sid"
                style="border:0; width: 100%; height: 500px;" allowfullscreen="" loading="lazy"
                title="Peta Desa Kertawangi">
            </iframe>
        </div>
    </section>

    <footer class="bg-green-800 text-white py-12 rounded-t-4xl">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Kolom 1: Logo dan Nama Desa -->
                <div>
                    <div class="flex gap-4">
                        <div class=""><img src="{{ asset('assets/logo.jpeg') }}" alt="Logo Desa"
                                class="w-20 h-20 mb-4"></div>
                        <div class="">
                            <h3 class="text-xl font-bold mb-2">Desa Sukamaju</h3>
                            <p class="text-sm">Kecamatan Cilengkrang</p>
                            <p class="text-sm">Kabupaten Bandung</p>
                            <p class="text-sm">Provinsi Jawa Barat</p>
                        </div>
                    </div>



                    <!-- Media Sosial -->
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-white hover:text-green-300 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-green-300 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="#" class="text-white hover:text-green-300 transition duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Kolom 2: Kontak Desa -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Kontak Desa</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                            <span>+62 123 4567 890</span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                            </svg>
                            <span>desasukamaju@gmail.com</span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Senin - Jumat, 08:00 - 16:00</span>
                        </li>
                        <li class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span>Jl. Sukamaju No. 123, Bandung</span>
                        </li>
                    </ul>
                </div>

                <!-- Kolom 3: Nomor Telepon Penting -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Nomor Penting</h3>
                    <ul class="space-y-2">
                        <li>Polisi: 110</li>
                        <li>Ambulans: 118</li>
                        <li>Pemadam Kebakaran: 113</li>
                        <li>Call Center COVID-19: 119</li>
                    </ul>
                </div>

                <!-- Kolom 4: Jelajahi -->
                <div>
                    <h3 class="text-xl font-bold mb-4">Jelajahi</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-green-300 transition duration-300">Website
                                Kemendesa</a></li>
                        <li><a href="#" class="hover:text-green-300 transition duration-300">Website
                                Kemendagri</a></li>
                        <li><a href="#" class="hover:text-green-300 transition duration-300">Website
                                Kabupaten</a></li>
                        <li><a href="#" class="hover:text-green-300 transition duration-300">Cek DPT Online</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>



</body>
