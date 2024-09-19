@extends('layouts.admin')

@section('judul-halaman', 'Dashboard')

@section('content')
    <div class="bg-blue-300 rounded-lg p-6 flex items-center justify-between mb-4">
        <div x-data="{ weather: null }" x-init="fetchWeather()">
            <h2 class="text-2xl font-bold mb-2">Hello, {{ Auth::user()->name }}!</h2>
            <p class="text-gray-700">Weather</p>
            <p class="text-gray-700">
                <span x-text="weather ? `Temperature: ${weather.temperature}°C` : 'Loading...'"></span>
                <br>
                <span x-text="weather ? `Description: ${weather.description}` : ''"></span>
            </p>
        </div>
        <div class="w-24 h-24">
            <img src="{{ Auth::user()->image }}" alt="User Avatar" class="w-full h-full">
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
        <a href="{{ route('admin.yogas.index') }}" class="bg-white rounded-lg p-4 flex-1 shadow">
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
        <a href="{{ route('admin.event.index') }}" class="bg-white rounded-lg p-4 flex-1 shadow">
            <div class="flex justify-between items-start">
                <div>
                    <h2 class="text-2xl font-bold">{{ $eventcount }}</h2>
                    <p class="text-sm text-gray-500">Total Event</p>
                </div>
                <div class="bg-green-100 p-2 rounded-md">
                    <i class="fa-solid fa-person-running text-green-500"></i>
                </div>
            </div>
            <div class="mt-4 bg-gray-200 rounded-full h-2">
                <div class="bg-blue-500 h-2 rounded-full" style="width: 65%"></div>
            </div>
        </a>

        <!-- Revenue Card -->
        <a href="{{ route('admin.spesialisis.index') }}" class="bg-white rounded-lg p-4 flex-1 shadow">
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
        </a>
    </div>

    <!-- Bagian grafik -->
    <div class="grid grid-cols-2 gap-4 mb-4">
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="font-bold mb-4">Website Usage</h3>
            <div class="w-full max-w-2xl p-6 bg-white rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-bold">Visits</h2>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 bg-gray-800 text-white rounded-md">Monthly</button>
                        <button class="px-3 py-1 text-gray-600">Weekly</button>
                        <button class="px-3 py-1 text-gray-600">Daily</button>
                    </div>
                </div>

                <div class="relative h-64">
                    <canvas id="websiteUsageChart"></canvas>
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
                        <span>Visits: <span id="visitsPercentage">0</span>%</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-white p-4 rounded-lg shadow">
            <h3 class="font-bold mb-4">Orders Summary</h3>
            <!-- Add bar chart here -->
        </div>
    </div>

    <!-- Daftar Riwayat Pembayaran -->
    <div class="bg-white p-4 rounded-lg shadow">
        <h3 class="font-bold mb-4">Riwayat Pembayaran</h3>
        <table class="w-full">
            <thead>
                <tr class="text-left">
                    <th>No.</th>
                    <th>Tanggal</th>
                    <th>Nama Pelanggan</th>
                    <th>Bank</th>
                    <th>Jumlah</th>
                    <th>Kode Pembayaran</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody id="paymentHistoryBody">
                <!-- Baris tabel akan ditambahkan secara dinamis di sini -->
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Fungsi untuk memuat dan menampilkan riwayat pembayaran
        function loadPaymentHistory() {
            const tbody = document.getElementById('paymentHistoryBody');
            const payments = JSON.parse(localStorage.getItem('payments') || '[]');

            tbody.innerHTML = ''; // Bersihkan tabel terlebih dahulu

            payments.forEach((payment, index) => {
                const row = tbody.insertRow();
                row.innerHTML = `
                    <td class="p-2">${index + 1}</td>
                    <td class="p-2">${payment.tanggal}</td>
                    <td class="p-2">${payment.nama}</td>
                    <td class="p-2">${payment.bank}</td>
                    <td class="p-2">${payment.kode}</td>
                    <td class="p-2">${payment.status}</td>
                    <td class="p-2">
                        <button onclick="updateStatus('${payment.kode}')" class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600">
                            Update Status
                        </button>
                    </td>
                `;
            });
        }

        // Fungsi untuk mengupdate status pembayaran
        function updateStatus(kode) {
            let payments = JSON.parse(localStorage.getItem('payments') || '[]');
            const paymentIndex = payments.findIndex(p => p.kode === kode);

            if (paymentIndex !== -1) {
                payments[paymentIndex].status = 'Dikonfirmasi';
                localStorage.setItem('payments', JSON.stringify(payments));
                loadPaymentHistory(); // Muat ulang tabel
            }
        }

        // Muat riwayat pembayaran saat halaman dimuat
        window.addEventListener('load', loadPaymentHistory);


        function fetchWeather() {
            fetch('/api/weather')
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    this.weather = data;
                })
                .catch(error => {
                    console.error('Error fetching weather:', error);
                    this.weather = {
                        temperature: 'N/A',
                        description: 'Unable to fetch weather data'
                    };
                });
        }

        document.addEventListener('DOMContentLoaded', function() {
            fetch('/website-usage-data')
                .then(response => response.json())
                .then(data => {
                    const ctx = document.getElementById('websiteUsageChart').getContext('2d');
                    new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: data.map(item => item.date),
                            datasets: [{
                                label: 'Website Visits',
                                data: data.map(item => item.visits),
                                borderColor: 'rgb(59, 130, 246)',
                                backgroundColor: 'rgba(59, 130, 246, 0.2)',
                                tension: 0.4,
                                fill: true
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    ticks: {
                                        display: false
                                    },
                                    grid: {
                                        display: false
                                    }
                                },
                                x: {
                                    ticks: {
                                        display: false
                                    },
                                    grid: {
                                        display: false
                                    }
                                }
                            },
                            plugins: {
                                legend: {
                                    display: false
                                }
                            }
                        }
                    });

                    if (data.length > 1) {
                        const firstValue = data[0].visits;
                        const lastValue = data[data.length - 1].visits;
                        const percentageIncrease = ((lastValue - firstValue) / firstValue * 100).toFixed(2);
                        document.getElementById('visitsPercentage').textContent = percentageIncrease;
                    }
                });
        });
    </script>
@endsection
