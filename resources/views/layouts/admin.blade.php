<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    @include('layouts.sidenav')
    <div class="flex h-full bg-blue-100 pl-3">
        <!-- Sidebar -->

        <!-- Konten Utama -->
        <main class="flex-1 p-4 pl-48">
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
                    <h1 class="text-2xl font-bold ml-2">@yield('judul-halaman', 'Dashboard')</h1>
                </div>
                <div class="flex items-center space-x-5">
                    <!-- Ikon lonceng -->
                    <div class="relative">
                        <button id="notificationButton" class="text-gray-600 hover:text-gray-800 flex items-center">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 5.365V3m0 2.365a5.338 5.338 0 0 1 5.133 5.368v1.8c0 2.386 1.867 2.982 1.867 4.175 0 .593 0 1.193-.538 1.193H5.538c-.538 0-.538-.6-.538-1.193 0-1.193 1.867-1.789 1.867-4.175v-1.8A5.338 5.338 0 0 1 12 5.365Zm-8.134 5.368a8.458 8.458 0 0 1 2.252-5.714m14.016 5.714a8.458 8.458 0 0 0-2.252-5.714M8.54 17.901a3.48 3.48 0 0 0 6.92 0H8.54Z" />
                            </svg>
                            <span id="notificationCount"
                                class="ml-2 bg-red-600 text-white text-xs font-bold rounded-full px-2 py-1">0</span>
                        </button>
                        <div id="notificationDropdown"
                            class="absolute right-0 mt-2 w-80 bg-white rounded-md shadow-lg hidden">
                            <div class="py-2" id="notificationList"></div>
                        </div>
                    </div>
                    <!-- Placeholder avatar pengguna -->
                    <div class="relative" x-data="{ open: false }">
                        <div @click="open = !open" class="flex items-center space-x-2 cursor-pointer">
                            <span class="text-sm font-medium text-gray-700">{{ Auth::user()->name }}</span>
                            <div class="w-8 h-8 bg-gray-300 rounded-full">
                                <img src="{{ Auth::user()->image }}" alt="Avatar"
                                    class="w-8 h-8 rounded-full">
                            </div>
                        </div>

                        <div x-show="open" @click.away="open = false"
                            class="absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10">
                            <div class="py-1">
                                <a href="{{ route('profile.edit') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    Edit Profile
                                </a>
                                <a href="{{ route('dashboard') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                    Website
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div id="content-wrapper">
                @yield('content')
            </div>
            @yield('scripts')
        </main>
    </div>
    <script>
        function showLoading() {
            Swal.fire({
                title: 'Loading...',
                allowOutsideClick: false,
                showConfirmButton: false,
                willOpen: () => {
                    Swal.showLoading();
                }
            });
        }

        function hideLoading() {
            Swal.close();
        }

        document.addEventListener('DOMContentLoaded', () => {
            showLoading();
        });

        window.addEventListener('load', () => {
            hideLoading();
        });

        document.addEventListener('click', (e) => {
            const link = e.target.closest('a');
            if (link && link.getAttribute('href') && link.getAttribute('href').startsWith('/')) {
                e.preventDefault();
                showLoading();
                window.location.href = link.href;
            }
        });

        document.getElementById('content-wrapper').addEventListener('DOMNodeInserted', () => {
            hideLoading();
        });

        function fetchNotifications() {
            // ... (kode fetchNotifications yang sama) ...
        }

        function markAsRead(id) {
            // ... (kode markAsRead yang sama) ...
        }

        document.getElementById('notificationButton').addEventListener('click', (e) => {
            // ... (kode event listener yang sama) ...
        });

        document.addEventListener('click', (e) => {
            // ... (kode event listener yang sama) ...
        });

        setInterval(fetchNotifications, 30000);
        fetchNotifications();
    </script>
</body>

<script>
    function fetchNotifications() {
        fetch('/notifications')
            .then(response => response.json())
            .then(data => {
                const notificationList = document.getElementById('notificationList');
                const notificationCount = document.getElementById('notificationCount');
                notificationList.innerHTML = '';
                notificationCount.textContent = data.length;

                if (data.length === 0) {
                    const noNotification = document.createElement('div');
                    noNotification.className = 'px-4 py-2 text-gray-500';
                    noNotification.textContent = 'Tidak ada notifikasi baru';
                    notificationList.appendChild(noNotification);
                } else {
                    data.forEach(notification => {
                        const notificationItem = document.createElement('div');
                        notificationItem.className = 'px-4 py-2 hover:bg-gray-100 cursor-pointer';
                        notificationItem.textContent = notification.data.message;
                        notificationItem.onclick = () => markAsRead(notification.id);
                        notificationList.appendChild(notificationItem);
                    });
                }
            });
    }

    function markAsRead(id) {
        fetch('/notifications/mark-as-read', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                id: id
            })
        }).then(() => fetchNotifications());
    }

    document.getElementById('notificationButton').addEventListener('click', (e) => {
        e.stopPropagation();
        const dropdown = document.getElementById('notificationDropdown');
        dropdown.classList.toggle('hidden');
        fetchNotifications();
    });

    document.addEventListener('click', (e) => {
        const dropdown = document.getElementById('notificationDropdown');
        if (!dropdown.contains(e.target) && e.target !== document.getElementById('notificationButton')) {
            dropdown.classList.add('hidden');
        }
    });

    // Ambil notifikasi setiap 30 detik
    setInterval(fetchNotifications, 30000);

    // Ambil notifikasi saat pertama kali
    fetchNotifications();
</script>

</html>
