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
                    <img src="../image/bgdash.png" alt="Doctor with patient" class="w-lg h-auto rounded-lg max-w-md" />
                    <div class="absolute bottom-4 left-4 flex items-center bg-white rounded-full px-3 py-1 shadow-md">
                        <span class="text-2xl mr-2">😊</span>
                        <p class="font-semibold text-sm">84k+ <span class="font-normal text-gray-600">Happy
                                Patients</span></p>
                    </div>
                </div>

                {{-- konten --}}
                <div class="flex flex-col md:w-2/3 mr-32 flex-1 pt-20 max-w-xl" x-data="{ openItem: null }">
                    <div class="space-y-4">
                        <div class="border-b pb-4" x-data="{ id: 1 }">
                            <button @click="openItem = openItem === 1 ? null : 1"
                                class="flex justify-between items-center w-full text-left">
                                <span class="font-medium text-[#1e3a8a]">Why choose our medical for your family?</span>
                                <svg class="w-5 h-5 text-blue-500 transform transition-transform duration-200"
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
                                x-transition:leave-end="opacity-0 transform scale-95" class="mt-2 text-gray-600">
                                Our medical facility prioritizes family-centered care, offering comprehensive services,
                                experienced professionals, and a warm, welcoming environment for all family members.
                            </div>
                        </div>

                        <div class="border-b pb-4" x-data="{ id: 2 }">
                            <button @click="openItem = openItem === 2 ? null : 2"
                                class="flex justify-between items-center w-full text-left">
                                <span class="font-medium text-[#1e3a8a]">Why we are different from others?</span>
                                <svg class="w-5 h-5 text-blue-500 transform transition-transform duration-200"
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
                                We stand out through our personalized approach, cutting-edge technology, and commitment
                                to continuous improvement in patient care and satisfaction.
                            </div>
                        </div>

                        <div class="border-b pb-4" x-data="{ id: 3 }">
                            <button @click="openItem = openItem === 3 ? null : 3"
                                class="flex justify-between items-center w-full text-left">
                                <span class="font-medium text-[#1e3a8a]">Why choose our medical for your family?</span>
                                <svg class="w-5 h-5 text-blue-500 transform transition-transform duration-200"
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
                                Our medical facility prioritizes family-centered care, offering comprehensive services,
                                experienced professionals, and a warm, welcoming environment for all family members.
                            </div>
                        </div>

                        <div class="border-b pb-4" x-data="{ id: 4 }">
                            <button @click="openItem = openItem === 4 ? null : 4"
                                class="flex justify-between items-center w-full text-left">
                                <span class="font-medium text-[#1e3a8a]">Why we are different from others?</span>
                                <svg class="w-5 h-5 text-blue-500 transform transition-transform duration-200"
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
                                We stand out through our personalized approach, cutting-edge technology, and commitment
                                to continuous improvement in patient care and satisfaction.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- footer 1 --}}
    {{-- <div class="bg-gray-800 text-white flex items-center justify-center p-10 reveal">
        <div class="container mx-auto px-8 py-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <img class="h-10 w-25" src="../image/LOGO_2.png" alt="Your Company" />
                    <div class="mt-4">
                        <p class="text-gray-400">Sahibabad, Ghaziabad, Uttar Pradesh</p>
                        <p class="text-gray-400">201005</p>
                        <p class="text-gray-400">+91-8887867787</p>
                        <p class="text-gray-400">info@suryanuarsinghome.com</p>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li>
                            <Link href="#" class="hover:text-gray-400">About Us</Link>
                        </li>
                        <li>
                            <Link href="#" class="hover:text-gray-400">Our Pricing</Link>
                        </li>
                        <li>
                            <Link href="#" class="hover:text-gray-400">Our Gallery</Link>
                        </li>
                        <li>
                            <Link href="#" class="hover:text-gray-400">Appointment</Link>
                        </li>
                        <li>
                            <Link href="#" class="hover:text-gray-400">Privacy Policy</Link>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Department</h3>
                    <ul class="space-y-2">
                        <li>
                            <Link href="#" class="hover:text-gray-400">Ortholgy</Link>
                        </li>
                        <li>
                            <Link href="#" class="hover:text-gray-400">Neurology</Link>
                        </li>
                        <li>
                            <Link href="#" class="hover:text-gray-400">Dental Care</Link>
                        </li>
                        <li>
                            <Link href="#" class="hover:text-gray-400">Opthalmology</Link>
                        </li>
                        <li>
                            <Link href="#" class="hover:text-gray-400">Cardiology</Link>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Useful Links</h3>
                    <ul class="space-y-2">
                        <li>
                            <Link href="#" class="hover:text-gray-400">About Us</Link>
                        </li>
                        <li>
                            <Link href="#" class="hover:text-gray-400">Our Pricing</Link>
                        </li>
                        <li>
                            <Link href="#" class="hover:text-gray-400">Our Gallery</Link>
                        </li>
                        <li>
                            <Link href="#" class="hover:text-gray-400">Appointment</Link>
                        </li>
                        <li>
                            <Link href="#" class="hover:text-gray-400">Privacy Policy</Link>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 text-gray-400">
                <p>&copy; 2024 Vitalife. All rights reserved.</p>
            </div>
        </div>
    </div> --}}

    {{-- footer 2 --}}

    <section class="ezy__copyright10 light py-12 bg-gray-800 dark:bg-gray-900 text-white dark:text-white">
        <div class="container px-4">
            <div class="grid grid-cols-12">
                <div class="col-span-12 md:col-span-8 md:col-start-3">
                    <div class="flex flex-col justify-center items-center text-center">
                        <div class="flex items-center justify-center mb-4">
                            <div>
                                <img src="../image/LOGO_1.png" alt="" class="max-w-full h-auto w-24">
                            </div>
                            <div>
                                <p class="ml-3">&copy; Copyright {{ date('Y') }}</p>
                            </div>
                        </div>
                        <div class="flex space-x-4 mt-2 mb-6">
                            <a href="{{ route('contact') }}"
                                class="text-white hover:text-blue-600 hover:scale-110 transition duration-300">Contact</a>
                            <a href="{{ route('aboutus') }}"
                                class="text-white hover:text-blue-600 hover:scale-110 transition duration-300">About
                                Us</a>
                        </div>
                        <p class="opacity-50 mb-6">Isheaven male their dry doesn't without him set saw two him man
                            itself second fifth light over fish over which creepeth void don't. Image darkness
                            gathering. All hath don't it, abundantly darkness can't forth appear, in.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- footer 3 --}}

    {{-- <div class="relative bg-gray-800 h-80 reveal">
        <!-- kotak1 -->
        <div
            class="absolute inset-0 top-0 left-0 w-full h-5/6 bg-gray-200 text-black rounded-br-full flex justify-end items-end">
            <div class="p-6 mr-36 mb-24 flex flex-col items-center">
                <h2 class="font-bold mb-4 text-center">Pages</h2>
                <div class="flex">
                    <div class="mr-8">
                        <ul>
                            <li><a href="#" class="hover:underline">Home</a></li>
                            <li><a href="#" class="hover:underline">Brands</a></li>
                            <li><a href="#" class="hover:underline">About Us</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li><a href="#" class="hover:underline">Career</a></li>
                            <li><a href="#" class="hover:underline">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- kotak2 -->
        <div class="absolute top-0 left-0 w-2/3 h-1/2 bg-gray-400 rounded-br-full"></div>

        <!-- kotak3 -->
        <div class="absolute top-0 left-0 w-1/2 h-3/4 bg-gray-800 rounded-br-full">
            <!-- Logo and text -->
            <div class="p-8">
                <img src="../image/LOGO_1.png" alt="AKIJ VENTURE" class="h-12 mb-4">
                <p class="text-white mt-4 max-w-md">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quos corporis atque tempora vitae,
                    dolorum voluptates eius? Accusantium, natus.
                </p>
            </div>
        </div> --}}

    {{-- copyright --}}
    {{-- <div class="absolute bottom-0 left-0 p-4 text-gray-400">
            <p>&copy; 2024 Vitalife. All rights reserved.</p>
        </div>
    </div> --}}
</footer>
