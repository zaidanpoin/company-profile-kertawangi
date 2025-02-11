<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body>


    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>









    <section
        class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">
                Selamat Datang Di Desa Kertawangi</h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at Flowbite we focus on
                markets where technology, innovation, and capital can unlock long-term value and drive economic growth.
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
        <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-tight text-gray-900 dark:text-white md:text-4xl">
            Tentang Desa Kertawangi</h2>
        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">
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
                class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-gray-900 rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 dark:text-white dark:border-gray-700 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
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
                <h2
                    class="mb-4 text-3xl font-extrabold tracking-tight leading-tight text-gray-900 dark:text-white md:text-4xl">
                    Sambutan Kepala Desa</h2>

                <p class=" text-2xl font-semibold text-gray-900 dark:text-white">Steve Ewon</p>

                <p class="mb-4 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">Kepala Desa Kertawangi

                <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                    Selamat datang di Desa Kertawangi. Kami bangga menyambut Anda di desa kami yang indah dan penuh
                    dengan
                    keramahan. Kami berharap Anda menikmati kunjungan Anda dan merasakan kehangatan dari masyarakat
                    kami.
                </p>
            </div>
        </div>
    </section>
    {{-- end kepala desa --}}


    <section class="py-8 border-2 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
        <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-tight text-gray-900 dark:text-white md:text-4xl">
            Peta Desa Kertawangi</h2>

        <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
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


    {{-- struktu --}}
    <section class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
        <h2 class="mb-4 text-3xl font-extrabold tracking-tight leading-tight text-gray-900 dark:text-white md:text-4xl">
            Struktur Organisasi Desa Kertawangi</h2>
        <div class="grid gap-8 lg:grid-cols-3">
            <div class="bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <img src="{{ asset('assets/adzana_shaliha.webp') }}" alt="Kepala Desa"
                    class="w-full h-100 object-contain rounded-t-lg">
                <div class="p-6">
                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Kepala Desa</h3>
                    <p class="text-gray-700 dark:text-gray-400">Steve Ewon</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <img src="{{ asset('assets/adeline_wijaya.webp') }}" alt="Sekretaris Desa"
                    class="w-full h-100 object-contain rounded-t-lg">
                <div class="p-6">
                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Sekretaris Desa</h3>
                    <p class="text-gray-700 dark:text-gray-400">Jane Doe</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <img src="{{ asset('assets/freya_jayawardana.webp') }}" alt="Sekretaris Desa"
                    class="w-full h-100 object-contain rounded-t-lg">
                <div class="p-6">
                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Sekretaris Desa</h3>
                    <p class="text-gray-700 dark:text-gray-400">Jane Doe</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <img src="{{ asset('assets/flora_shafiq.webp') }}" alt="Sekretaris Desa"
                    class="w-full h-100 object-contain rounded-t-lg">
                <div class="p-6">
                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Sekretaris Desa</h3>
                    <p class="text-gray-700 dark:text-gray-400">Jane Doe</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <img src="{{ asset('assets/yessica_tamara.webp') }}" alt="Sekretaris Desa"
                    class="w-full h-100 object-contain rounded-t-lg">
                <div class="p-6">
                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Sekretaris Desa</h3>
                    <p class="text-gray-700 dark:text-gray-400">Jane Doe</p>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <img src="{{ asset('assets/aisa_maharani.webp') }}" alt="Sekretaris Desa"
                    class="w-full h-100 object-contain rounded-t-lg">
                <div class="p-6">
                    <h3 class="mb-2 text-xl font-bold text-gray-900 dark:text-white">Sekretaris Desa</h3>
                    <p class="text-gray-700 dark:text-gray-400">Jane Doe</p>
                </div>
            </div>

        </div>
    </section>
    {{-- end struktur --}}



    {{-- galery --}}
    <section class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-12">
        <div class="container mx-auto">
            <h1 class="text-3xl font-bold text-center mt-10 mb-5">GALERI DESA</h1>
            <p class="text-center mb-10">Menampilkan kegiatan-kegiatan yang berlangsung di desa</p>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">

                <div class="rounded-lg shadow-md">
                    <img src="{{ asset('assets/download.jpg') }}" alt="Kegiatan makan bersama"
                        class="rounded-lg h-full w-full">
                </div>

                <div class="rounded-lg shadow-md">
                    <img src="{{ asset('assets/Teater_JKT48_2023.jpg') }}" alt="Kegiatan pelatihan"
                        class="rounded-lg h-full w-full">
                </div>
                <div class="rounded-lg shadow-md">
                    <img src="{{ asset('assets/357148367_291028680057163_8862263702458317789_n-18520740.webp') }}"
                        alt="Kegiatan pelatihan" class="rounded-lg w-full">
                </div>

                <div class="rounded-lg shadow-md">
                    <img src="{{ asset('assets/download.jpg') }}" alt="Kegiatan makan bersama"
                        class="rounded-lg h-full w-full">
                </div>

                <div class="rounded-lg shadow-md">
                    <img src="{{ asset('assets/Teater_JKT48_2023.jpg') }}" alt="Kegiatan pelatihan"
                        class="rounded-lg h-full w-full">
                </div>
                <div class="rounded-lg shadow-md">
                    <img src="{{ asset('assets/357148367_291028680057163_8862263702458317789_n-18520740.webp') }}"
                        alt="Kegiatan pelatihan" class="rounded-lg w-full">
                </div>

            </div>
        </div>
    </section>
    {{-- end  --}}

    {{-- admintiastari --}}
    <section class="bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
            <h2
                class="mb-4 text-3xl font-extrabold tracking-tight leading-tight text-gray-900 dark:text-white md:text-4xl">
                Administrasi Penduduk
            </h2>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                Administrasi penduduk Desa Kertawangi mencakup berbagai layanan seperti pendaftaran penduduk, pencatatan
                sipil, dan pengelolaan data kependudukan. Kami berkomitmen untuk memberikan pelayanan terbaik bagi
                masyarakat desa.
            </p>


            <dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-3 dark:text-white">
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl counter font-extrabold" data-target="1000">0</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Penduduk</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl counter font-extrabold" data-target="300">0</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Kepala Keluarga</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl counter font-extrabold" data-target="10">0</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Penduduk Sementara</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl counter font-extrabold" data-target="550">0</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Laki-laki</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl counter font-extrabold" data-target="450">0</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Perempuan</dd>
                </div>
                <div class="flex flex-col items-center justify-center">
                    <dt class="mb-2 text-3xl md:text-4xl counter font-extrabold" data-target="30">0</dt>
                    <dd class="font-light text-gray-500 dark:text-gray-400">Mutasi Penduduk</dd>
                </div>
            </dl>
        </div>
    </section>
    {{-- end --}}



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


</body>

</html>
