@extends('layouts.dashboard')

@section('content')
    <!-- Section Header Welcome -->
    <div class="px-16 mt-2">
        <div class="p-6 bg-gradient-to-r from-blue-500 via-cyan-500 to-green-300 rounded-xl shadow-md text-white">
            <h1 class="text-2xl font-bold">Selamat Datang, Ahmad Wijaya!</h1>
            <p class="text-sm opacity-90 mt-1">Dashboard Kenaikan Pangkat Periode Agustus 2025</p>
            <div class="mt-4 flex items-center">
                <div class="flex items-center w-full bg-white/10 border border-green-300 rounded-lg px-4 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-green-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-sm font-medium">Selamat! Anda dapat mengajukan Kenaikan Pangkat Periode Agustus 2025</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 4 Box Stats -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 px-16 mt-8">
        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition">
            <h2 class="text-gray-600 font-semibold mb-2">Usulan Aktif</h2>
            <p class="text-4xl font-bold text-gray-800">2</p>
            <p class="text-sm text-gray-500 mt-1">Usulan yang sedang diproses</p>
        </div>
        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition">
            <h2 class="text-gray-600 font-semibold mb-2">Menunggu Perbaikan</h2>
            <p class="text-4xl font-bold text-gray-800">1</p>
            <p class="text-sm text-gray-500 mt-1">Dokumen perlu diperbaiki</p>
        </div>
        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition">
            <h2 class="text-gray-600 font-semibold mb-2">Disetujui</h2>
            <p class="text-4xl font-bold text-gray-800">3</p>
            <p class="text-sm text-gray-500 mt-1">Usulan yang telah disetujui</p>
        </div>
        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition">
            <h2 class="text-gray-600 font-semibold mb-2">Deadline</h2>
            <p class="text-4xl font-bold text-gray-800">15 Hari</p>
            <p class="text-sm text-gray-500 mt-1">Sisa waktu pengusulan</p>
        </div>
    </div>

    <!-- Section Activity & Aksi Cepat -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 px-16 mt-8">
        <!-- Aktivitas Terbaru -->
        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
            <h2 class="text-xl font-bold text-gray-800">Aktivitas Terbaru</h2>
            <p class="text-sm text-gray-500 mb-4">Update terbaru dari usulan kenaikan pangkat Anda</p>

            <div class="space-y-3">
                <div class="p-3 bg-gray-50 rounded-lg border flex justify-between items-center">
                    <span class="text-sm text-gray-700 font-medium">Dokumen SK Kenaikan Pangkat Terakhir</span>
                    <span class="text-xs px-3 py-1 bg-red-100 text-red-600 rounded-full">Perlu Perbaikan</span>
                </div>
                <div class="p-3 bg-gray-50 rounded-lg border flex justify-between items-center">
                    <span class="text-sm text-gray-700 font-medium">Usulan Kenaikan Pangkat Periode Agustus 2025</span>
                    <span class="text-xs px-3 py-1 bg-blue-100 text-blue-600 rounded-full">Sedang Diverifikasi</span>
                </div>
                <div class="p-3 bg-gray-50 rounded-lg border flex justify-between items-center">
                    <span class="text-sm text-gray-700 font-medium">Penilaian Kinerja Pegawai 2023</span>
                    <span class="text-xs px-3 py-1 bg-green-100 text-green-600 rounded-full">Disetujui</span>
                </div>
            </div>
        </div>

        <!-- Aksi Cepat -->
        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
            <h2 class="text-xl font-bold text-gray-800">Aksi Cepat</h2>
            <p class="text-sm text-gray-500 mb-4">Fitur yang sering digunakan</p>

            <div class="space-y-3">
                <div class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition cursor-pointer">
                    <div class="w-10 h-10 flex items-center justify-center bg-blue-500 text-white rounded-lg mr-3">
                        <i class="fas fa-file"></i>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-800">Input Usulan Baru</h3>
                        <p class="text-xs text-gray-500">Buat usulan kenaikan pangkat baru</p>
                    </div>
                </div>

                <div class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition cursor-pointer">
                    <div class="w-10 h-10 flex items-center justify-center bg-green-500 text-white rounded-lg mr-3">
                        <i class="fas fa-calendar"></i>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-800">Lihat Timeline</h3>
                        <p class="text-xs text-gray-500">Pantau jadwal kenaikan pangkat</p>
                    </div>
                </div>

                <div class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition cursor-pointer">
                    <div class="w-10 h-10 flex items-center justify-center bg-purple-500 text-white rounded-lg mr-3">
                        <i class="fas fa-history"></i>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-800">Riwayat Usulan</h3>
                        <p class="text-xs text-gray-500">Lihat semua usulan sebelumnya</p>
                    </div>
                </div>

                <div class="flex items-center p-3 bg-gray-50 rounded-lg hover:bg-gray-100 transition cursor-pointer">
                    <div class="w-10 h-10 flex items-center justify-center bg-orange-500 text-white rounded-lg mr-3">
                        <i class="fas fa-history"></i>
                    </div>
                    <div>
                        <h3 class="text-sm font-semibold text-gray-800">Riwayat Usulan</h3>
                        <p class="text-xs text-gray-500">Lihat semua usulan sebelumnya</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
