@extends('layouts.dashboard')

@section('content')
    {{-- SECTION: Header Hijau --}}
    <div class="px-6 lg:px-16 mt-2">
        <div class="p-6 bg-gradient-to-r from-purple-400 via-purple-500 to-indigo-700 rounded-lg shadow text-white">
            <h1 class="text-2xl font-bold">Standard Operator Sekolah</h1>
            <p class="mt-1 text-sm opacity-90">
                Dashboard operator untuk verifikasi usulan kenaikan pangkat
            </p>
            <div class="mt-3 p-3 bg-white/20 rounded-lg text-sm flex items-center justify-between">
                <span>Ada <strong>23</strong> usulan yang perlu segera diverifikasi</span>
                <button class="bg-white text-green-700 font-semibold px-3 py-1 rounded-lg text-sm hover:bg-green-50 transition">
                    Lihat Usulan
                </button>
            </div>
        </div>
    </div>

    {{-- SECTION: Statistik Atas --}}
    <div class="px-6 lg:px-16 mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <div class="bg-white p-5 rounded-lg shadow border border-gray-200 flex flex-col justify-center">
            <div class="flex items-center justify-between mb-2">
                <span class="text-gray-500 text-sm">Total Usulan</span>
                <span class="text-xs text-green-600 font-semibold">+12 dari bulan lalu</span>
            </div>
            <h2 class="text-3xl font-bold text-gray-800">156</h2>
        </div>
        <div class="bg-white p-5 rounded-lg shadow border border-gray-200">
            <div class="flex items-center justify-between mb-2">
                <span class="text-gray-500 text-sm">Perlu Verifikasi</span>
            </div>
            <h2 class="text-3xl font-bold text-orange-500">23</h2>
        </div>
        <div class="bg-white p-5 rounded-lg shadow border border-gray-200">
            <div class="flex items-center justify-between mb-2">
                <span class="text-gray-500 text-sm">Sedang Diproses</span>
                <span class="text-xs text-gray-500">Progress 60%</span>
            </div>
            <h2 class="text-3xl font-bold text-blue-500">45</h2>
        </div>
        <div class="bg-white p-5 rounded-lg shadow border border-gray-200">
            <div class="flex items-center justify-between mb-2">
                <span class="text-gray-500 text-sm">Dikirim ke BKN</span>
            </div>
            <h2 class="text-3xl font-bold text-purple-500">67</h2>
        </div>
    </div>

    {{-- SECTION: Usulan Segera Diverifikasi + Ringkasan Status --}}
    <div class="px-6 lg:px-16 mt-8 grid grid-cols-1 lg:grid-cols-2 gap-6">
        {{-- Kiri --}}
        <div class="bg-white p-6 rounded-lg shadow border border-gray-200">
            <h2 class="text-lg font-semibold mb-4">🕒 Usulan Terbaru</h2>
            <div class="space-y-3">
            </div>
            <button class="mt-4 w-full border rounded-lg py-2 text-sm hover:bg-gray-100 transition">
                Lihat Semua Usulan
            </button>
        </div>

        {{-- Kanan --}}
        <div class="bg-white p-6 rounded-lg shadow border border-gray-200">
            <h2 class="text-lg font-semibold mb-4">📊 Pegawai Sekolah</h2>
            <div class="space-y-4">
            </div>
            <button class="mt-4 w-full border rounded-lg py-2 text-sm hover:bg-gray-100 transition">
                Lihat Semua Pegawai
            </button>
        </div>
    </div>
    
</div>
@endsection
