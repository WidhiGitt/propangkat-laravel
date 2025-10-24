@extends('layouts.dashboard')

@section('content')
 <!-- Section Header Welcome -->
    <div class="px-16 mt-2">
        <div class="p-6 bg-gradient-to-r from-blue-500 via-cyan-500 to-green-300 rounded-xl shadow-md text-white">
            <h1 class="text-2xl font-bold">Timeline Kenaikan Pangkat</h1>
            <p class="text-sm opacity-90 mt-1">Periode Agustus 2025</p>
            <div class="mt-4 flex items-center">
                <div class="flex items-center w-full bg-white/10 border border-green-300 rounded-lg px-4 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-green-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-sm font-medium">Pastikan Anda mengikuti timeline yang telah ditetapkan untuk kelancaran proses kenaikan pangkat</span>
                </div>
            </div>
        </div>
    </div>

    <!-- SECTION: Timeline Cards -->
    <div class="px-8 md:px-16 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
        <!-- Card 1 -->
        <div class="bg-white p-6 rounded-lg shadow border hover:shadow-lg transition">
            <div class="flex justify-between items-center mb-2">
                <h1 class="text-lg font-bold">Jabatan Pelaksana</h1>
                <span class="text-xs font-semibold text-green-600 bg-green-100 px-2 py-1 rounded-full">Aktif</span>
            </div>
            <p class="text-sm text-gray-500 mb-4">Timeline kenaikan pangkat untuk jabatan pelaksana</p>

            <div class="mb-4">
                <h3 class="font-semibold text-sm flex items-center">
                    <i class="fas fa-clock mr-2 text-green-600"></i> Waktu Pengusulan
                </h3>
                <p class="text-sm ml-6">5 Mei 2025 - 19 Mei 2025</p>
                <p class="text-xs ml-6 text-green-600">15 hari tersisa</p>
            </div>

            <div class="mb-6">
                <h3 class="font-semibold text-sm flex items-center">
                    <i class="fas fa-tools mr-2 text-blue-600"></i> Waktu Perbaikan
                </h3>
                <p class="text-sm ml-6">5 Mei 2025 - 28 Mei 2025</p>
                <p class="text-xs ml-6 text-gray-600">24 hari tersisa</p>
            </div>

            <div class="flex flex-col space-y-2">
                <button class="border w-full py-2 rounded-lg text-gray-700 hover:bg-gray-100 transition flex items-center justify-center space-x-2">
                    <i class="fas fa-file-alt"></i>
                    <span>Kelengkapan Berkas</span>
                </button>
                <button class="bg-blue-500 w-full py-2 rounded-lg text-white hover:bg-blue-600 transition">
                    Ajukan Sekarang
                </button>
            </div>
        </div>

        <!-- Card 2 & 3 bisa duplikasi card pertama -->
        <div class="bg-white p-6 rounded-lg shadow border hover:shadow-lg transition">
            <div class="flex justify-between items-center mb-2">
                <h1 class="text-lg font-bold">Jabatan Struktural</h1>
                <span class="text-xs font-semibold text-green-600 bg-green-100 px-2 py-1 rounded-full">Aktif</span>
            </div>
            <p class="text-sm text-gray-500 mb-4">Timeline kenaikan pangkat untuk jabatan struktural</p>

            <div class="mb-4">
                <h3 class="font-semibold text-sm flex items-center">
                    <i class="fas fa-clock mr-2 text-green-600"></i> Waktu Pengusulan
                </h3>
                <p class="text-sm ml-6">5 Mei 2025 - 19 Mei 2025</p>
                <p class="text-xs ml-6 text-green-600">15 hari tersisa</p>
            </div>

            <div class="mb-6">
                <h3 class="font-semibold text-sm flex items-center">
                    <i class="fas fa-tools mr-2 text-blue-600"></i> Waktu Perbaikan
                </h3>
                <p class="text-sm ml-6">5 Mei 2025 - 28 Mei 2025</p>
                <p class="text-xs ml-6 text-gray-600">24 hari tersisa</p>
            </div>

            <div class="flex flex-col space-y-2">
                <button class="border w-full py-2 rounded-lg text-gray-700 hover:bg-gray-100 transition flex items-center justify-center space-x-2">
                    <i class="fas fa-file-alt"></i>
                    <span>Kelengkapan Berkas</span>
                </button>
                <button class="bg-blue-500 w-full py-2 rounded-lg text-white hover:bg-blue-600 transition">
                    Ajukan Sekarang
                </button>
            </div>
        </div>

        <div class="bg-white p-6 rounded-lg shadow border hover:shadow-lg transition">
            <div class="flex justify-between items-center mb-2">
                <h1 class="text-lg font-bold">Jabatan Fungsional</h1>
                <span class="text-xs font-semibold text-green-600 bg-green-100 px-2 py-1 rounded-full">Aktif</span>
            </div>
            <p class="text-sm text-gray-500 mb-4">Timeline kenaikan pangkat untuk jabatan fungsional</p>

            <div class="mb-4">
                <h3 class="font-semibold text-sm flex items-center">
                    <i class="fas fa-clock mr-2 text-green-600"></i> Waktu Pengusulan
                </h3>
                <p class="text-sm ml-6">5 Mei 2025 - 19 Mei 2025</p>
                <p class="text-xs ml-6 text-green-600">15 hari tersisa</p>
            </div>

            <div class="mb-6">
                <h3 class="font-semibold text-sm flex items-center">
                    <i class="fas fa-tools mr-2 text-blue-600"></i> Waktu Perbaikan
                </h3>
                <p class="text-sm ml-6">5 Mei 2025 - 28 Mei 2025</p>
                <p class="text-xs ml-6 text-gray-600">24 hari tersisa</p>
            </div>

            <div class="flex flex-col space-y-2">
                <button class="border w-full py-2 rounded-lg text-gray-700 hover:bg-gray-100 transition flex items-center justify-center space-x-2">
                    <i class="fas fa-file-alt"></i>
                    <span>Kelengkapan Berkas</span>
                </button>
                <button class="bg-blue-500 w-full py-2 rounded-lg text-white hover:bg-blue-600 transition">
                    Ajukan Sekarang
                </button>
            </div>
        </div>
    </div>

    <!-- SECTION: Informasi Penting -->
    <div class="px-8 md:px-16 mt-6 mb-10">
        <div class="bg-white p-6 rounded-lg shadow border">
            <h2 class="text-xl font-bold flex items-center mb-4 text-orange-600">
                <i class="fas fa-exclamation-circle mr-2"></i>
                Informasi Penting
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm">
                <div>
                    <h3 class="font-semibold mb-2">Ketentuan Umum:</h3>
                    <ul class="list-disc list-inside space-y-1 text-gray-700">
                        <li>Pengajuan hanya dapat dilakukan pada periode yang telah ditentukan</li>
                        <li>Semua dokumen harus dalam format PDF dengan ukuran maksimal 5MB</li>
                        <li>Dokumen yang tidak sesuai akan dikembalikan untuk perbaikan</li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-semibold mb-2">Kontak Bantuan:</h3>
                    <ul class="space-y-1 text-gray-700">
                        <li>Email: bkpsdm@kaltimprov.go.id</li>
                        <li>Telepon: (0541) 123456</li>
                        <li>WhatsApp: 08123456789</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
