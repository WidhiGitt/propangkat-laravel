@extends('layouts.dashboard')

@section('content')
    {{-- Header Timeline Alert --}}
    <div class="px-6 lg:px-16 mt-4">
        <div class="p-6 rounded-xl bg-gradient-to-r from-red-600 to-red-500 shadow-md text-white">
            <div class="flex items-start gap-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 mt-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <div>
                    <h1 class="text-2xl font-bold">Timeline Kenaikan Pangkat</h1>
                    <p class="opacity-90">Ini adalah halaman untuk mengelola timeline kenaikan pangkat. Anda dapat
                        membuat, mengedit, dan menghapus timeline.</p>
                </div>
            </div>
            <div class="flex items-center w-full bg-white/10 border border-red-300 rounded-lg px-4 py-3 mt-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-green-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-sm font-medium">Selamat! Anda dapat mengajukan Kenaikan Pangkat Periode Agustus 2025</span>
                </div>
        </div>
    </div>

    {{-- Section List Timeline --}}
    <div class="px-6 lg:px-16 mt-6">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-white text-lg font-semibold">Periode Kenaikan Pangkat</h2>
            <div class="flex items-center gap-3">
                <div class="flex items-center gap-2 text-white text-sm">
                    <span>Auto Refresh</span>
                    <label class="inline-flex relative items-center cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer" checked>
                        <div class="w-11 h-6 bg-gray-600 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                    <span class="opacity-60">19:49:41 PM</span>
                </div>
                <button class="flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white text-sm px-4 py-2 rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Timeline
                </button>
            </div>
        </div>

       {{-- Timeline Card --}}
<div class="space-y-4 border-t border-gray-300 pt-4 rounded-xl p-5 shadow-sm">
    {{-- Item Timeline --}}
    <div class="bg-white border border-gray-300 rounded-xl p-5 text-gray-800 shadow-sm">
        <h3 class="text-lg font-semibold">Periode Khusus Jabatan Fungsional Oktober 2025</h3>
        <p class="text-sm text-gray-600 mb-4">Periode khusus untuk kenaikan pangkat jabatan fungsional</p>

        <div class="grid sm:grid-cols-2 md:grid-cols-2 gap-4">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div>
                    <p class="text-sm text-gray-600">Jenis Jabatan</p>
                    <p class="font-semibold">Jabatan Fungsional</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <div>
                    <p class="text-sm text-gray-600">Periode Waktu</p>
                    <p class="font-semibold">1 Oktober 2025 – 31 Oktober 2025</p>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between mt-4">
            <div class="flex items-center gap-2">
                <span class="bg-yellow-400 text-black text-xs font-semibold px-3 py-1 rounded-full">Penting</span>
                <span class="bg-gray-300 text-gray-800 text-xs font-semibold px-3 py-1 rounded-full">Nonaktif</span>
            </div>
            <button class="flex items-center gap-2 bg-gray-800 hover:bg-gray-700 text-white px-4 py-2 rounded-lg text-sm transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5h2m-1 0v14m-7-7h14" />
                </svg>
                Edit
            </button>
        </div>
    </div>

    <div class="bg-white border border-gray-300 rounded-xl p-5 text-gray-800 shadow-sm">
        <h3 class="text-lg font-semibold">Periode Khusus Jabatan Fungsional Oktober 2025</h3>
        <p class="text-sm text-gray-600 mb-4">Periode khusus untuk kenaikan pangkat jabatan fungsional</p>

        <div class="grid sm:grid-cols-2 md:grid-cols-2 gap-4">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div>
                    <p class="text-sm text-gray-600">Jenis Jabatan</p>
                    <p class="font-semibold">Jabatan Fungsional</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <div>
                    <p class="text-sm text-gray-600">Periode Waktu</p>
                    <p class="font-semibold">1 Oktober 2025 – 31 Oktober 2025</p>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between mt-4">
            <div class="flex items-center gap-2">
                <span class="bg-yellow-400 text-black text-xs font-semibold px-3 py-1 rounded-full">Penting</span>
                <span class="bg-gray-300 text-gray-800 text-xs font-semibold px-3 py-1 rounded-full">Nonaktif</span>
            </div>
            <button class="flex items-center gap-2 bg-gray-800 hover:bg-gray-700 text-white px-4 py-2 rounded-lg text-sm transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5h2m-1 0v14m-7-7h14" />
                </svg>
                Edit
            </button>
        </div>
    </div>

    <div class="bg-white border border-gray-300 rounded-xl p-5 text-gray-800 shadow-sm">
        <h3 class="text-lg font-semibold">Periode Khusus Jabatan Fungsional Oktober 2025</h3>
        <p class="text-sm text-gray-600 mb-4">Periode khusus untuk kenaikan pangkat jabatan fungsional</p>

        <div class="grid sm:grid-cols-2 md:grid-cols-2 gap-4">
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <div>
                    <p class="text-sm text-gray-600">Jenis Jabatan</p>
                    <p class="font-semibold">Jabatan Fungsional</p>
                </div>
            </div>
            <div class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <div>
                    <p class="text-sm text-gray-600">Periode Waktu</p>
                    <p class="font-semibold">1 Oktober 2025 – 31 Oktober 2025</p>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-between mt-4">
            <div class="flex items-center gap-2">
                <span class="bg-yellow-400 text-black text-xs font-semibold px-3 py-1 rounded-full">Penting</span>
                <span class="bg-gray-300 text-gray-800 text-xs font-semibold px-3 py-1 rounded-full">Nonaktif</span>
            </div>
            <button class="flex items-center gap-2 bg-gray-800 hover:bg-gray-700 text-white px-4 py-2 rounded-lg text-sm transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 5h2m-1 0v14m-7-7h14" />
                </svg>
                Edit
            </button>
        </div>
    </div>
</div>
@endsection