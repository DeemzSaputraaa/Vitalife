<x-app-layout>
    <div class="py-12 mt-16">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex flex-col md:flex-row justify-between space-y-8 md:space-y-0 md:space-x-8">
                        <div class="flex-1">
                            <div class="flex items-center space-x-4 mb-6">
                                <img src="{{ asset($spesialis->image) }}" alt="spesialis"
                                    class="w-16 h-16 rounded-full object-cover">
                                <div>
                                    <h2 class="text-xl font-semibold">{{ $spesialis->nama }}</h2>
                                    <p class="text-gray-600">{{ $spesialis->spesialisasi }}</p>
                                </div>
                            </div>

                            <!-- Rincian Pembayaran -->
                            <div class="bg-gray-100 p-4 rounded-lg">
                                <div class="flex justify-between mb-2">
                                    <span>Biaya sesi 30 menit</span>
                                    <span>Rp{{ number_format($spesialis->harga, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Kolom Kanan: Metode Pembayaran -->
                        <div class="md:w-1/3">
                            <h3 class="text-lg font-semibold mb-4">Metode pembayaran</h3>
                            <div class="space-y-3">
                                <div class="flex items-center space-x-3 bg-gray-100 p-3 rounded">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#00457C">
                                        <path
                                            d="M20.067 8.478c.492.315.844.847.844 1.478v4.044c0 .631-.352 1.163-.844 1.478-1.182.735-4.068 2.522-4.068 2.522-.825.512-1.831-.546-1.831-1.478V14.5c0-.631-.352-1.163-.844-1.478-1.182-.735-4.068-2.522-4.068-2.522-.825-.512-1.831.546-1.831 1.478v1.522c0 .631-.352 1.163-.844 1.478-1.182.735-4.068 2.522-4.068 2.522-.825.512-1.831-.546-1.831-1.478V9.956c0-.631.352-1.163.844-1.478 1.182-.735 4.068-2.522 4.068-2.522.825-.512 1.831.546 1.831 1.478V9c0 .631.352 1.163.844 1.478 1.182.735 4.068 2.522 4.068 2.522.825.512 1.831-.546 1.831-1.478V9.956c0-.631.352-1.163.844-1.478 1.182-.735 4.068-2.522 4.068-2.522.825-.512 1.831.546 1.831 1.478v1.566z" />
                                    </svg>
                                    <span>Via PayPal</span>
                                </div>
                                <div class="flex items-center space-x-3 bg-gray-100 p-3 rounded">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#1A1F71">
                                        <path
                                            d="M15.265 2.425L13.5 11.55h-2.65l1.765-9.125h2.65zm6.704 6.04l-1.235 1.235 1.235 1.235-1.235 1.235 1.235 1.235-1.235 1.235.26.26c-.635.76-1.56 1.235-2.6 1.235H16.5l-1.265 6.545h-2.65l1.265-6.545h-2.65l-1.265 6.545H7.265l1.265-6.545H6.5c-1.04 0-1.965-.475-2.6-1.235l.26-.26-1.235-1.235 1.235-1.235-1.235-1.235 1.235-1.235-1.235-1.235L4.16 8.465h3.275l1.765-9.125h2.65L10.085 8.465h2.65l1.765-9.125h2.65L15.385 8.465h3.275l1.31-1.31 1.235 1.235z" />
                                    </svg>
                                    <span>Via Visa</span>
                                </div>
                                <div class="flex items-center space-x-3 bg-gray-100 p-3 rounded">
                                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="#0079FF">
                                        <path
                                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z" />
                                    </svg>
                                    <span>Via Dana</span>
                                </div>
                                <div class="md:w-1/3">
                                    <button id="paymentButton"
                                        class="w-full bg-indigo-600 text-white py-3 px-4 rounded hover:bg-indigo-700 transition duration-300">
                                        Lakukan Pembayaran
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Metode Pembayaran -->
    <div id="paymentMethodModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Pilih Metode Pembayaran</h3>
                <form id="paymentForm" class="mt-4 space-y-4">
                    <div>
                        <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                        <input type="text" id="nama" name="nama" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </div>
                    <div>
                        <label for="bank" class="block text-sm font-medium text-gray-700">Pilih Bank</label>
                        <select id="bank" name="bank" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            <option value="">Pilih Bank</option>
                            <option value="BCA">BCA</option>
                            <option value="Mandiri">Mandiri</option>
                            <option value="BNI">BNI</option>
                            <option value="BRI">BRI</option>
                        </select>
                    </div>
                    <button type="submit"
                        class="w-full bg-indigo-600 text-white py-2 px-4 rounded hover:bg-indigo-700 transition duration-300">
                        Bayar
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Kode Pembayaran -->
    <div id="paymentCodeModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Kode Pembayaran</h3>
                <div class="mt-2 px-7 py-3">
                    <p class="text-sm text-gray-500">Silakan gunakan kode pembayaran berikut:</p>
                    <p id="paymentCode" class="text-2xl font-bold mt-2"></p>
                </div>
                <div class="items-center px-4 py-3">
                    <button id="closeModal"
                        class="px-4 py-2 bg-indigo-500 text-white text-base font-medium rounded-md w-full shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-300">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <script>
        document.getElementById('paymentButton').addEventListener('click', function() {
            document.getElementById('paymentMethodModal').classList.remove('hidden');
        });

        document.getElementById('paymentForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const nama = document.getElementById('nama').value;
            const bank = document.getElementById('bank').value;
            if (nama && bank) {
                const paymentCode = generatePaymentCode(bank);
                document.getElementById('paymentCode').textContent = paymentCode;
                document.getElementById('paymentMethodModal').classList.add('hidden');
                document.getElementById('paymentCodeModal').classList.remove('hidden');
            }
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('paymentCodeModal').classList.add('hidden');
        });

        function generatePaymentCode(bank) {
            const bankCodes = {
                'BCA': '001',
                'Mandiri': '002',
                'BNI': '003',
                'BRI': '004'
            };
            const randomDigits = Math.floor(1000000000 + Math.random() * 9000000000);
            return bankCodes[bank] + randomDigits;
        }
    </script>
</x-app-layout>
