@extends('layouts.dashboard')

@section('content')
    <!-- Konten Utama -->
    <main class="space-y-6 py-6 max-w-7xl mx-auto px-6 lg:px-16 mt-2">

        <!-- Header Halaman -->
        <div class="p-6 bg-gradient-to-r from-purple-400 via-purple-500 to-indigo-700 rounded-lg shadow text-white">
            <h1 class="text-2xl font-bold">Laporan Operator Sekolah</h1>
            <p class="mt-1 text-sm opacity-90">
                Laporan aktivitas dan usulan operator sekolah
            </p>
            <div class="mt-3 p-3 bg-white/20 rounded-lg text-sm flex items-center justify-between">
                <span>Semua aktivitas laporan</span>
            </div>
        </div>

        <!-- Statistik Ringkas -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white border border-gray-200 rounded-xl shadow-md p-5">
                <h4 class="text-gray-500 text-sm mb-1">Total Laporan</h4>
                <p class="text-2xl font-bold text-gray-800">0</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl shadow-md p-5">
                <h4 class="text-gray-500 text-sm mb-1">Laporan Bulan Ini</h4>
                <p class="text-2xl font-bold text-gray-800">0</p>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl shadow-md p-5">
                <h4 class="text-gray-500 text-sm mb-1">Operator Aktif</h4>
                <p class="text-2xl font-bold text-gray-800">0</p>
            </div>
        </div>

        <!-- Filter & Pencarian -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-md p-5 w-full">
            <h4 class="text-lg font-semibold mb-4 text-gray-800">Filter & Pencarian</h4>
            <div class="flex flex-wrap gap-3 w-full">
                <!-- Input Search -->
                <input 
                    type="text" 
                    placeholder="Cari nama atau unit kerja..." 
                    class="border border-gray-300 rounded-lg px-4 py-2 w-full md:w-1/3 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >

                <!-- Pilih Jenis Laporan -->
                <select 
                    class="border border-gray-300 rounded-lg px-4 py-2 w-full md:w-1/4 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>Semua Jenis Laporan</option>
                    <option>Laporan Kenaikan Pangkat</option>
                    <option>Laporan Usulan</option>
                    <option>Laporan Aktivitas</option>
                </select>

                <!-- Pilih Periode -->
                <input 
                    type="month" 
                    class="border border-gray-300 rounded-lg px-4 py-2 w-full md:w-1/4 focus:outline-none focus:ring-2 focus:ring-blue-500"
                >

                <!-- Tombol Reset & Export -->
                <button class="border border-gray-300 rounded-lg px-4 py-2 hover:bg-gray-100 flex items-center gap-2">
                    ⟳ Reset
                </button>
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition flex items-center gap-2">
                    ⬇ Export
                </button>
            </div>
        </div>

        <!-- Tabel Laporan -->
        <div class="bg-white border border-gray-200 rounded-xl shadow-md p-5 mb-6">
            <div class="flex justify-between items-center mb-4 flex-wrap gap-3">
                <div>
                    <h4 class="text-lg font-semibold text-gray-800">Daftar Laporan</h4>
                    <p class="text-gray-500 text-sm">Menampilkan data laporan operator sekolah</p>
                </div>
                <span class="text-gray-600 text-sm">Total: 0 Laporan</span>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200 rounded-lg overflow-hidden">
                    <thead class="bg-gray-100 text-gray-700 text-sm">
                        <tr>
                            <th class="px-4 py-2 text-left">No</th>
                            <th class="px-4 py-2 text-left">Nama Operator</th>
                            <th class="px-4 py-2 text-left">Unit Kerja</th>
                            <th class="px-4 py-2 text-left">Jenis Laporan</th>
                            <th class="px-4 py-2 text-left">Tanggal</th>
                            <th class="px-4 py-2 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700 text-sm">
                        <tr>
                            <td class="px-4 py-3 text-center" colspan="6">Belum ada laporan</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
@endsection