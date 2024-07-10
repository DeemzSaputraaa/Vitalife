<x-app-layout>
    {{-- halaman 1 --}}
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 reveal mt-8">
        <div class="pt-1">
            <div class="container flex flex-wrap items-center justify-center">
                <div class="flex flex-col md:flex-row items-center justify-between w-full">
                    <div class="w-full md:w-1/2 text-center md:text-left mb-8 md:mb-0 pl-6 md:pl-8">
                        <p class="uppercase tracking-loose">Skip the Travel! Take Online</p>
                        <h1 class="text-5xl font-bold leading-tight">Welcome <span class="text-blue-300">Vitalife</span>
                        </h1>
                        <p class="text-2xl mb-8">
                            <span id="typed-text"></span>
                            <span class="typed-cursor animate-blink">|</span>
                        </p>
                        <a href="#specialisation" class="inline-block group">
                            <button
                                class="bg-blue-500 text-white font-bold rounded-full py-4 px-8 shadow-lg 
                                    transform transition duration-300 ease-in-out
                                    group-hover:scale-105 group-hover:bg-blue-600 group-hover:shadow-xl
                                    focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
                                <span
                                    class="inline-block transform group-hover:translate-x-1 transition-transform duration-200">
                                    Consult Now
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 inline-block ml-2 transform group-hover:translate-x-1 transition-transform duration-200"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div class="w-full md:w-1/2 flex justify-end">
                        <div class="rounded-lg overflow-hidden">
                            <img class="w-full h-auto" src="../image/bgdash.png" alt="Dashboard Background" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- halaman 2 --}}

    <div id="features"
        class="bg-white rounded-full mx-4 sm:mx-8 md:mx-12 shadow-xl p-3 sm:p-4 md:p-5 text-center flex flex-col items-center reveal">
        <h2 class="text-2xl sm:text-3xl font-bold mb-4 sm:mb-6 md:mb-8">Wellness Support</h2>
        <div class="flex flex-wrap justify-center gap-10 sm:gap-16 md:gap-24 lg:gap-32">
            <a href="/spa"
                class="flex-shrink-0 transform transition duration-300 hover:scale-105 group mb-5 sm:mb-7">
                <div class="relative p-4 sm:p-5 md:p-6 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/spa.png" alt="spa" class="h-20 sm:h-24 md:h-28 mb-3 sm:mb-4" />
                    <p class="text-base sm:text-lg font-bold">SPA</p>
                </div>
            </a>

            <a href="/yoga"
                class="flex-shrink-0 transform transition duration-300 hover:scale-105 group mb-5 sm:mb-7">
                <div class="relative p-4 sm:p-5 md:p-6 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/meditation.png" alt="Meditation" class="h-20 sm:h-24 md:h-28 mb-3 sm:mb-4" />
                    <p class="text-base sm:text-lg font-bold">YOGA</p>
                </div>
            </a>

            <a href="/event"
                class="flex-shrink-0 transform transition duration-300 hover:scale-105 group mb-5 sm:mb-7">
                <div class="relative p-4 sm:p-5 md:p-6 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/run.png" alt="event" class="h-20 sm:h-24 md:h-28 mb-3 sm:mb-4" />
                    <p class="text-base sm:text-lg font-bold">EVENT</p>
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
    <div id="specialization" class="p-5 sm:p-8 md:p-10 text-center flex flex-col items-center reveal">
        <h2 class="text-3xl sm:text-4xl font-bold mb-8 sm:mb-10">Specialisation</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6 sm:gap-8 md:gap-10 lg:gap-12">
            <a href="{{ route('spesialisFilter') }}" id="anatomy" name="anatomy"
                class="flex flex-col items-center transform transition duration-300 hover:scale-105 group">
                <div class="relative p-4 sm:p-5 group-hover:shadow-lg rounded-lg group-hover:border-gray-500">
                    <img src="../image/anatomy.png" alt="Anatomy" class="h-20 sm:h-24 md:h-28 mb-3 sm:mb-4" />
                    <p class="text-base sm:text-lg font-bold">Anatomy</p>
                </div>
            </a>
            <a href="{{ route('spesialisFilter') }}" id="primaryCare" name="specializatio"
                class="flex flex-col items-center transform transition duration-300 hover:scale-105 group">
                <div class="relative p-4 sm:p-5 group-hover:shadow-lg rounded-lg group-hover:border-gray-500">
                    <img src="../image/care.png" alt="Primary Care" class="h-20 sm:h-24 md:h-28 mb-3 sm:mb-4" />
                    <p class="text-base sm:text-lg font-bold">Primary Care</p>
                </div>
            </a>
            <a href="{{ route('spesialisFilter') }}" id="cardiology" name="cardiology"
                class="flex flex-col items-center transform transition duration-300 hover:scale-105 group">
                <div class="relative p-4 sm:p-5 group-hover:shadow-lg rounded-lg group-hover:border-gray-500">
                    <img src="../image/cardiology.png" alt="Cardiology" class="h-20 sm:h-24 md:h-28 mb-3 sm:mb-4" />
                    <p class="text-base sm:text-lg font-bold">Cardiology</p>
                </div>
            </a>
            <a href="{{ route('spesialisFilter') }}" id="skinGenitals" name="specialization"
                class="flex flex-col items-center transform transition duration-300 hover:scale-105 group">
                <div class="relative p-4 sm:p-5 group-hover:shadow-lg rounded-lg group-hover:border-gray-500">
                    <img src="../image/skin.png" alt="Skin & Genitals" class="h-20 sm:h-24 md:h-28 mb-3 sm:mb-4" />
                    <p class="text-base sm:text-lg font-bold">Skin & Genitals</p>
                </div>
            </a>
            <a href="{{ route('spesialisFilter') }}" id="humanSenses" name="specialization"
                class="flex flex-col items-center transform transition duration-300 hover:scale-105 group">
                <div class="relative p-4 sm:p-5 group-hover:shadow-lg rounded-lg group-hover:border-gray-500">
                    <img src="../image/human.png" alt="Human Senses" class="h-20 sm:h-24 md:h-28 mb-3 sm:mb-4" />
                    <p class="text-base sm:text-lg font-bold">Human Senses</p>
                </div>
            </a>
            <a href="{{ route('spesialisFilter') }}" id="piscologist" name="specialization"
                class="flex flex-col items-center transform transition duration-300 hover:scale-105 group">
                <div class="relative p-4 sm:p-5 group-hover:shadow-lg rounded-lg group-hover:border-gray-500">
                    <img src="../image/psico.png" alt="Piscologist" class="h-20 sm:h-24 md:h-28 mb-3 sm:mb-4" />
                    <p class="text-base sm:text-lg font-bold">Piscologist</p>
                </div>
            </a>
            <a href="{{ route('spesialisFilter') }}" id="fisioterapy" name="specialization"
                class="flex flex-col items-center transform transition duration-300 hover:scale-105 group">
                <div class="relative p-4 sm:p-5 group-hover:shadow-lg rounded-lg group-hover:border-gray-500">
                    <img src="../image/fisio.png" alt="Fisioterapy" class="h-20 sm:h-24 md:h-28 mb-3 sm:mb-4" />
                    <p class="text-base sm:text-lg font-bold">Fisioterapy</p>
                </div>
            </a>
            <a href="{{ route('spesialisFilter') }}" id="pregnancy" name="specialization"
                class="flex flex-col items-center transform transition duration-300 hover:scale-105 group">
                <div class="relative p-4 sm:p-5 group-hover:shadow-lg rounded-lg group-hover:border-gray-500">
                    <img src="../image/preg.png" alt="Pregnancy" class="h-20 sm:h-24 md:h-28 mb-3 sm:mb-4" />
                    <p class="text-base sm:text-lg font-bold">Pregnancy</p>
                </div>
            </a>
        </div>
    </div>

    {{-- halaman 4 --}}
    <section class="py-2 md:py-5 bg-white text-zinc-900 dark:text-white z-10 reveal">
        <div class="container px-10 mx-auto">
            <div class="relative">
                <div id="imageSlider" class="grid grid-cols-6 mt-12 gap-6">
                    <div
                        class="col-span-6 md:col-span-3 lg:col-span-2 slider-image transition-all duration-300 ease-in-out">
                        <div class="relative">
                            <img class="w-full rounded-xl" src="../image/banner1.jpg" alt="" />
                        </div>
                    </div>

                    <div
                        class="col-span-6 md:col-span-3 lg:col-span-2 slider-image transition-all duration-300 ease-in-out">
                        <div class="relative">
                            <img class="w-full rounded-t-xl" src="../image/banner2.jpg" alt="" />
                        </div>
                    </div>

                    <div
                        class="col-span-6 md:col-span-3 lg:col-span-2 slider-image transition-all duration-300 ease-in-out">
                        <div class="relative">
                            <img class="w-full rounded-t-xl" src="../image/banner3.jpg" alt="" />
                        </div>
                    </div>

                    <div
                        class="col-span-6 md:col-span-3 lg:col-span-2 slider-image hidden transition-all duration-300 ease-in-out">
                        <div class="relative">
                            <img class="w-full rounded-t-xl" src="../image/banner4.jpg" alt="" />
                        </div>
                    </div>
                </div>

                <button id="prevButton"
                    class="absolute top-1/2 -translate-y-1/2 left-0 md:-left-3 text-2xl bg-blue-600 hover:bg-blue-700 w-12 h-12 flex justify-center items-center rounded-full z-10 transition duration-300 ease-in-out">
                    <i class="fas fa-angle-left"></i>
                </button>
                <button id="nextButton"
                    class="absolute top-1/2 -translate-y-1/2 right-0 md:-right-3 text-2xl bg-blue-600 hover:bg-blue-700 w-12 h-12 flex justify-center items-center rounded-full z-10 transition duration-300 ease-in-out">
                    <i class="fas fa-angle-right"></i>
                </button>
            </div>
        </div>
    </section>

    <section class="bg-blue-50 p-16 reveal">
        <div class="max-w-screen-xl mx-auto px-4">
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
    @include('layouts.footer')
</x-app-layout>
