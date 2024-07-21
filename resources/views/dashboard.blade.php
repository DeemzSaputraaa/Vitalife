<x-app-layout>
    {{-- halaman 1 --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 reveal mt-8">
        <div class="pt-1">
            <div class="container flex items-center justify-center">
                <div class="flex flex-row items-center justify-between w-full">
                    <div class="w-1/2 text-left pl-4 sm:pl-8 md:pl-12 lg:pl-16 xl:pl-20 pr-4 sm:pr-8">
                        <p class="uppercase tracking-loose text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">
                            Skip the Travel! Take Online
                        </p>
                        <h1
                            class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight mt-2 mb-4">
                            Welcome <span class="text-blue-300">Vitalife</span>
                        </h1>
                        <div class="mb-4 sm:mb-8">
                            <p
                                class="text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl h-16 sm:h-20 md:h-24 lg:h-28 xl:h-32 overflow-hidden">
                                <span id="typed-text"></span>
                                <span class="typed-cursor animate-blink">|</span>
                            </p>
                        </div>
                        <a href="#spesialis" class="inline-block group">
                            <button
                                class="bg-blue-500 text-white font-bold rounded-full py-2 px-4 sm:py-3 sm:px-6 md:py-4 md:px-8 lg:py-5 lg:px-10 xl:py-6 xl:px-12 shadow-lg 
                                transform transition duration-300 ease-in-out
                                hover:scale-105 hover:bg-blue-600 hover:shadow-xl
                                focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                                <span
                                    class="inline-block transform group-hover:translate-x-1 transition-transform duration-200">
                                    Consult Now
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-4 w-4 sm:h-5 sm:w-5 md:h-6 md:w-6 lg:h-7 lg:w-7 xl:h-8 xl:w-8 inline-block ml-2 transform group-hover:translate-x-1 transition-transform duration-200"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div class="w-1/2 flex justify-end">
                        <div class="rounded-lg overflow-hidden">
                            <img class="w-full h-auto object-cover" src="../image/bgdash.png"
                                alt="Dashboard Background" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- halaman 2 --}}

    <div id="features"
        class="bg-white rounded-lg shadow-md p-3 sm:p-4 md:p-5 text-center flex flex-col items-center reveal">
        <h2 class="text-2xl sm:text-3xl font-bold mb-5 sm:mb-7 md:mb-9">Wellness Support</h2>
        <div class="flex flex-wrap justify-center gap-10 sm:gap-14 md:gap-20 lg:gap-28">
            <a href="/spa"
                class="flex-shrink-0 transform transition duration-300 hover:scale-105 group mb-5 sm:mb-7">
                <div class="relative p-3 sm:p-4 md:p-5 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/spa.png" alt="spa" class="h-14 sm:h-16 md:h-20 mb-3 sm:mb-4" />
                    <p class="text-sm sm:text-base font-bold">SPA</p>
                </div>
            </a>

            <a href="/yoga"
                class="flex-shrink-0 transform transition duration-300 hover:scale-105 group mb-5 sm:mb-7">
                <div class="relative p-3 sm:p-4 md:p-5 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/meditation.png" alt="Meditation" class="h-14 sm:h-16 md:h-20 mb-3 sm:mb-4" />
                    <p class="text-sm sm:text-base font-bold">YOGA</p>
                </div>
            </a>

            <a href="/event"
                class="flex-shrink-0 transform transition duration-300 hover:scale-105 group mb-5 sm:mb-7">
                <div class="relative p-3 sm:p-4 md:p-5 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/run.png" alt="event" class="h-14 sm:h-16 md:h-20 mb-3 sm:mb-4" />
                    <p class="text-sm sm:text-base font-bold">EVENT</p>
                </div>
            </a>
        </div>
    </div>

    {{-- <div id="features" class="bg-white rounded-full mx-12 shadow-xl p-5 text-center flex flex-col items-center reveal">
        <h2 class="text-3xl font-bold mb-8">Wellness Support</h2>
        <div class="flex justify-center space-x-28">
            <a href="/spa" class="flex-shrink-0 transform transition duration-300 hover:scale-105 group">
                <div class="relative p-3 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/spa.png" alt="spa" class="h-24 mb-3" />
                    <p class="text-base font-bold">SPA</p>
                </div>
            </a>

            <a href="/yoga" class="flex-shrink-0 transform transition duration-300 hover:scale-105 group">
                <div class="relative p-3 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/meditation.png" alt="Meditation" class="h-24 mb-3" />
                    <p class="text-base font-bold">YOGA</p>
                </div>
            </a>

            <a href="/event" class="flex-shrink-0 transform transition duration-300 hover:scale-105 group">
                <div class="relative p-3 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/run.png" alt="event" class="h-24 mb-3" />
                    <p class="text-base font-bold">EVENT</p>
                </div>
            </a>
        </div>
    </div> --}}

    {{-- halaman 3 --}}
    <div id="spesialis" class="p-5 sm:p-8 md:p-10 text-center flex flex-col items-center reveal">
        <h2 class="text-2xl sm:text-3xl font-bold mb-10 sm:mb-12 text-navy-blue">Specialisation</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-8 sm:gap-10">
            <a href="{{ route('spesialisFilter') }}?spesialisasi=Anatomy" id="anatomy" name="anatomy"
                class="flex flex-col items-center group">
                <div
                    class="w-full aspect-square bg-white shadow-md rounded-lg flex flex-col items-center justify-center p-6 transition duration-300 hover:shadow-lg">
                    <img src="../image/anatomy.png" alt="Anatomy" class="w-16 h-16 mb-4" />
                    <p class="text-sm font-medium text-gray-600">Anatomy</p>
                </div>
            </a>
            <a href="{{ route('spesialisFilter') }}?spesialisasi=Primary Care" id="Primary Care" name="Primary Care"
                class="flex flex-col items-center group">
                <div
                    class="w-full aspect-square bg-white shadow-md rounded-lg flex flex-col items-center justify-center p-6 transition duration-300 hover:shadow-lg">
                    <img src="../image/care.png" alt="Primary Care" class="w-16 h-16 mb-4" />
                    <p class="text-sm font-medium text-gray-600">Primary Care</p>
                </div>
            </a>
            <a href="{{ route('spesialisFilter') }}?spesialisasi=Cardiology" id="cardiology" name="cardiology"
                class="flex flex-col items-center transform transition duration-300 hover:scale-105 group">
                <div class="relative p-3 sm:p-4 md:p-5 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/cardiology.png" alt="Cardiology" class="h-14 sm:h-16 md:h-20 mb-3 sm:mb-4" />
                    <p class="text-sm sm:text-base font-bold">Cardiology</p>
                </div>
            </a>
            <a href="{{ route('spesialisFilter') }}?spesialisasi=Skin Genitals" id="skinGenitals" name="specialization"
                class="flex flex-col items-center transform transition duration-300 hover:scale-105 group">
                <div class="relative p-3 sm:p-4 md:p-5 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/skin.png" alt="Skin & Genitals" class="h-14 sm:h-16 md:h-20 mb-3 sm:mb-4" />
                    <p class="text-sm sm:text-base font-bold">Skin & Genitals</p>
                </div>
            </a>
            <a href="{{ route('spesialisFilter') }}?spesialisasi=Human Senses" id="humanSenses" name="specialization"
                class="flex flex-col items-center transform transition duration-300 hover:scale-105 group">
                <div class="relative p-3 sm:p-4 md:p-5 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/human.png" alt="Human Senses" class="h-14 sm:h-16 md:h-20 mb-3 sm:mb-4" />
                    <p class="text-sm sm:text-base font-bold">Human Senses</p>
                </div>
            </a>
            <a href="{{ route('spesialisFilter') }}?spesialisasi=Piscologist" id="piscologist" name="specialization"
                class="flex flex-col items-center transform transition duration-300 hover:scale-105 group">
                <div class="relative p-3 sm:p-4 md:p-5 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/psico.png" alt="Piscologist" class="h-14 sm:h-16 md:h-20 mb-3 sm:mb-4" />
                    <p class="text-sm sm:text-base font-bold">Piscologist</p>
                </div>
            </a>
            <a href="{{ route('spesialisFilter') }}?spesialisasi=Physiotherapi" id="fisioterapy"
                name="specialization"
                class="flex flex-col items-center transform transition duration-300 hover:scale-105 group">
                <div class="relative p-3 sm:p-4 md:p-5 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/fisio.png" alt="Fisioterapy" class="h-14 sm:h-16 md:h-20 mb-3 sm:mb-4" />
                    <p class="text-sm sm:text-base font-bold">Fisioterapy</p>
                </div>
            </a>
            <a href="{{ route('spesialisFilter') }}?spesialisasi=Pregnancy" id="pregnancy" name="specialization"
                class="flex flex-col items-center transform transition duration-300 hover:scale-105 group">
                <div class="relative p-3 sm:p-4 md:p-5 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/preg.png" alt="Pregnancy" class="h-14 sm:h-16 md:h-20 mb-3 sm:mb-4" />
                    <p class="text-sm sm:text-base font-bold">Pregnancy</p>
                </div>
            </a>
        </div>
    </div>

    {{-- halaman 4 voucher --}}
    <section id="voucher" class="py-2 md:py-5 bg-white text-zinc-900 dark:text-white z-10 reveal">
        <div class="container px-10 mx-auto">
            <div class="relative" x-data="imageSlider()">
                <div id="imageSlider" class="overflow-hidden relative">
                    <div class="flex transition-transform duration-500 ease-in-out"
                        :style="{ transform: `translateX(-${currentIndex * (100/3)}%)` }">
                        @foreach ($vouchers as $voucher)
                            <div class="w-1/3 flex-shrink-0 px-3">
                                <!-- Debug: Print image path -->
                                {{ asset($voucher->image) }}

                                <img class="w-full rounded-xl cursor-pointer" src="{{ asset($voucher->image) }}"
                                    alt="{{ $voucher->description }}"
                                    onclick="openPopup('{{ asset($voucher->image) }}', '{{ $voucher->description }}', '{{ $voucher->code }}')" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Popup -->
    <div id="popup"
        class="fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm hidden flex items-center justify-center z-50">
        <div class="bg-white p-6 rounded-xl max-w-lg w-full mx-4 max-h-[90vh] overflow-y-auto relative">
            <button onclick="closePopup()" class="absolute top-2 right-2 text-gray-600 hover:text-gray-800">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm7.707-3.707a1 1 0 0 0-1.414 1.414L10.586 12l-2.293 2.293a1 1 0 1 0 1.414 1.414L12 13.414l2.293 2.293a1 1 0 0 0 1.414-1.414L13.414 12l2.293-2.293a1 1 0 0 0-1.414-1.414L12 10.586 9.707 8.293Z"
                        clip-rule="evenodd" />
                </svg>
            </button>
            <img id="popupImage" src="" alt="" class="w-full rounded-xl mb-4">
            <p id="popupDescription" class="text-gray-700 mb-4"></p>
            <div class="border border-gray-300 rounded-md p-3 mb-4 inline-block">
                <p class="font-bold text-lg" id="voucherCode"></p>
            </div>
        </div>
    </div>

    <section class="bg-blue-50 p-4 sm:p-8 md:p-12 lg:p-16 reveal">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-4">
            <div class="flex md:flex-row justify-between items-start">
                <div class="flex-1 md:w-1/2 mb-8 md:mb-0">
                    <p class="text-blue-500 uppercase text-sm font-semibold mb-2">CARING FOR THE HEALTH OF YOU AND YOUR
                        FAMILY.</p>
                    <h2 class="text-3xl font-bold text-navy-800 mb-4">Our Families</h2>
                    <p class="text-gray-600 mb-4">
                        We will work with you to develop individualised care plans, including management of chronic
                        diseases. If we cannot assist, we can provide referrals or advice about the type of practitioner
                        you require. We treat all enquiries sensitively and in the strictest confidence.
                    </p>
                </div>
                <div class=" flex-col md:w-1/2 grid grid-cols-2 gap-4">
                    <div class="bg-white p-6 rounded-lg shadow-sm flex flex-col items-center">
                        <div class="bg-blue-100 p-3 rounded-full mb-4">
                            <svg class="w-6 h-6 text-blue-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                                </path>
                            </svg>
                        </div>
                        <h3 id="counter1" class="text-3xl font-bold text-navy-800 mb-2">0</h3>
                        <p class="text-gray-500">Happy Patients</p>
                    </div>
                    <div class="bg-white p-6 mt-12 rounded-lg shadow-sm flex flex-col items-center">
                        <div class="bg-red-100 p-3 rounded-full mb-4">
                            <svg class="w-6 h-6 text-red-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                                </path>
                            </svg>
                        </div>
                        <h3 id="counter2" class="text-3xl font-bold text-navy-800 mb-2">0</h3>
                        <p class="text-gray-500">Hospitals</p>
                    </div>
                    <div class="bg-white p-6 mb-12 rounded-lg shadow-sm flex flex-col items-center">
                        <div class="bg-yellow-100 p-3 rounded-full mb-4">
                            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 21l-7-5-7 5V5a2 2 0 012-2h10a2 2 0 012 2z"></path>
                            </svg>
                        </div>
                        <h3 id="counter3" class="text-3xl font-bold text-navy-800 mb-2">0</h3>
                        <p class="text-gray-500">Laboratories</p>
                    </div>
                    <div class="bg-white p-6 rounded-lg shadow-sm flex flex-col items-center">
                        <div class="bg-green-100 p-3 rounded-full mb-4">
                            <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                        <h3 id="counter4" class="text-3xl font-bold text-navy-800 mb-2">0</h3>
                        <p class="text-gray-500">Expert Doctors</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // POP Up
        function openPopup(imageSrc, description, voucherCode) {
            const popup = document.getElementById('popup');
            const popupImage = document.getElementById('popupImage');
            const popupDescription = document.getElementById('popupDescription');
            const voucherCodeElement = document.getElementById('voucherCode');

            popupImage.src = `../image/${imageSrc}`;
            popupDescription.textContent = description;
            voucherCodeElement.textContent = voucherCode;
            popup.classList.remove('hidden');
        }

        function closePopup() {
            const popup = document.getElementById('popup');
            popup.classList.add('hidden');
        }

        function imageSlider() {
            return {
                currentIndex: 0,
                totalSlides: 7, // Jumlah total gambar
                nextSlide() {
                    this.currentIndex = (this.currentIndex + 1) % (this.totalSlides - 2);
                },
                startSlider() {
                    setInterval(() => this.nextSlide(), 3000);
                },
                init() {
                    this.startSlider();
                }
            }
        }

        // Fungsi untuk menampilkan loading
        function showLoading() {
            Swal.fire({
                title: 'Loading...',
                text: 'Please wait',
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    Swal.showLoading();
                }
            });
        }

        // Tampilkan loading saat halaman dimuat
        window.addEventListener('load', function() {
            showLoading();
            // Sembunyikan loading setelah halaman selesai dimuat
            setTimeout(() => {
                Swal.close();
            }, 500); // Atur waktu delay sesuai kebutuhan
        });

        // Tampilkan loading saat berpindah halaman
        document.addEventListener('click', function(e) {
            const target = e.target.closest('a');
            if (target && !target.getAttribute('download') && target.href && !target.href.startsWith('#') && !e
                .ctrlKey && !e.metaKey) {
                e.preventDefault();
                showLoading();
                setTimeout(() => {
                    window.location = target.href;
                }, 500); // Atur waktu delay sesuai kebutuhan
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const scroll = urlParams.get('scroll');
            if (scroll === 'voucher') {
                const voucherSection = document.getElementById('voucher');
                if (voucherSection) {
                    voucherSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            }
        });
    </script>
    @include('layouts.footer')
</x-app-layout>
