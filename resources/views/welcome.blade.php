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









    <section
        class="bg-center bg-no-repeat bg-[url('https://images.unsplash.com/photo-1735538568499-58951ebb79e0?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-gray-700 bg-blend-multiply">
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

                <p class=" text-2xl font-semibold text-gray-900 ">Steve Ewon</p>

                <p class="mb-4 text-lg font-normal text-gray-500 lg:text-xl ">Kepala Desa Kertawangi

                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl ">
                    Selamat datang di Desa Kertawangi. Kami bangga menyambut Anda di desa kami yang indah dan penuh
                    dengan
                    keramahan. Kami berharap Anda menikmati kunjungan Anda dan merasakan kehangatan dari masyarakat
                    kami.
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
                    <img src="{{ Storage::url('public/' . $item->images) }}" alt="Kepala Desa"
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
                            <img src="{{ Storage::url('public/' . $item->images) }}" alt="Kepala Desa"
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

            <dl class="grid max-w-screen-md gap-8 mx-auto text-white sm:grid-cols-3">
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

    <footer class="bg-white border-gray-200">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <a href="https://flowbite.com/" class="flex items-center mb-4 sm:mb-0 space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('assets/logo.jpeg') }}" class="h-8 rounded-full" alt="Kertawangi Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap ">Desa Kertawangi</span>
                </a>
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 ">
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">About</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">Contact</a>
                    </li>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center ">© 2025 <a href="https://flowbite.com/"
                    class="hover:underline">Desa Kertawangi™</a>. All Rights Reserved.</span>
        </div>
    </footer>



</body>
