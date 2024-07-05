<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="flex h-full bg-blue-100">
        <!-- Sidebar -->
        @include('layouts.sidenav')

        <!-- Main content -->
        <main class="flex-1 p-8">
            <header class="flex justify-between items-center mb-8">
                <div class="flex items-center">
                    <button>
                        <svg class="w-6 h-6 text-gray-800 dark:text-black" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M5 7h14M5 12h14M5 17h10" />
                        </svg>
                    </button>
                    <h1 class="text-2xl font-bold ml-2">Dashboard</h1>
                </div>
                <div class="flex items-center space-x-5">
                    <!-- Gear icon -->
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z" />
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                    </svg>
                    <!-- New Bell icon -->
                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.193-.538 1.193H5.538c-.538 0-.538-.6-.538-1.193 0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365Zm-8.134 5.368a8.458 8.458 0 0 1 2.252-5.714m14.016 5.714a8.458 8.458 0 0 0-2.252-5.714M8.54 17.901a3.48 3.48 0 0 0 6.92 0H8.54Z" />
                    </svg>
                    <!-- User avatar placeholder -->
                    <div class="w-8 h-8 bg-gray-300 rounded-full"></div>
                </div>
            </header>

            <div class="flex space-x-4 mb-4">
                <!-- Total Mews Card -->
                <button href="" class="bg-white text-black rounded-lg p-4 flex-1 w-full">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-2xl font-bold">120</h2>
                            <p class="text-sm text-gray-500">Total Mews</p>
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
                </button>

                <!-- Total Orders Today Card -->
                <div class="bg-white rounded-lg p-4 flex-1 shadow">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-2xl font-bold">180</h2>
                            <p class="text-sm text-gray-500">Total Orders Today</p>
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
                </div>

                <!-- Total Clients Today Card -->
                <div class="bg-white rounded-lg p-4 flex-1 shadow">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-2xl font-bold">240</h2>
                            <p class="text-sm text-gray-500">Total Clients Today</p>
                        </div>
                        <div class="bg-green-100 p-2 rounded-md">
                            <svg class="w-5 h-5 text-green-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4 bg-gray-200 rounded-full h-2">
                        <div class="bg-green-500 h-2 rounded-full" style="width: 50%"></div>
                    </div>
                </div>

                <!-- Revenue Card -->
                <div class="bg-white rounded-lg p-4 flex-1 shadow">
                    <div class="flex justify-between items-start">
                        <div>
                            <h2 class="text-2xl font-bold">140</h2>
                            <p class="text-sm text-gray-500">Revenue per Day (BDT)</p>
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
            {{-- </div> --}}

            <!-- Charts section -->
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

            <!-- Order list -->
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
        </main>
    </div>

</body>

</html>
