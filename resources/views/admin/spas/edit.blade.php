@extends('layouts.admin')

@section('judul-halaman', 'Edit Spa')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Edit Spa</h1>

        <form action="{{ route('admin.spa.update', $spa->id_spa) }}" method="POST">
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
                <label for="waktuBuka" class="block mb-2">Waktu Buka</label>
                <input type="text" name="waktuBuka" id="waktuBuka" value="{{ $spa->waktuBuka }}"
                    class="w-full px-3 py-2 border rounded">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
@endsection
