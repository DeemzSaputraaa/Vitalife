@extends('layouts.admin')

@section('judul-halaman', 'Dashboard')

@section('content')
    <div class="bg-yellow-300 rounded-lg p-6 flex items-center justify-between mb-4">
        <div>
            <h2 class="text-2xl font-bold mb-2">Hello, {{ Auth::user()->name }}!</h2>
            <p class="text-gray-700"></p>
            <p class="text-gray-700">Sunny weather</p>
        </div>
        <div class="w-24 h-24">
            <!-- Replace with an appropriate SVG or image for the avatar -->
            <svg class="w-full h-full text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
            </svg>
        </div>
    </div>

    <div class="flex space-x-4 mb-4">
        <!-- Total Mews Card -->
        <a href="{{ route('admin.spas.index') }}" class="bg-white text-black rounded-lg p-4 flex-1 w-full">
            <div class="flex justify-between items-start">
                <div>
                    <h2 class="text-2xl font-bold">{{ $spacount }}</h2>
                    <p class="text-sm text-gray-500">Total Spa</p>
                </div>
                <div class="bg-gray-200 p-2 rounded-md">
                    <svg class="w-5 h-5 text-gray-800" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                        </path>
                    </svg>
                </div>
            </div>
            <div class="mt-4 bg-gray-200 rounded-full h-2">
                <div class="bg-gray-800 h-2 rounded-full" style="width: 45%"></div>
            </div>
        </a>

        <!-- Total Orders Today Card -->
        <a href="{{route('admin.yogas.index')}}" class="bg-white rounded-lg p-4 flex-1 shadow">
            <div class="flex justify-between items-start">
                <div>
                    <h2 class="text-2xl font-bold">{{ $yogacount }}</h2>
                    <p class="text-sm text-gray-500">Total Yoga</p>
                </div>
                <div class="bg-blue-100 p-2 rounded-md">
                    <svg class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd"
                            d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-4 bg-gray-200 rounded-full h-2">
                <div class="bg-blue-500 h-2 rounded-full" style="width: 65%"></div>
            </div>
        </a>

        <!-- Total Clients Today Card -->
        <div class="bg-white rounded-lg p-4 flex-1 shadow">
            <div class="flex justify-between items-start">
                <div>
                    <h2 class="text-2xl font-bold">{{ $spacount }}</h2>
                    <p class="text-sm text-gray-500">Total Event</p>
                </div>
                <div class="bg-green-100 p-2 rounded-md">
                    <i class="fa-solid fa-person-running text-green-500"></i>
                </div>
            </div>
            <div class="mt-4 bg-gray-200 rounded-full h-2">
                <div class="bg-blue-500 h-2 rounded-full" style="width: 65%"></div>
            </div>
        </div>

        <!-- Revenue Card -->
        <div class="bg-white rounded-lg p-4 flex-1 shadow">
            <div class="flex justify-between items-start">
                <div>
                    <h2 class="text-2xl font-bold">{{ $spescount }}</h2>
                    <p class="text-sm text-gray-500">Total Spesialis</p>
                </div>
                <div class="bg-red-100 p-2 rounded-md">
                    <svg class="w-5 h-5 text-red-500" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>
            <div class="mt-4 bg-gray-200 rounded-full h-2">
                <div class="bg-red-500 h-2 rounded-full" style="width: 35%"></div>
            </div>
        </div>
    </div>

    <!-- Bagian grafik -->
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="font-bold mb-4">Revenue</h3>
            <div class="w-full max-w-2xl p-6 bg-white rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold">Revenue</h2>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 bg-gray-800 text-white rounded-md">Monthly</button>
                        <button class="px-3 py-1 text-gray-600">Weekly</button>
                        <button class="px-3 py-1 text-gray-600">Daily</button>
                    </div>
                </div>

                <div class="relative h-64">
                    <!-- Chart lines would go here -->
                    <div class="absolute bottom-0 left-0 w-full h-px bg-gray-200"></div>
                    <div class="absolute top-0 left-0 h-full w-px bg-gray-200"></div>

                    <!-- Example of a line -->
                    <div class="absolute bottom-0 left-0 w-full h-1/2 bg-blue-500 opacity-20 rounded-tr-full">
                    </div>

                    <!-- Data points -->
                    <div class="absolute bottom-1/2 right-0 w-2 h-2 bg-blue-500 rounded-full"></div>
                    <div class="absolute bottom-1/4 right-1/4 w-2 h-2 bg-red-500 rounded-full"></div>
                </div>

                <div class="flex justify-between mt-2 text-sm text-gray-600">
                    <span>Jan</span>
                    <span>Feb</span>
                    <span>Mar</span>
                    <span>Apr</span>
                    <span>May</span>
                </div>

                <div class="flex items-center mt-4 space-x-4">
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-blue-500 rounded-full mr-2"></div>
                        <span>Income: 18%</span>
                    </div>
                    <div class="flex items-center">
                        <div class="w-3 h-3 bg-red-500 rounded-full mr-2"></div>
                        <span>Expenses: 11%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="font-bold mb-4">Orders Summary</h3>
            <!-- Add bar chart here -->
        </div>
    </div>

    <!-- Daftar pesanan -->
    <div class="bg-white p-4 rounded-lg shadow">
        <h3 class="font-bold mb-4">Order List</h3>
        <table class="w-full">
            <thead>
                <tr class="text-left">
                    <th>No.</th>
                    <th>Date</th>
                    <th>Customer Name</th>
                    <th>Location</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Add table rows here -->
            </tbody>
        </table>
    </div>
@endsection
