@extends('layouts.admin')

@section('judul-halaman', 'Form SPA')

@section('content')
    <div class="max-w-5xl mx-auto p-4 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-semibold mb-4">Input Data Spa</h2>
        <form action="{{ route('spa.store') }}" method="POST" enctype="multipart/form-data"> 
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700">Nama Spa</label>
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
                    <label for="waktuBuka" class="block text-sm font-medium text-gray-700">Waktu Buka</label>
                    <input type="time" name="waktuBuka" id="waktuBuka"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>

                {{-- <div>
                    <label for="gambar" class="block text-sm font-medium text-gray-700">Gambar</label>
                    <input type="file" name="image" id="image" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div> --}}

                <div>
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:border-blue-800 focus:ring focus:ring-blue-300 disabled:opacity-25 transition">
                        Simpan Data
                    </button>
                </div>
            </div>
        </form>
        <ul>
        </ul>
    </div>
@endsection
