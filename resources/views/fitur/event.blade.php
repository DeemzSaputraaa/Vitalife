<x-app-layout>
    @include('layouts.carievent')
    <div class="flex items-center pl-48 pt-8">
        <h3 class="text-3xl font-bold text-gray-800">Event</h3>
    </div>

    <div class="flex justify-center items-start mt-8 mx-auto px-36">
        {{-- conten --}}
        <div class="bg-white border rounded-lg p-5 mr-1">
            <div class="max-w-7xl mx-auto px-2 sm:px-3 lg:px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                    <div class="flex items-center space-x-8">
                        <img src="../image/bgspa.jpg" alt="Maybank Marathon Bali" class="w-20 h-20 rounded-full" />
                        <div class="w-full md:w-screen xl:w-full bg-gray-200">
                            <h3 class="text-2xl font-bold text-gray-900">Maybank Marathon Bali</h3>
                            <p class="text-gray-600">Marathon</p>
                            <p class="text-gray-600">25 Aug, 2024 (Sun)</p>
                            <p class="text-gray-600">Gianyar, Bali, Indonesia</p>
                            <p class="text-gray-600">Event size: 10,000 - 24,999 participants</p>
                            <p class="text-gray-600">10 km, 21 km, 42.195 km</p>
                            <div class="flex items-center space-x-2 mt-2">
                                <span class="text-green-500 font-bold">99%</span>
                                <p class="text-gray-600">93 Patient Stories</p>
                            </div>
                        </div>
                    </div>
                    <button class="justify-end mt-48 bg-blue-500 hover:bg-blue-600 text-white px-1 py-2 rounded-md">
                        Book FREE Event Visit
                    </button>
                    {{-- <div class="flex justify-end mt-48 bg-gray-400"> <!-- Add this wrapper div -->

                    </div> --}}
                </div>
            </div>
        </div>

        {{-- check --}}
        <div class="p-2 flex-1">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <input type="radio" name="event-type" value="all-event" class="form-radio text-blue-500"
                                checked>
                            <span class="text-gray-900 font-medium">All event</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <input type="radio" name="event-type" value="about-checkout"
                                class="form-radio text-blue-500">
                            <span class="text-gray-900 font-medium">About Checkout</span>
                        </div>
                    </div>
                    <p class="mt-4 text-gray-600">Show only the events available for registration on VitaLife. Quick and
                        easy.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4 justify-end">
                    <div class="flex justify-center space-x-2 my-2">
                        <div class="bg-blue-200 px-2 py-1 rounded-sm">
                            <p class="font-medium text-sm">Running X</p>
                        </div>
                        <div class="bg-blue-200 px-2 py-1 rounded-sm">
                            <p class="font-medium text-sm">Marathon X</p>
                        </div>
                        <div class="bg-blue-200 px-2 py-1 rounded-sm">
                            <p class="font-medium text-sm">Indonesia X</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="flex justify-center items-start mt-8 mx-auto px-48">
        <section class="bg-gray-500 py-10 sm:py-16 lg:py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
                    <div class="flex items-center space-x-4">
                        <img src="path/to/event-image.jpg" alt="Maybank Marathon Bali" class="w-20 h-20 rounded-full" />
                        <div>
                            <h3 class="text-2xl font-bold text-gray-900">Maybank Marathon Bali</h3>
                            <p class="text-gray-600">Marathon</p>
                            <p class="text-gray-600">25 Aug, 2024 (Sun)</p>
                            <p class="text-gray-600">Gianyar, Bali, Indonesia</p>
                        </div>
                    </div>
                    <div class="text-gray-600">
                        <p>Event size: 10,000 - 24,999 participants</p>
                        <p>10 km, 21 km, 42.195 km</p>
                        <div class="flex items-center space-x-2 mt-2">
                            <span class="text-green-500 font-bold">99%</span>
                            <p>93 Patient Stories</p>
                        </div>
                        <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md mt-4">
                            Book FREE Event Visit
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <input type="radio" name="event-type" value="all-event" class="form-radio text-blue-500"
                            checked>
                        <span class="text-gray-900 font-medium">All event</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <input type="radio" name="event-type" value="about-checkout" class="form-radio text-blue-500">
                        <span class="text-gray-900 font-medium">About Checkout</span>
                    </div>
                </div>
                <p class="mt-4 text-gray-600">Show only the events available for registration on VitaLife. Quick and
                    easy.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-gray-900 font-bold">Running X</h3>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md mt-4">
                        Clear all
                    </button>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-gray-900 font-bold">Marathon X</h3>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md mt-4">
                        Clear all
                    </button>
                </div>
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-gray-900 font-bold">Indonesia X</h3>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md mt-4">
                        Clear all
                    </button>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-app-layout>
