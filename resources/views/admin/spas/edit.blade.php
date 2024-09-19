@extends('layouts.admin')

@section('judul-halaman', 'Edit Spa')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Edit Spa</h1>

        <form action="{{ route('admin.spas.update', $spa->id_spa) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="nama" class="block mb-2">Nama</label>
                <input type="text" name="nama" id="nama" value="{{ $spa->nama }}"
                    class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="harga" class="block mb-2">Harga</label>
                <input type="number" name="harga" id="harga" value="{{ $spa->harga }}"
                    class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label for="alamat" class="block mb-2">Alamat</label>
                <textarea name="alamat" id="alamat" class="w-full px-3 py-2 border rounded">{{ $spa->alamat }}</textarea>
            </div>

            <div class="mb-4">
                <label for="noHP" class="block mb-2">No. HP</label>
                <input type="text" name="noHP" id="noHP" value="{{ $spa->noHP }}"
                    class="w-full px-3 py-2 border rounded">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Waktu Buka</label>
                @foreach (['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'] as $hari)
                    <div class="flex items-center space-x-2 mt-2">
                        <label for="waktuBuka_{{ strtolower($hari) }}" class="w-20">{{ $hari }}</label>
                        <input type="text" name="waktuBuka[{{ $hari }}]"
                            id="waktuBuka_{{ strtolower($hari) }}"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                            placeholder="contoh: 09:00-20:00"
                            value="{{ $spa->waktuBuka[$hari] ?? '' }}"
                            required>
                    </div>
                @endforeach
                <small class="text-gray-500 mt-2 block">Format: HH:MM-HH:MM, contoh: 09:00-20:00</small>
            </div>

            <div class="mb-4">
                <label for="maps" class="block mb-2">Link Embed Maps</label>
                <input type="text" name="maps" id="maps" value="{{ $spa->maps }}"
                    class="w-full px-3 py-2 border rounded"
                    placeholder="Tempel link embed Google Maps Anda di sini">
            </div>

            <div class="mb-4">
                <label for="image" class="block mb-2">Gambar</label>
                @if($spa->image)
                    <img src="{{ asset('storage/' . $spa->image) }}" alt="Spa Image" class="mb-2 w-32 h-32 object-cover">
                @endif
                <input type="file" name="image" id="image" class="w-full px-3 py-2 border rounded">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
@endsection