@extends('layouts.admin')

@section('judul-halaman', 'Edit Event')

@section('content')
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-2xl font-semibold text-gray-900 mb-6">Edit Event</h1>

            <form action="{{ route('admin.event.update', $event->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium text-gray-700">Event Name</label>
                    <input type="text" name="nama" id="nama" value="{{ old('nama', $event->nama) }}"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="mb-4">
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="deskripsi" id="deskripsi" rows="3"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ old('deskripsi', $event->deskripsi) }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="tanggal" class="block text-sm font-medium text-gray-700">Date</label>
                    <input type="date" name="tanggal" id="tanggal" value="{{ old('tanggal', $event->tanggal) }}"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="mb-4">
                    <label for="alamat" class="block text-sm font-medium text-gray-700">Address</label>
                    <input type="text" name="alamat" id="alamat" value="{{ old('alamat', $event->alamat) }}"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="mb-4">
                    <label for="harga" class="block text-sm font-medium text-gray-700">Price</label>
                    <input type="number" name="harga" id="harga" value="{{ old('harga', $event->harga) }}"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="mb-4">
                    <label for="noHP" class="block text-sm font-medium text-gray-700">Contact Number</label>
                    <input type="text" name="noHP" id="noHP" value="{{ old('noHP', $event->noHP) }}"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="mb-4">
                    <label for="image" class="block text-sm font-medium text-gray-700">Event Image</label>
                    <input type="file" name="image" id="image"
                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @if ($event->image)
                        <img src="{{ asset($event->image) }}" alt="Current Event Image"
                            class="mt-2 w-32 h-32 object-cover rounded-md">
                    @endif
                </div>

                <div class="flex justify-end">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Update Event
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
