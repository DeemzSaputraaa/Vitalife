<footer>
    <section class="py-8 reveal">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <p class="text-blue-500 text-sm font-medium mb-2">Get Your Answer</p>
                <h2 class="text-3xl font-bold text-[#1e3a8a]">Frequently Asked Questions</h2>
            </div>
            <div class="flex justify-center md:flex-row items-start gap-8">

                {{-- image --}}
                <div class="flex-1 w-full md:w-1/3 relative ml-40">
                    <img src="../image/gabungan.png" alt="Doctor with patient" class="w-lg h-auto rounded-lg max-w-md" />
                    <div class="absolute bottom-4 left-4 flex items-center bg-white rounded-full px-3 py-1 shadow-md">
                        <span class="text-2xl mr-2">😊</span>
                        <p class="font-semibold text-sm">84k+ <span class="font-normal text-gray-600">Happy
                                Patients</span>
                        </p>
                    </div>
                </div>

                {{-- konten --}}
                <div class="flex flex-col md:w-2/3 mr-32 flex-1 pt-20 max-w-xl" x-data="{ openItem: null }">
                    <div class="space-y-4">
                        <div class="border-b pb-4" x-data="{ id: 1 }">
                            <button @click="openItem = openItem === 1 ? null : 1"
                                class="flex justify-between items-center w-full text-left">
                                <span class="font-medium text-[#1e3a8a] flex-grow pr-2">What makes you prefer Vitalife compared to other wellness tourism platforms?</span>
                                <svg class="w-5 h-5 flex-shrink-0 text-blue-500 transform transition-transform duration-200"
                                    :class="{ 'rotate-45': openItem === 1 }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </button>
                            <div x-show="openItem === 1" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95" class="mt-2 text-gray-600 text-sm">
                                I prefer Vitalife because of its transparency in pricing and service, helpful user reviews, and progress tracking features that allow me to monitor my health progress in real-time. In addition, this platform offers comprehensive and innovative wellness tourism solutions, including online health consultations, recommendations for yoga centers and spas, as well as ease of booking and cancellation.
                            </div>
                        </div>

                        <div class="border-b pb-4" x-data="{ id: 2 }">
                            <button @click="openItem = openItem === 2 ? null : 2"
                                class="flex justify-between items-center w-full text-left">
                                <span class="font-medium text-[#1e3a8a] flex-grow pr-2">What was your experience with the registration process and initial use of the Vitalife website? Did anything make you feel comfortable or helpful?</span>
                                <svg class="w-5 h-5 flex-shrink-0 text-blue-500 transform transition-transform duration-200"
                                    :class="{ 'rotate-45': openItem === 2 }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </button>
                            <div x-show="openItem === 2" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95" class="mt-2 text-gray-600">
                                The initial registration and usage experience is very easy and intuitive. The clear guidance and user-friendly interface made me feel comfortable and helpful from the start.
                            </div>
                        </div>

                        <div class="border-b pb-4" x-data="{ id: 3 }">
                            <button @click="openItem = openItem === 3 ? null : 3"
                                class="flex justify-between items-center w-full text-left">
                                <span class="font-medium text-[#1e3a8a] flex-grow pr-2">What features appealed to you the most when you first saw the Vitalife website?</span>
                                <svg class="w-5 h-5 flex-shrink-0 text-blue-500 transform transition-transform duration-200"
                                    :class="{ 'rotate-45': openItem === 3 }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </button>
                            <div x-show="openItem === 3" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95" class="mt-2 text-gray-600">
                                The most interesting feature for me is the online consultation with specialists and general practitioners. This provides a sense of security and comfort because I can get medical advice before participating in intense physical activity.                            </div>
                        </div>

                        <div class="border-b pb-4" x-data="{ id: 4 }">
                            <button @click="openItem = openItem === 4 ? null : 4"
                                    class="flex justify-between items-center w-full text-left">
                                <span class="font-medium text-[#1e3a8a] flex-grow pr-2">How can Vitalife help you plan and enjoy your wellness journey? Are there any special features that have been particularly helpful to you?</span>
                                <svg class="w-5 h-5 flex-shrink-0 text-blue-500 transform transition-transform duration-200"
                                    :class="{ 'rotate-45': openItem === 4 }" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                </svg>
                            </button>
                            <div x-show="openItem === 4" x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 transform scale-95"
                                x-transition:enter-end="opacity-100 transform scale-100"
                                x-transition:leave="transition ease-in duration-200"
                                x-transition:leave-start="opacity-100 transform scale-100"
                                x-transition:leave-end="opacity-0 transform scale-95" class="mt-2 text-gray-600">
                                Vitalife was very helpful in planning my wellness trip by providing complete information about relevant facilities, packages and sporting events. The sports event recommendation feature also really helps me find interesting events in the destinations I visit.                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- footer 2 --}}

    <section class="ezy__copyright10 light py-12 bg-gray-800 dark:bg-gray-900 text-white dark:text-white">
    <div class="container px-4">
        <div class="grid grid-cols-12">
        <div class="col-span-12 md:col-span-8 md:col-start-3">
    <div class="flex flex-col justify-center items-center text-center space-y-8">
        <div class="flex items-center justify-center">
            <img src="../image/LOGO_1.png" alt="Logo Vitalife" class="max-w-full h-auto w-24">
            <p class="ml-4 text-lg">&copy; Hak Cipta {{ date('Y') }}</p>
        </div>

        <div class="flex space-x-6">
            <a href="{{ route('contact') }}"
                class="text-white hover:text-blue-400 hover:scale-110 transition duration-300 text-lg">Kontak</a>
            <a href="{{ route('aboutus') }}"
                class="text-white hover:text-blue-400 hover:scale-110 transition duration-300 text-lg">Tentang Kami</a>
        </div>

        <div class="max-w-2xl mx-auto">
            <p class="text-lg mb-4">Jika Anda ingin bergabung sebagai mitra, klik tombol di bawah ini:</p>
            <a href="" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-bold py-3 px-6 rounded-lg transition duration-300 transform hover:scale-105 animate-pulse text-lg">
                Gabung sebagai Mitra
            </a>
        </div>

        <p class="opacity-70 max-w-3xl mx-auto leading-relaxed">
            Proyek Vitalife adalah proyek pengembangan aplikasi mobile "Vitalife" yang bertujuan untuk meningkatkan pariwisata kesehatan dan kebugaran di Indonesia. Aplikasi ini akan membantu pengguna dalam menemukan pusat yoga dan spa terbaik, olahraga dan acara terbaru, berkonsultasi dengan dokter, melacak kemajuan mereka, dan mendapatkan umpan balik tentang layanan aplikasi.
        </p>
    </div>
</div>
        </div>
    </div>
</section>
</footer>
