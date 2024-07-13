<x-app-layout>
    {{-- @include('layouts.cariyoga') --}}
    {{-- pencarian --}}
    <div class="flex justify-center items-center pt-24">
        <div class="bg-gray-100 rounded-2xl shadow-lg w-full max-w-5xl p-8">
            <form action="{{ route('yoga.index') }}" method="GET">
                <div class="flex justify-between items-center mb-6 w-full">
                    <!-- Yoga Place Search -->
                    <div class="flex-grow mr-4">
                        <input type="text" name="yoga_place" id="yoga_place"
                            class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600"
                            placeholder="Search for yoga places" value="{{ request('nama') }}" />
                    </div>

                    <!-- Search Button -->
                    <div>
                        <button type="submit"
                            class="bg-blue-600 text-white rounded-md py-1.5 px-6 text-sm hover:bg-blue-700 transition duration-300">
                            <div class="flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                                <span class="text-sm">Search</span>
                            </div>
                        </button>
                    </div>
                </div>

                <div class="flex flex-wrap justify-start items-center w-full gap-4">
                    <!-- Location Filter -->
                    <div class="w-64">
                        <select name="location" id="location"
                            class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-600">
                            <option value="">Select Location</option>
                            <option value="sleman" {{ request('location') == 'sleman' ? 'selected' : '' }}>Sleman
                            </option>
                            <option value="kota_yogyakarta"
                                {{ request('location') == 'kota_yogyakarta' ? 'selected' : '' }}>Kota Yogyakarta
                            </option>
                            <option value="bantul" {{ request('location') == 'bantul' ? 'selected' : '' }}>Bantul
                            </option>
                            <option value="kulon_progo" {{ request('location') == 'kulon_progo' ? 'selected' : '' }}>
                                Kulon Progo</option>
                            <option value="gunung_kidul" {{ request('location') == 'gunung_kidul' ? 'selected' : '' }}>
                                Gunung Kidul</option>
                        </select>
                    </div>

                    <!-- Price Range Filter -->
                    <div class="w-64">
                        <select name="price_range" id="price_range"
                            class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-600">
                            <option value="">Price Range</option>
                            <option value="0-50000" {{ request('price_range') == '0-50000' ? 'selected' : '' }}>Rp 0 -
                                Rp 50,000</option>
                            <option value="50001-100000"
                                {{ request('price_range') == '50001-100000' ? 'selected' : '' }}>Rp 50,001 - Rp 100,000
                            </option>
                            <option value="100001-200000"
                                {{ request('price_range') == '100001-200000' ? 'selected' : '' }}>Rp 100,001 - Rp
                                200,000</option>
                            <option value="200001+" {{ request('price_range') == '200001+' ? 'selected' : '' }}>Rp
                                200,001+</option>
                        </select>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- slide 2 --}}
    <div class="flex justify-center items-center">
        <div class="font-sans w-full max-w-5xl">
            @foreach ($yogaTotal as $yoga)
                <div class="container mx-auto py-6 grid grid-cols-7 gap-6">
                    <div class="col-span-5 bg-white rounded-lg shadow-2xl p-14">
                        <!-- yoga1 -->
                        <div class="flex">
                            <div class="flex items-center border-b border-gray-500 pb-2">
                                <div class="w-16 h-16 rounded-full bg-gray-200 mr-6 overflow-hidden">
                                    @if ($yoga->gambar)
                                        <img src="{{ asset('storage/yoga_image/' . $yoga->gambar) }}"
                                            alt="{{ $yoga->nama }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center text-gray-500">
                                            No Image
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold">{{ $yoga->nama }}</h2>
                                    <p class="text-gray-500 text-lg">Relaxation</p>
                                    <p class="text-gray-500 text-lg">16 years experience overall</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6 bg-green-100 px-6 py-3 rounded-md inline-flex items-center">
                            <svg class="w-5 h-5 mr-2 text-green-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fillRule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clipRule="evenodd" />
                            </svg>
                            <span class="text-green-500 font-medium text-lg">99% 93 Patient Stories</span>
                        </div>
                        <div class="mt-6">
                            <p class="text-gray-500 text-lg">Alamat: {{ $yoga->alamat }}</p>
                            <p class="text-gray-500 text-lg">No. HP: {{ $yoga->noHP }}</p>
                            <a href="#" class="text-blue-500 hover:text-blue-700 text-lg">more</a>
                        </div>
                        <div class="mt-6">
                            <p class="text-gray-500 text-lg">Harga: Rp
                                {{ number_format($yoga->harga, 0, ',', '.') }}
                            </p>
                        </div>
                        <div class="mt-6 flex justify-end">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded text-lg mr-4">Book
                                FREE Yoga Visit</button>
                            <button
                                class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-3 px-6 rounded text-lg">Schedule</button>
                        </div>

                        <!-- Available -->
                        <div class="mt-10">
                            <h3 class="text-xl font-bold">Waktu Buka</h3>
                            <div class="grid grid-cols-3 gap-6 mt-6">
                                @if (is_array($yoga->waktuBuka) || is_object($yoga->waktuBuka))
                                    @foreach ($yoga->waktuBuka as $hari => $jam)
                                        <div>
                                            <p class="text-m text-gray-500 text-lg">{{ $hari }}
                                                {{ $jam }}</p>
                                        </div>
                                    @endforeach
                                @else
                                    <div>
                                        <p class="text-m text-gray-500 text-lg">{{ $yoga->waktuBuka }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-span-2">
                        <h2 class="text-2xl font-bold mb-6">Maps Location</h2>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15813.61369824441!2d110.33927410840992!3d-7.746962888130327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58f2f0a9180d%3A0x65615dadf02a4713!2sAnjani%20Spa!5e0!3m2!1sen!2sid!4v1717088008917!5m2!1sen!2sid"
                            width="100%" height="400" style="border: none" allowFullScreen="" loading="lazy"
                            referrerPolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    @include('layouts.footer')
</x-app-layout>
