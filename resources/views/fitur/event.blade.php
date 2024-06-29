<x-app-layout>
    @include('layouts.carievent')
    <div class="flex items-center pl-48 pt-8">
        <h3 class="text-3xl font-bold text-gray-800">Event</h3>
    </div>

    <div class="flex justify-center items-start mt-8 mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Content -->
        <div class="bg-white border rounded-lg p-4 mr-4 flex-1 max-w-xl">
            <div class="flex items-start space-x-4">
                <img src="../image/bgspa.jpg" alt="Maybank Marathon Bali" class="w-24 h-24 rounded-full object-cover" />
                <div class="flex-1">
                    <h3 class="text-xl font-bold text-gray-900">Maybank Marathon Bali</h3>
                    <p class="text-gray-600">Marathon</p>
                    <p class="text-gray-600">25 Aug, 2024 (Sun)</p>
                    <p class="text-gray-600">Gianyar, Bali, Indonesia</p>
                    <p class="text-gray-600">Event size: 10,000 - 24,999 participants</p>
                    <p class="text-gray-600">10 km, 21.1 km, 42.195 km</p>
                    <div class="flex items-center space-x-2 mt-2">
                        <span class="text-green-500 font-bold">99%</span>
                        <p class="text-gray-600">93 Patient Stories</p>
                    </div>
                </div>
            </div>
            <div class="mt-4 text-right">
                <button class="bg-blue-900 hover:bg-blue-800 text-white px-4 py-2 rounded-md text-sm font-medium">
                    Book FREE Event Visit
                </button>
            </div>
        </div>

        <!-- Check -->
        <div class="flex flex-col max-w-xs">
            <!-- Check box -->
            <div class="bg-white border rounded-lg p-4 flex-1">
                <div class="space-y-4">
                    <div class="flex items-center justify-start">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="radio" name="event-type" value="all-event" class="form-radio text-blue-500"
                                checked>
                            <span class="text-gray-900 font-medium">All event</span>
                        </label>
                    </div>
                    <div class="flex items-center justify-start">
                        <label class="flex items-center space-x-2 cursor-pointer">
                            <input type="radio" name="event-type" value="about-checkout"
                                class="form-radio text-blue-500">
                            <span class="text-gray-900 font-medium">About Checkout</span>
                        </label>
                    </div>
                    <p class="text-sm text-gray-600">Show only the events available for registration on VitaLife. Quick
                        and easy.</p>
                </div>
            </div>

            <!-- Option (outside the check box) -->
            <div class="mt-4">
                <div class="flex flex-wrap gap-2">
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Running
                        <button>
                            X
                        </button>
                    </span>
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Marathon
                        <button>
                            X
                        </button>
                    </span>
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">Indonesia
                        <button>
                            X
                        </button>
                    </span>
                </div>
                <div class="mt-2 text-left">
                    <button class="text-blue-500 text-sm font-medium">Clear all</button>
                </div>
            </div>
            <div class="bg-white border rounded-lg p-4 mt-5">
                <div class="space-y-4">
                    <div>
                        <h2 class="font-semibold text-lg mb-2">Sport</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="sport" class="form-radio text-blue-500" checked>
                                <span class="ml-2">Running</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="sport" class="form-radio text-blue-500">
                                <span class="ml-2">Trail running</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="sport" class="form-radio text-blue-500">
                                <span class="ml-2">Dog run</span>
                            </label>
                        </div>
                    </div>

                    <div>
                        <h2 class="font-semibold text-lg mb-2">Other sport</h2>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="other-sport" class="form-radio text-blue-500">
                                <span class="ml-2">Trail running</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="other-sport" class="form-radio text-blue-500">
                                <span class="ml-2">Dog run</span>
                            </label>
                        </div>
                        <button class="text-blue-500 text-sm mt-2">Show more</button>
                    </div>

                    <div>
                        <h2 class="font-semibold text-lg mb-2">Distance</h2>
                        <div class="flex items-center mb-2">
                            <input type="checkbox" class="form-checkbox text-blue-500 mr-2">
                            <span>Apply custom range</span>
                        </div>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="radio" name="distance" class="form-radio text-blue-500" checked>
                                <span class="ml-2">Marathon</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="distance" class="form-radio text-blue-500">
                                <span class="ml-2">Ultramarathon</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="distance" class="form-radio text-blue-500">
                                <span class="ml-2">Half marathon</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="distance" class="form-radio text-blue-500">
                                <span class="ml-2">5 Km</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="distance" class="form-radio text-blue-500">
                                <span class="ml-2">10 Km</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="distance" class="form-radio text-blue-500">
                                <span class="ml-2">Fixed time race</span>
                            </label>
                            <label class="flex items-center">
                                <input type="radio" name="distance" class="form-radio text-blue-500">
                                <span class="ml-2">No distance race</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</x-app-layout>
