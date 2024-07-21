@extends('layouts.admin')

@section('judul-halaman', 'Form Yoga')

@section('content')
    <div class="max-w-5xl mx-auto p-4 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold mb-4">Input Data Yoga</h2>
        <form action="{{ route('yoga.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Yoga</label>
                    <input type="text" name="nama" id="nama"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>

                <div>
                    <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="number" name="harga" id="harga"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>

                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                    <textarea name="alamat" id="alamat" rows="3"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                </div>

                <div>
                    <label for="noHP" class="block text-sm font-medium text-gray-700">Nomor HP</label>
                    <input type="tel" name="noHP" id="noHP"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Waktu Buka</label>
                    @foreach (['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'] as $hari)
                        <div class="flex items-center space-x-2 mt-2">
                            <label for="waktuBuka_{{ strtolower($hari) }}" class="w-20">{{ $hari }}</label>
                            <input type="text" name="waktuBuka[{{ $hari }}]"
                                id="waktuBuka_{{ strtolower($hari) }}"
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                placeholder="contoh: 09.00–20.00" required>
                        </div>
                    @endforeach
                </div>
                
                <div>
                    <label for="maps" class="block text-sm font-medium text-gray-700">Maps</label>
                    <textarea name="maps" id="maps" rows="3"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
                    <div class="mt-1 flex items-center">
                        <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </span>
                        <input type="file" name="image" id="image" accept="image/*"
                            class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            onchange="previewImage(event)">
                    </div>
                    <div id="imagePreview" class="mt-2">
                        <img src="" alt="Preview" class="w-32 h-32 object-cover rounded-full bg-gray-200 hidden">
                    </div>
                </div>

                <div>
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:border-blue-800 focus:ring focus:ring-blue-300 disabled:opacity-25 transition">
                        Simpan Data
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script>
        function previewImage(event) {
            const reader = new FileReader();
            const imagePreview = document.querySelector('#imagePreview img');
            const fileInput = event.target;

            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.classList.remove('hidden');
            }

            if (fileInput.files && fileInput.files[0]) {
                reader.readAsDataURL(fileInput.files[0]);
            } else {
                imagePreview.src = "";
                imagePreview.classList.add('hidden');
            }
        }
    </script>
@endsection
