@extends('layouts.dashboard')

@section('content')
    {{-- Header Global Notification --}}
    <div class="px-6 lg:px-16 mt-4">
        <div class="p-6 rounded-xl shadow-md bg-gradient-to-r from-red-600 to-red-500 text-white">
            <div class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405M19 13V8a7 7 0 10-14 0v5l-2 2v1h18v-1l-2-2z" />
                </svg>
                <div>
                    <h1 class="text-2xl font-bold">Notifikasi Global</h1>
                    <p class="opacity-80">Semua notifikasi penting yang muncul pada sistem akan tampil di sini. Anda dapat melihat, mengelola, dan menghapus notifikasi.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Section List Notification --}}
    <div class="px-6 lg:px-16 mt-6">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold text-gray-800">Daftar Notifikasi</h2>
            <div class="flex items-center gap-3">
                <div class="flex items-center gap-2 text-sm text-gray-800">
                    <span>Auto Refresh</span>
                    <label class="inline-flex relative items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer" checked>
                        <div class="w-11 h-6 bg-gray-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                    <span class="opacity-60">19:49:41 PM</span>
                </div>
                <button class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Notifikasi
                </button>
            </div>
        </div>

        {{-- Notification Card --}}
        <div class="space-y-4 border-t border-gray-300 pt-4 rounded-xl p-5 shadow-sm">
            {{-- Item Notifikasi --}}
            <div class="bg-white border border-gray-300 rounded-xl p-5 text-gray-800 shadow-sm">
                <div class="flex items-start justify-between">
                    <div class="flex gap-3">
                        <div class="bg-blue-100 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 110 20 10 10 0 010-20z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Pemeliharaan Sistem</h3>
                            <p class="text-sm text-gray-600">Sistem akan mengalami downtime pada 20 Oktober 2025 pukul 22.00 WIB untuk pemeliharaan rutin.</p>
                            <p class="text-xs text-gray-500 mt-1">Diterbitkan: 13 Oktober 2025</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="bg-yellow-400 text-black text-xs font-semibold px-3 py-1 rounded-full">Penting</span>
                        <button class="flex items-center gap-2 bg-gray-800 hover:bg-gray-700 text-white px-4 py-2 rounded-lg text-sm transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5h2m-1 0v14m-7-7h14" />
                            </svg>
                            Edit
                        </button>
                    </div>
                </div>
            </div>

            {{-- Notifikasi lainnya --}}
            <div class="bg-white border border-gray-300 rounded-xl p-5 text-gray-800 shadow-sm">
                <div class="flex items-start justify-between">
                    <div class="flex gap-3">
                        <div class="bg-green-100 p-2 rounded-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold">Notifikasi Informasi</h3>
                            <p class="text-sm text-gray-600">Fitur baru telah ditambahkan untuk kemudahan akses pengajuan kenaikan pangkat.</p>
                            <p class="text-xs text-gray-500 mt-1">Diterbitkan: 12 Oktober 2025</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="bg-green-200 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">Info</span>
                        <button class="flex items-center gap-2 bg-gray-800 hover:bg-gray-700 text-white px-4 py-2 rounded-lg text-sm transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5h2m-1 0v14m-7-7h14" />
                            </svg>
                            Edit
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection