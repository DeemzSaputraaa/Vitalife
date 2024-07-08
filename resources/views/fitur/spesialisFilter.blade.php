<x-app-layout>
    @include('layouts.pencarian')
    <div class="flex items-center pl-48 pt-8">
        <h3 class="text-3xl font-bold text-gray-800">Spesialist</h3>
    </div>

    <div class="flex justify-center items-start mt-8 mx-auto px-48 mb-10">
        <div class="bg-white border rounded-lg p-8 mr-8">
            <h2 class="font-bold mb-4">Location</h2>
            <hr class="w-full border-gray-300 mb-4" />
            <div class="space-y-2">
                <div class="flex items-center">
                    <input type="radio" id="di-yogyakarta" name="location" value="D.I Yogyakarta" class="mr-2" />
                    <label for="di-yogyakarta">D.I Yogyakarta</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="sleman" name="location" value="Sleman" class="mr-2" />
                    <label for="sleman">Sleman</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="bantul" name="location" value="Bantul" class="mr-2" />
                    <label for="bantul">Bantul</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="kulon-progo" name="location" value="Kulon Progo" class="mr-2" />
                    <label for="kulon-progo">Kulon Progo</label>
                </div>
                <div class="flex items-center">
                    <input type="radio" id="Gunung Kidul" name="location" value="Gunung Kidul" class="mr-2" />
                    <label for="Gunung Kidul">Gunung Kidul</label>
                </div>
            </div>
            <p class="mt-4 text-blue-500 hover:text-blue-700 cursor-pointer">Show more</p>
        </div>
        <div class="bg-white rounded-lg shadow-2xl p-8 flex-1">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">  
                @foreach ($spesFilter as $spesialis)
                <div class="flex items-center border rounded-lg p-5">
                    <div class="w-16 h-16 rounded-full bg-gray-200 mr-6 overflow-hidden">
                        <img src="https://picsum.photos/id/237/200/200" alt="Profile Picture" class="w-full h-full object-cover">
                    </div>
                    <div class="flex-grow"> 
                        <h2 class="text-xl font-bold mb-1">{{$spesialis->nama}}</h2>
                        <p class="text-gray-600 text-xl">{{$spesialis->Anatomy}}</p>
                        <p class="text-gray-600 text-m font-bold">{{$spesialis->spesialisasi}}</p>
                        <p class="text-gray-600 text-xs">{{$spesialis->tempatTugas}}</p>
                        <p class="text-gray-600 text-xs">{{$spesialis->alamat}}</p>
                    </div>
                    <div class="ml-4 text-right"> 
                        <p class="text-gray-800 text-lg font-semibold">Rp.{{ number_format($spesialis->harga, 0, ',', '.') }}</p>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded text-sm mt-2 block">Make Appointment</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
            </div>
            <hr class="w-full border-gray-300 mb-6" />
        </div>
    </div>

    @include('layouts.footer')
</x-app-layout>