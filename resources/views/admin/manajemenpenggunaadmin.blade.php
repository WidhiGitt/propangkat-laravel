@extends('layouts.dashboard')

@section('content')
<div class="px-6 lg:px-16 mt-2 space-y-6">

    {{-- Header Merah --}}
    <div class="bg-gradient-to-r from-red-600 to-red-500 rounded-xl p-6 text-white">
        <div class="flex items-center gap-3 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0zM12 20h.01" />
            </svg>
            <div>
                <h1 class="text-xl font-semibold">Manajemen Pengguna</h1>
                <p class="text-sm opacity-90">Total 0 pengguna terdaftar</p>
            </div>
        </div>
        <div class="bg-red-500/60 p-3 rounded-lg text-sm">
            Ini adalah halaman untuk manajemen pengguna. Anda dapat menambah, mengedit, atau menghapus pengguna.
        </div>
    </div>

    {{-- Filter & Pencarian --}}
    <div class="bg-white rounded-xl p-5 border border-gray-300">
        <h2 class="text-gray-900 text-base font-semibold mb-4">Filter & Pencarian</h2>
        <div class="flex flex-col md:flex-row items-start md:items-center gap-3">
            <input type="text" placeholder="Cari nama atau NIP..."
                class="w-full md:w-1/3 px-4 py-2 rounded-lg bg-white border border-gray-300 text-gray-800 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500">

            <select
                class="w-full md:w-1/4 px-4 py-2 rounded-lg bg-white border border-gray-300 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option>Semua Role</option>
            </select>

            <select
                class="w-full md:w-1/4 px-4 py-2 rounded-lg bg-white border border-gray-300 text-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option>Semua Wilayah</option>
            </select>
        </div>
    </div>

    {{-- Daftar Pengguna --}}
    <div class="bg-white rounded-xl p-5 border border-gray-300">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-gray-900 text-base font-semibold">Daftar Pengguna</h2>
            <div class="flex items-center gap-2">
                <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 text-sm px-4 py-2 rounded-lg transition">
                    Ekspor Data
                </button>
                <button class="bg-blue-600 hover:bg-blue-500 text-white text-sm px-4 py-2 rounded-lg flex items-center gap-2 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 4v16m8-8H4" />
                    </svg>
                    Tambah Pengguna
                </button>
            </div>
        </div>

        {{-- Tabel --}}
        <div class="overflow-x-auto">
            <table class="w-full text-left text-sm text-gray-800">
                <thead class="bg-gray-100 text-gray-600 uppercase text-xs">
                    <tr>
                        <th class="px-4 py-3">No</th>
                        <th class="px-4 py-3">Nama / NIP</th>
                        <th class="px-4 py-3">Role</th>
                        <th class="px-4 py-3">Unit Kerja</th>
                        <th class="px-4 py-3">Wilayah</th>
                        <th class="px-4 py-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="6" class="px-4 py-6 text-center text-gray-500 italic">
                            Tidak ada data pengguna yang sesuai dengan filter
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
