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
                @forelse ($spesialisis as $spesialis)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $spesialis->nama }}</td>
                        <td class="py-2 px-4 border-b">Rp {{ number_format($spesialis->harga, 0, ',', '.') }}</td>
                        <td class="py-2 px-4 border-b">{{ $spesialis->alamat }}</td>
                        <td class="py-2 px-4 border-b">{{ $spesialis->spesialisasi }}</td>
                        <td class="py-2 px-4 border-b">{{ $spesialis->tempatTugas }}</td>
                        <td class="py-2 px-4 border-b">{{ $spesialis->noHP }}</td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex items-center space-x-2">
                                <a href="{{ route('admin.spesialisis.edit', $spesialis->id_spesialis) }}"
                                    class="text-blue-500 hover:text-blue-700">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                        </path>
                                    </svg>
                                </a>
                                <form action="{{ route('admin.spesialisis.destroy', $spesialis->id_spesialis) }}" method="POST"
                                    class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus spesialis ini?')">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                            </path>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="py-2 px-4 border-b text-center">Tidak ada data spesialis</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection