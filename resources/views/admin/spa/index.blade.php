@extends('layouts.admin')

@section('judul-halaman', 'Daftar Spa')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Daftar Spa</h1>

        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Nama</th>
                    <th class="py-2 px-4 border-b">Harga</th>
                    <th class="py-2 px-4 border-b">Alamat</th>
                    <th class="py-2 px-4 border-b">No. HP</th>
                    <th class="py-2 px-4 border-b">Waktu Buka</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($spas as $spa)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $spa->nama }}</td>
                        <td class="py-2 px-4 border-b">{{ $spa->harga }}</td>
                        <td class="py-2 px-4 border-b">{{ $spa->alamat }}</td>
                        <td class="py-2 px-4 border-b">{{ $spa->noHP }}</td>
                        <td class="py-2 px-4 border-b">{{ $spa->waktuBuka }}</td>
                        <td class="py-2 px-4 border-b">
                            <a href="{{ route('admin.spa.edit', $spa->id_spa) }}"
                                class="text-blue-500 hover:underline">Edit</a>
                            <form action="{{ route('admin.spa.destroy', $spa->id_spa) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:underline ml-2"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
