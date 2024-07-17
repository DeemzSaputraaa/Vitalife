@extends('layouts.admin')

@section('judul-halaman', 'Daftar Spesialis')

@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Daftar Spesialis</h1>

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
                    <th class="py-2 px-4 border-b">Spesialisasi</th>
                    <th class="py-2 px-4 border-b">Tempat Tugas</th>
                    <th class="py-2 px-4 border-b">No. HP</th>
                    <th class="py-2 px-4 border-b">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($spesialisis as $spa)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ is_array($spa->nama) ? implode(', ', $spa->nama) : $spa->nama }}
                        </td>
                        <td class="py-2 px-4 border-b">
                            @if (is_array($spa->harga))
                                {{ implode(', ', $spa->harga) }}
                            @else
                                {{ $spa->harga }}
                            @endif
                        </td>
                        <td class="py-2 px-4 border-b">
                            {{ is_array($spa->alamat) ? implode(', ', $spa->alamat) : $spa->alamat }}</td>
                        <td class="py-2 px-4 border-b">{{ is_array($spa->spesialisasi) ? implode(', ', $spa->spesialisasi) : $spa->spesialisasi }}
                        </td>
                        <td class="py-2 px-4 border-b">
                            {{ is_array($spa->tempatTugas) ? implode(', ', $spa->tempatTugas) : $spa->tempatTugas }}</td>
                        <td class="py-2 px-4 border-b">
                            {{ is_array($spa->noHP) ? implode(', ', $spa->noHP) : $spa->noHP }}</td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex items-center space-x-2">
                                <a href=""
                                    class="text-blue-500 hover:text-blue-700">
                                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z" />
                                    </svg>
                                </a>
                                <form action="" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700"
                                        onclick="return confirm('Are you sure you want to delete this spa?')">
                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd"
                                                d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="py-2 px-4 border-b text-center">Tidak ada data spa</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
