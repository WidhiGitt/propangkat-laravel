@extends('layouts.dashboard')

@section('content')
    {{-- Header Log Aktivitas --}}
    <div class="px-6 lg:px-16 mt-4">
        <div class="p-6 rounded-xl shadow-md bg-gradient-to-r from-red-600 to-red-500 text-white">
            <div class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div>
                    <h1 class="text-2xl font-bold">Log Aktivitas</h1>
                    <p class="opacity-80">Riwayat semua aktivitas yang dilakukan oleh pengguna sistem akan muncul di sini secara kronologis.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Filter & Search --}}
    <div class="px-6 lg:px-16 mt-6">
        <div class="bg-white border border-gray-300 p-4 rounded-xl flex flex-col lg:flex-row items-center justify-between gap-4 shadow-sm">
            <div class="w-full lg:w-1/2 flex gap-3">
                <input type="text" placeholder="Cari nama, aksi, atau NIP..."
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-800">
            </div>
            <div class="flex gap-3 w-full lg:w-auto">
                <select class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-800">
                    <option value="">Semua Role</option>
                    <option value="Admin">Admin</option>
                    <option value="Operator">Operator</option>
                    <option value="Pegawai">Pegawai</option>
                </select>
                <select class="border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none text-gray-800">
                    <option value="">Urutkan</option>
                    <option value="baru">Terbaru</option>
                    <option value="lama">Terlama</option>
                </select>
            </div>
        </div>
    </div>

    {{-- Log List --}}
    <div class="px-6 lg:px-16 mt-6 space-y-4">
        {{-- Item Log --}}
        <div class="bg-white border border-gray-300 rounded-xl p-5 text-gray-800 shadow-sm flex justify-between items-start">
            <div class="flex gap-4">
                <div class="bg-blue-100 p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 17h5l-1.405-1.405M19 13V8a7 7 0 10-14 0v5l-2 2v1h18v-1l-2-2z" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-lg">Admin - <span class="text-blue-600 font-medium">Adi Nugroho</span></h3>
                    <p class="text-sm text-gray-600">Menambahkan pengguna baru dengan role <span class="font-semibold">Operator</span></p>
                    <p class="text-xs text-gray-500 mt-1">13 Oktober 2025, 19:50 WIB</p>
                </div>
            </div>
            <span class="bg-blue-200 text-blue-800 text-xs px-3 py-1 rounded-full">Tambah Data</span>
        </div>

        <div class="bg-white border border-gray-300 rounded-xl p-5 text-gray-800 shadow-sm flex justify-between items-start">
            <div class="flex gap-4">
                <div class="bg-green-100 p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 13l4 4L19 7" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-lg">Operator - <span class="text-green-600 font-medium">Dewi Lestari</span></h3>
                    <p class="text-sm text-gray-600">Memverifikasi usulan kenaikan pangkat pegawai <span class="font-semibold">Budi Santoso</span></p>
                    <p class="text-xs text-gray-500 mt-1">13 Oktober 2025, 18:20 WIB</p>
                </div>
            </div>
            <span class="bg-green-200 text-green-800 text-xs px-3 py-1 rounded-full">Verifikasi</span>
        </div>

        <div class="bg-white border border-gray-300 rounded-xl p-5 text-gray-800 shadow-sm flex justify-between items-start">
            <div class="flex gap-4">
                <div class="bg-red-100 p-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
                <div>
                    <h3 class="font-semibold text-lg">Admin - <span class="text-red-600 font-medium">Rizky Putra</span></h3>
                    <p class="text-sm text-gray-600">Menghapus data usulan yang tidak valid.</p>
                    <p class="text-xs text-gray-500 mt-1">12 Oktober 2025, 21:10 WIB</p>
                </div>
            </div>
            <span class="bg-red-200 text-red-800 text-xs px-3 py-1 rounded-full">Hapus Data</span>
        </div>

        {{-- Empty state jika tidak ada log --}}
        {{-- 
        <div class="bg-white border border-gray-300 rounded-xl p-10 text-center text-gray-500 shadow-sm">
            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto w-12 h-12 text-gray-400 mb-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p>Tidak ada aktivitas yang tercatat</p>
        </div>
        --}}
    </div>
@endsection
