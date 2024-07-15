{{-- <x-app-layout> --}}
{{-- pencarian --}}
{{-- <form action="{{ route('spa.search') }}" method="GET" class="space-y-6">
        @csrf
        <!-- Location input -->
        <div class="flex justify-start items-center w-full">
            <div class="flex-grow mr-4">
                <input type="text" name="location" id="location"
                    class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600"
                    placeholder="Enter location" value="{{ request('location') }}" />
            </div>
            <button type="submit" class="bg-blue-600 text-white rounded-md py-2 px-6 text-sm flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <span>Search</span>
            </button>
        </div>

        <!-- Price range filter -->
        <div class="flex justify-start items-center w-full space-x-4">
            <label for="min-price" class="text-sm font-medium text-gray-700">Price Range:</label>
            <input type="number" id="min-price" name="min_price"
                class="rounded-md border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600"
                placeholder="Min" value="{{ request('min_price') }}" />
            <span class="text-gray-500">-</span>
            <input type="number" id="max-price" name="max_price"
                class="rounded-md border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600"
                placeholder="Max" value="{{ request('max_price') }}" />
        </div>

        <!-- Sort options -->
        <div class="flex justify-start items-center w-full">
            <label for="sort" class="text-sm font-medium text-gray-700 mr-2">Sort By:</label>
            <select id="sort" name="sort"
                class="rounded-md border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-blue-600">
                <option value="relevance" {{ request('sort') == 'relevance' ? 'selected' : '' }}>Relevance</option>
                <option value="price-low-high" {{ request('sort') == 'price-low-high' ? 'selected' : '' }}>Price: Low to
                    High</option>
                <option value="price-high-low" {{ request('sort') == 'price-high-low' ? 'selected' : '' }}>Price: High
                    to Low</option>
                <option value="name-asc" {{ request('sort') == 'name-asc' ? 'selected' : '' }}>Name: A to Z</option>
                <option value="name-desc" {{ request('sort') == 'name-desc' ? 'selected' : '' }}>Name: Z to A</option>
            </select>
        </div>
    </form> --}}

<x-app-layout>
    <div class="flex justify-center items-center pt-24">
        <div class="bg-gray-100 rounded-2xl shadow-lg w-full max-w-5xl p-8">
            <form action="{{ route('spa.index') }}" method="GET">
                <div class="flex justify-between items-center mb-6 w-full">
                    <!-- Spa Place Search -->
                    <div class="flex-grow mr-4">
                        <input type="text" name="location" id="location"
                            class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600"
                            placeholder="Search spa by location" value="{{ request('location') }}" />
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
                    <!-- Price range filter -->
                    <div class="flex justify-start items-center w-full space-x-4">
                        <label for="min-price" class="text-sm font-medium text-gray-700">Price Range:</label>
                        <input type="number" id="min-price" name="min_price"
                            class="rounded-md border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600"
                            placeholder="Min" value="{{ request('min_price') }}" />
                        <span class="text-gray-500">-</span>
                        <input type="number" id="max-price" name="max_price"
                            class="rounded-md border-0 py-1.5 px-3 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600"
                            placeholder="Max" value="{{ request('max_price') }}" />
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="flex justify-center items-center">
        <div class="font-sans w-full max-w-5xl">
            @foreach ($spaTotal as $spa)
                <div class="container mx-auto py-6 grid grid-cols-7 gap-6">
                    <div class="col-span-5 bg-white rounded-lg shadow-2xl p-14">
                        <div class="flex">
                            <div class="flex items-center border-b border-gray-500 pb-2">
                                <div class="w-16 h-16 rounded-full bg-gray-200 mr-6 overflow-hidden">
                                    @if ($spa->gambar)
                                        <img src="{{ asset('storage/spa_image/' . $spa->gambar) }}"
                                            alt="{{ $spa->nama }}" class="w-full h-full object-cover">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center text-gray-500">
                                            No Image
                                        </div>
                                    @endif
                                </div>
                                <div>
                                    <h2 class="text-2xl font-bold">{{ $spa->nama }}</h2>
                                    <p class="text-gray-500 text-lg">Relaxation</p>
                                    <p class="text-gray-500 text-lg">16 years experience overall</p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <p class="text-gray-500 text-lg">Alamat: {{ $spa->alamat }}</p>
                            <p class="text-gray-500 text-lg">No. HP: {{ $spa->noHP }}</p>
                            <a href="#" class="text-blue-500 hover:text-blue-700 text-lg">more</a>
                        </div>
                        <div class="mt-6">
                            <p class="text-gray-500 text-lg">Harga: Rp {{ number_format($spa->harga, 0, ',', '.') }}
                            </p>
                        </div>
                        <div class="mt-6 flex justify-start">
                            <button
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded text-lg mr-4">Book
                                FREE Spa Visit</button>
                            <button
                                class="scheduleBtn bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded">
                                Schedule
                            </button>
                        </div>

                        <!-- Available -->
                        <div class="scheduleInfo mt-10 hidden">
                            <h3 class="text-xl font-bold">Waktu Buka</h3>
                            <div class="grid grid-cols-3 gap-6 mt-6">
                                @if (is_array($spa->waktuBuka) || is_object($spa->waktuBuka))
                                    @foreach ($spa->waktuBuka as $hari => $jam)
                                        <div>
                                            <p class="text-m text-gray-500 text-lg">{{ $hari }}
                                                {{ $jam }}</p>
                                        </div>
                                    @endforeach
                                @else
                                    <div>
                                        <p class="text-m text-gray-500 text-lg">{{ $spa->waktuBuka }}</p>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const scheduleBtns = document.querySelectorAll('.scheduleBtn');

        scheduleBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const scheduleInfo = this.closest('.col-span-5').querySelector('.scheduleInfo');
                scheduleInfo.classList.toggle('hidden');

                if (scheduleInfo.classList.contains('hidden')) {
                    this.textContent = 'Schedule';
                } else {
                    this.textContent = 'Close Schedule';
                }
            });
        });

        // Cek status pencarian
        const searchStatus = '{{ session('search_status') }}';
        const searchQuery = '{{ session('search_query') }}';

        if (searchStatus === 'success') {
            Swal.fire({
                title: 'Spa Ditemukan!',
                text: `Hasil pencarian untuk ${searchQuery}`,
                icon: 'success',
                confirmButtonText: 'OK'
            });
        } else if (searchStatus === 'not_found') {
            Swal.fire({
                title: 'Spa Tidak Ditemukan',
                text: `Tidak ada hasil untuk pencarian dengan kriteria: ${searchQuery}`,
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }
    });
</script>
