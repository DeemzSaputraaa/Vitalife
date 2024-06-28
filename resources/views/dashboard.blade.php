<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('deemz') }}
        </h2>
    </x-slot> --}}

    {{-- halaman 1 --}}
    <div class="max-w-6xl mx-auto px-6 lg:px-1 pb-0 mt-5">
        <div class="pt-1">
            <div class="container flex flex-wrap items-center">
                <div class="flex flex-row items-center">
                    <div class="w-full md:w-2/5 justify-start items-start text-left md:text-left ml-12">
                        <p class="uppercase tracking-loose">Skip the Travel! Take Online</p>
                        <h1 class="text-5xl font-bold leading-tight">Welcome <span class="text-blue-300">Vitalife</span>
                        </h1>
                        <p class="text-2xl mb-8">We are the solution for travelling in a healthy condition and we provide
                            health specialists...</p>
                        <button
                            class="bg-blue-500 text-white font-bold rounded-full py-4 px-8 shadow-lg hover:scale-105 transition duration-300 ease-in-out"
                            href='#specialisation'>Consult Now</button>
                    </div>
                    <div class="w-full md:w-3/5 py-6 text-center">
                        <div class="rounded-lg overflow-hidden">
                            <img class="w-full h-auto lg:w-4/5 xl:w-3/4" src="../image/bgdash.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- halaman 2 --}}
    <div class="bg-white rounded-xl shadow-md p-7 text-center flex flex-col items-center">
        <h2 class="text-4xl font-bold mb-8">Wellness Support</h2>
        <div class="flex justify-center space-x-20">
            <a href="/spa" class="flex-shrink-0">
                <div class="relative p-4 hover:shadow-md rounded-lg hover:border-gray-500">
                    <img src="../image/spa.png" alt="spa" class="h-32 mb-5" />
                    <p class="text-lg font-bold">SPA</p>
                </div>
            </a>

            <div class="w-4"></div>

            <a href="/yoga" class="flex-shrink-0">
                <div class="relative p-4 hover:shadow-md rounded-lg hover:border-gray-500">
                    <img src="../image/meditation.png" alt="Meditation" class="h-32 mb-5" />
                    <p class="text-lg font-bold">YOGA</p>
                </div>
            </a>

            <div class="w-4"></div>

            <a href="/event" class="flex-shrink-0">
                <div class="relative p-4 hover:shadow-md rounded-lg hover:border-gray-500">
                    <img src="../image/run.png" alt="event" class="h-32 mb-5" />
                    <p class="text-lg font-bold">EVENT</p>
                </div>
            </a>
        </div>
    </div>

    {{-- halaman 3 --}}
    <div id="specialisation" class=" p-10 text-center flex flex-col items-center">
        <h2 class="text-3xl font-bold mb-8">Specialisation</h2>
        <div class="grid grid-cols-4 gap-20">
            <a href="#event" class="flex flex-col items-center group">
                <div class="relative p-3 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/anatomy.png" alt="Anatomy" class="h-24 mb-3" />
                    <p class="text-base font-bold">Anatomy</p>
                </div>
            </a>
            <a href="#event" class="flex flex-col items-center group">
                <div class="relative p-3 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/care.png" alt="Primary Care" class="h-24 mb-3" />
                    <p class="text-base font-bold">Primary Care</p>
                </div>
            </a>
            <a href="#event" class="flex flex-col items-center group">
                <div class="relative p-3 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/cardiology.png" alt="Cardiology" class="h-24 mb-3" />
                    <p class="text-base font-bold">Cardiology</p>
                </div>
            </a>
            <a href="#event" class="flex flex-col items-center group">
                <div class="relative p-3 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/skin.png" alt="Skin & Genitals" class="h-24 mb-3" />
                    <p class="text-base font-bold">Skin & Genitals</p>
                </div>
            </a>
            <a href="#event" class="flex flex-col items-center group">
                <div class="relative p-3 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/human.png" alt="Human Senses" class="h-24 mb-3" />
                    <p class="text-base font-bold">Human Senses</p>
                </div>
            </a>
            <a href="#event" class="flex flex-col items-center group">
                <div class="relative p-3 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/psico.png" alt="Piscologist" class="h-24 mb-3" />
                    <p class="text-base font-bold">Piscologist</p>
                </div>
            </a>
            <a href="#event" class="flex flex-col items-center group">
                <div class="relative p-3 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/fisio.png" alt="Fisioterapy" class="h-24 mb-3" />
                    <p class="text-base font-bold">Fisioterapy</p>
                </div>
            </a>
            <a href="#event" class="flex flex-col items-center group">
                <div class="relative p-3 group-hover:shadow-md rounded-lg group-hover:border-gray-500">
                    <img src="../image/preg.png" alt="Pregnancy" class="h-24 mb-3" />
                    <p class="text-base font-bold">Pregnancy</p>
                </div>
            </a>
        </div>
        <button class="bg-blue-500 text-white px-6 py-3 rounded-md mt-8 hover:bg-gray-700">View All</button>
    </div>

    {{-- halaman 4 --}}
    <section class="py-2 md:py-5 bg-white text-zinc-900 dark:text-white z-10">
        <div class="container px-10 mx-auto">
            <div class="relative">
                <div class="grid grid-cols-6 mt-12 gap-6">
                    <div class="col-span-6 md:col-span-3 lg:col-span-2">
                        <div class="relative">
                            <img class="w-full rounded-xl" src="../image/banner1.jpg" alt="" />
                        </div>
                        <!--
                        <div class="rounded-xl overflow-hidden bg-slate-100 dark:bg-slate-800">
                            <div class="flex p-4 md:p-6 mb-4">
                                <div class="w-1/2 px-4 border-dashed border-r border-black dark:border-white text-end">
                                    <h5 class="text-xl font-medium mb-1">85 + Classes</h5>
                                    <p>From The masters</p>
                                </div>
                                <div class="w-1/2 px-4">
                                    <h5 class="text-xl font-medium mb-1">20 Lessons</h5>
                                    <p>Average Per Class</p>
                                </div>
                            </div>
                        </div>
                        -->
                    </div>

                    <div class="col-span-6 md:col-span-3 lg:col-span-2">
                        <div class="relative">
                            <img class="w-full rounded-t-xl" src="../image/banner2.jpg" alt="" />
                        </div>
                    </div>

                    <div class="col-span-6 md:col-span-3 lg:col-span-2">
                        <div class="relative">
                            <img class="w-full rounded-t-xl" src="../image/banner3.jpg" alt="" />
                        </div>
                    </div>

                    <div class="col-span-6 md:col-span-3 lg:col-span-2 hidden">
                        <div class="relative">
                            <img class="w-full rounded-t-xl" src="../image/banner4.jpg" alt="" />
                        </div>
                    </div>

                    <button
                        class="absolute top-1/2 -translate-y-1/2 left-0 md:-left-3 text-2xl bg-blue-600 hover:bg-blue-700 w-12 h-12 flex justify-center items-center rounded-full z-10">
                        <i class="fas fa-angle-left"></i>
                    </button>
                    <button
                        class="absolute top-1/2 -translate-y-1/2 right-0 md:-right-3 text-2xl bg-blue-600 hover:bg-blue-700 w-12 h-12 flex justify-center items-center rounded-full z-10">
                        <i class="fas fa-angle-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-blue-50 p-16">
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
                        <h3 class="text-3xl font-bold text-navy-800 mb-2">5000+</h3>
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
                        <h3 class="text-3xl font-bold text-navy-800 mb-2">200+</h3>
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
                        <h3 class="text-3xl font-bold text-navy-800 mb-2">1000+</h3>
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
                        <h3 class="text-3xl font-bold text-navy-800 mb-2">700+</h3>
                        <p class="text-gray-500">Expert Doctors</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.footer')
</x-app-layout>
