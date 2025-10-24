@extends('layouts.dashboard')

@section('content')
    {{-- SECTION: Header Hijau --}}
    <div class="px-6 lg:px-16 mt-2">
        <div class="p-6 bg-gradient-to-r from-green-400 via-green-500 to-green-700 rounded-lg shadow text-white">
            <h1 class="text-2xl font-bold">Selamat Datang, Siti Nurhaliza, S.Kom!</h1>
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
    <div class="px-6 lg:px-16 mt-6 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4">
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
        <div class="bg-white p-5 rounded-lg shadow border border-gray-200">
            <div class="flex items-center justify-between mb-2">
                <span class="text-gray-500 text-sm">Selesai</span>
                <span class="text-xs text-green-600 font-semibold">+5 minggu ini</span>
            </div>
            <h2 class="text-3xl font-bold text-green-500">21</h2>
        </div>
    </div>

    {{-- SECTION: Usulan Segera Diverifikasi + Ringkasan Status --}}
    <div class="px-6 lg:px-16 mt-8 grid grid-cols-1 lg:grid-cols-2 gap-6">
        {{-- Kiri --}}
        <div class="bg-white p-6 rounded-lg shadow border border-gray-200">
            <h2 class="text-lg font-semibold mb-4">🕒 Usulan Perlu Segera Diverifikasi</h2>
            <div class="space-y-3">
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border border-gray-200">
                    <div>
                        <p class="font-semibold">Dr. Ahmad Wijaya, S.Pd</p>
                        <p class="text-xs text-gray-500">Dinas Pendidikan • 2 hari tersisa</p>
                    </div>
                    <button class="px-3 py-1 bg-green-600 text-white rounded-lg text-sm hover:bg-green-700">
                        Verifikasi
                    </button>
                </div>
                <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg border border-gray-200">
                    <div>
                        <p class="font-semibold">Siti Nurhaliza, S.Kom</p>
                        <p class="text-xs text-gray-500">Diskominfo • 5 hari tersisa</p>
                    </div>
                    <button class="px-3 py-1 bg-green-600 text-white rounded-lg text-sm hover:bg-green-700">
                        Verifikasi
                    </button>
                </div>
            </div>
            <button class="mt-4 w-full border rounded-lg py-2 text-sm hover:bg-gray-100 transition">
                Lihat Semua Usulan
            </button>
        </div>

        {{-- Kanan --}}
        <div class="bg-white p-6 rounded-lg shadow border border-gray-200">
            <h2 class="text-lg font-semibold mb-4">📊 Ringkasan Usulan per Status</h2>
            <div class="space-y-4">
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span>Perlu Verifikasi</span><span>23</span>
                    </div>
                    <div class="bg-gray-200 h-2 rounded-full">
                        <div class="bg-orange-500 h-2 rounded-full" style="width: 30%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span>Proses Verifikasi</span><span>45</span>
                    </div>
                    <div class="bg-gray-200 h-2 rounded-full">
                        <div class="bg-blue-500 h-2 rounded-full" style="width: 60%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span>Dikirim ke BKN</span><span>67</span>
                    </div>
                    <div class="bg-gray-200 h-2 rounded-full">
                        <div class="bg-purple-500 h-2 rounded-full" style="width: 80%"></div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between text-sm mb-1">
                        <span>Selesai</span><span>21</span>
                    </div>
                    <div class="bg-gray-200 h-2 rounded-full">
                        <div class="bg-green-500 h-2 rounded-full" style="width: 20%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION: Aktivitas Terbaru --}}
    <div class="px-6 lg:px-16 mt-8">
        <div class="bg-white p-6 rounded-lg shadow border border-gray-200">
            <h2 class="text-lg font-semibold mb-4">📝 Aktivitas Terbaru</h2>
            <div class="space-y-3">
                <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg border">
                    <div>
                        <p class="font-semibold text-sm">Verifikasi dokumen - Ahmad Wijaya</p>
                        <p class="text-xs text-gray-500">5 menit lalu</p>
                    </div>
                    <span class="text-xs font-semibold bg-green-100 text-green-700 px-2 py-1 rounded-lg">Disetujui</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg border">
                    <div>
                        <p class="font-semibold text-sm">Kembalikan untuk perbaikan - Siti Nurhaliza</p>
                        <p class="text-xs text-gray-500">12 menit lalu</p>
                    </div>
                    <span class="text-xs font-semibold bg-yellow-100 text-yellow-700 px-2 py-1 rounded-lg">Revisi</span>
                </div>
                <div class="flex justify-between items-center p-3 bg-gray-50 rounded-lg border">
                    <div>
                        <p class="font-semibold text-sm">Kirim ke BKN - Budi Santoso</p>
                        <p class="text-xs text-gray-500">1 jam lalu</p>
                    </div>
                    <span class="text-xs font-semibold bg-blue-100 text-blue-700 px-2 py-1 rounded-lg">Dikirim</span>
                </div>
            </div>
        </div>
    </div>
@endsection
