@extends('layouts.dashboard')

@section('content')
    <!-- Section Header Welcome -->
    <div class="px-16 mt-2">
        <div class="p-6 bg-gradient-to-r from-blue-500 via-cyan-500 to-green-300 rounded-xl shadow-md text-white">
            <h1 class="text-2xl font-bold">Riwayat Usulan Kenaikan Pangkat</h1>
            <p class="text-sm opacity-90 mt-1">Pantau status dan riwayat semua usulan Anda</p>
            <div class="mt-4 flex items-center">
                <div class="flex items-center w-full bg-white/10 border border-green-300 rounded-lg px-4 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-green-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-sm font-medium">Anda dapat melihat detail, mengunduh dokumen, atau menarik kembali usulan yang masih dalam proses</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Filter & Pencarian --}}
    <div class="px-6 lg:px-16 mt-6">
        <div class="bg-white p-6 rounded-lg shadow border border-gray-200">
            <h2 class="text-xl font-semibold mb-4">Filter & Pencarian</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                    <label class="block text-sm font-semibold mb-2">Pencarian</label>
                    <input type="text" placeholder="Cari ID usulan, periode, atau jenis jabatan..."
                        class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Status Usulan</label>
                    <select class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-400 focus:outline-none">
                        <option>Semua Status</option>
                        <option>Menunggu Verifikasi</option>
                        <option>Disetujui</option>
                        <option>Ditolak</option>
                        <option>Perlu Perbaikan</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold mb-2">Aksi</label>
                    <button class="w-full border border-gray-300 rounded-lg px-3 py-2 hover:bg-gray-100 flex items-center justify-center gap-2">
                        ⬇ Export Data
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Daftar Usulan --}}
    <div class="px-6 lg:px-16 mt-6 space-y-4">
        {{-- Card 1 --}}
        <div class="bg-white rounded-lg shadow p-5 border border-gray-200 flex flex-col md:flex-row justify-between gap-4">
            <div>
                <h2 class="text-lg font-bold">USL-2025-001</h2>
                <p class="text-sm text-gray-600">Periode: Agustus 2025</p>
                <p class="text-sm text-gray-600">Jenis: Struktural</p>
                <p class="text-sm text-gray-600">III/c → III/d</p>
            </div>

            <div class="flex flex-col justify-center">
                <span class="text-blue-600 font-semibold">Sedang Diverifikasi</span>
                <div class="mt-2 w-40 bg-gray-200 rounded-full h-2">
                    <div class="bg-blue-500 h-2 rounded-full" style="width: 60%"></div>
                </div>
                <p class="text-xs text-gray-500 mt-1">Progress 60% (8/10 dokumen)</p>
                <p class="text-xs text-gray-500">Submit: 2025-01-15</p>
                <p class="text-xs text-gray-500">Estimasi: 2025-02-15</p>
            </div>

            <div class="flex flex-col gap-2">
                <button class="border border-gray-300 rounded-lg px-4 py-2 hover:bg-gray-100 flex justify-center items-center gap-2">
                    👁 Detail
                </button>
                <button class="border border-gray-300 rounded-lg px-4 py-2 hover:bg-gray-100 flex justify-center items-center gap-2">
                    ⬇ Download
                </button>
                <button class="bg-red-600 text-white rounded-lg px-4 py-2 hover:bg-red-500 flex justify-center items-center gap-2">
                    ↩ Tarik Usulan
                </button>
            </div>
        </div>

        {{-- Card 2 --}}
        <div class="bg-white rounded-lg shadow p-5 border border-gray-200 flex flex-col md:flex-row justify-between gap-4">
            <div>
                <h2 class="text-lg font-bold">USL-2024-089</h2>
                <p class="text-sm text-gray-600">Periode: Februari 2024</p>
                <p class="text-sm text-gray-600">Jenis: Fungsional</p>
                <p class="text-sm text-gray-600">III/b → III/c</p>
            </div>

            <div class="flex flex-col justify-center">
                <span class="text-green-600 font-semibold">Disetujui</span>
                <div class="mt-2 w-40 bg-gray-200 rounded-full h-2">
                    <div class="bg-green-500 h-2 rounded-full" style="width: 100%"></div>
                </div>
                <p class="text-xs text-gray-500 mt-1">Progress 100% (12/12 dokumen)</p>
                <p class="text-xs text-gray-500">Submit: 2024-02-10</p>
                <p class="text-xs text-gray-500">Estimasi: 2024-03-15</p>
            </div>

            <div class="flex flex-col gap-2">
                <button class="border border-gray-300 rounded-lg px-4 py-2 hover:bg-gray-100 flex justify-center items-center gap-2">
                    👁 Detail
                </button>
                <button class="border border-gray-300 rounded-lg px-4 py-2 hover:bg-gray-100 flex justify-center items-center gap-2">
                    ⬇ Download
                </button>
            </div>
        </div>
    </div>
@endsection