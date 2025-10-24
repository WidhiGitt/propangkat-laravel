@extends('layouts.dashboard')

@section('content')
<div class="px-6 lg:px-16 mt-2space-y-6">
    {{-- HEADER DASHBOARD ADMIN --}}
    <div class="p-6 rounded-xl shadow-md bg-gradient-to-r from-red-600 to-red-500 text-white">
        {{-- Judul & Deskripsi --}}
        <div>
            <h1 class="text-2xl font-bold">Dashboard Administrator</h1>
            <p class="text-sm opacity-90 mt-1">Ringkasan sistem ProPangkat</p>
        </div>
    </div>

        {{-- Info Box 3 kolom --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-6 juastify-center">
            {{-- Box 1 --}}
            </div>
            
            {{-- Box 2 --}}
<div class="px-8 py-6 bg-white min-h-screen text-black">
    <!-- Header -->
    <h1 class="text-2xl font-bold mb-4">Pengelolaan Usulan Kenaikan Pangkat</h1>

    <!-- Tab Menu -->
    <div class="flex mb-6 bg-gray-100 rounded-lg overflow-hidden">
        <button class="w-1/2 px-4 py-2 font-medium text-black bg-white border-b-2 border-blue-500">Inbox Usulan</button>
        <button class="w-1/2 px-4 py-2 font-medium text-gray-500 hover:text-black">Kelola Dokumen</button>
    </div>

    <!-- Statistik Atas -->
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 mb-6">
        <div class="p-4 rounded-lg border border-gray-200 shadow flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-600">Perlu Diproses</p>
                <p class="text-2xl font-bold">0</p>
            </div>
            <div class="bg-blue-100 p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
            </div>
        </div>
        <div class="p-4 rounded-lg border border-gray-200 shadow flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-600">Sedang Diproses</p>
                <p class="text-2xl font-bold">0</p>
            </div>
            <div class="bg-yellow-100 p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3" />
                </svg>
            </div>
        </div>
        <div class="p-4 rounded-lg border border-gray-200 shadow flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-600">Disetujui</p>
                <p class="text-2xl font-bold">0</p>
            </div>
            <div class="bg-green-100 p-3 rounded-full">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
        </div>
    </div>

    <!-- Filter dan Status -->
    <div class="bg-white border border-gray-200 rounded-lg shadow p-5 mb-5">
        <div class="flex flex-col md:flex-row justify-between items-center gap-3 mb-5">
            <div class="flex gap-3 w-full md:w-auto">
                <input type="text" placeholder="Cari nama, NIP..." 
                       class="border border-gray-300 rounded-lg px-3 py-2 text-sm w-full md:w-64 focus:outline-none focus:ring focus:ring-blue-200">
                <select class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring focus:ring-blue-200">
                    <option>Semua Status</option>
                </select>
            </div>
            <button class="bg-gray-200 hover:bg-gray-300 text-black px-4 py-2 rounded-lg text-sm flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582M20 20v-5h-.581M4 9a9 9 0 0116.32-5.906M20 15a9 9 0 01-16.32 5.906" />
                </svg>
                Refresh
            </button>
        </div>

        <!-- Statistik Status -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-5">
            <div class="p-4 bg-blue-100 text-blue-800 rounded-lg text-center font-medium">
                Total Usulan <span class="block text-2xl font-bold">0</span>
            </div>
            <div class="p-4 bg-amber-100 text-amber-800 rounded-lg text-center font-medium">
                Menunggu Tindakan <span class="block text-2xl font-bold">0</span>
            </div>
            <div class="p-4 bg-green-100 text-green-800 rounded-lg text-center font-medium">
                Disetujui <span class="block text-2xl font-bold">0</span>
            </div>
            <div class="p-4 bg-red-100 text-red-800 rounded-lg text-center font-medium">
                Ditolak <span class="block text-2xl font-bold">0</span>
            </div>
        </div>

        <!-- Empty State -->
        <div class="text-center py-10 text-gray-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 mb-3 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            <p>Tidak ada usulan yang ditemukan</p>
            <button class="mt-4 px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-lg text-sm">Reset Filter</button>
        </div>
    </div>
</div>

@endsection
