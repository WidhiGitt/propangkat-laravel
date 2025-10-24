@extends('layouts.dashboard')

@section('content')
{{-- HEADER DASHBOARD ADMIN --}}
<div class="px-6 lg:px-16 mt-2">
    <div class="p-6 rounded-xl shadow-md bg-gradient-to-r from-red-600 to-red-500 text-white">
        {{-- Judul & Deskripsi --}}
        <div>
            <h1 class="text-2xl font-bold">Dashboard Administrator</h1>
            <p class="text-sm opacity-90 mt-1">Ringkasan sistem ProPangkat</p>
        </div>

        {{-- Info Box 3 kolom --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
            {{-- Box 1 --}}
            <div class="flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-lg px-5 py-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0-1.1-.9-2-2-2s-2 .9-2 2 .9 2 2 2 2-.9 2-2z M2 12c0 5.5 4.5 10 10 10s10-4.5 10-10S17.5 2 12 2 2 6.5 2 12z" />
                </svg>
                <div>
                    <p class="text-sm opacity-80">Sistem Status</p>
                    <p class="text-lg font-semibold">Optimal</p>
                </div>
            </div>

            {{-- Box 2 --}}
            <div class="flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-lg px-5 py-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a8 8 0 10-16 0v2h5m2 0v-2" />
                </svg>
                <div>
                    <p class="text-sm opacity-80">Active Users</p>
                    <p class="text-lg font-semibold">2,234</p>
                </div>
            </div>

            {{-- Box 3 --}}
            <div class="flex items-center gap-3 bg-white/10 backdrop-blur-sm rounded-lg px-5 py-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white/80" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <div>
                    <p class="text-sm opacity-80">Timeline Active</p>
                    <p class="text-lg font-semibold">Agustus 2025</p>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- STATISTIK ATAS --}}
<div class="px-6 lg:px-16 mt-6 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4">
    <div class="bg-white p-6 rounded-lg shadow border relative">
        <span class="absolute top-2 right-3 text-green-600 text-xs font-semibold">+12%</span>
        <p class="text-gray-500 text-sm">Total Usulan</p>
        <h1 class="text-3xl font-bold mt-1">1,247</h1>
        <p class="text-xs text-gray-400 mt-2">+12% dari bulan lalu</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow border relative">
        <span class="absolute top-2 right-3 bg-orange-100 text-orange-600 text-xs font-semibold px-2 py-0.5 rounded">Urgent</span>
        <p class="text-gray-500 text-sm">Perlu Verifikasi</p>
        <h1 class="text-3xl font-bold mt-1">89</h1>
        <p class="text-xs text-gray-400 mt-2">Butuh perhatian</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow border relative">
        <span class="absolute top-2 right-3 text-green-600 text-xs font-semibold">+5%</span>
        <p class="text-gray-500 text-sm">Total Pengguna</p>
        <h1 class="text-3xl font-bold mt-1">2,456</h1>
        <p class="text-xs text-gray-400 mt-2">2,234 aktif</p>
    </div>
    <div class="bg-white p-6 rounded-lg shadow border relative">
        <span class="absolute top-2 right-3 text-green-600 text-xs font-semibold">+18%</span>
        <p class="text-gray-500 text-sm">Disetujui</p>
        <h1 class="text-3xl font-bold mt-1">892</h1>
        <p class="text-xs text-gray-400 mt-2">Berhasil diproses</p>
    </div>
</div>

{{-- Statistik & Notifikasi --}}
<div class="px-6 lg:px-16 mt-8 grid grid-cols-1 lg:grid-cols-2 gap-6">
    {{-- Statistik OPD --}}
    <div class="bg-white p-6 rounded-lg shadow border">
        <h2 class="text-lg font-bold mb-4">📊 Statistik Usulan per OPD</h2>

        @php
            $stats = [
                ['name' => 'Dinas Pendidikan', 'val' => 132, 'max' => 156, 'percent' => 85],
                ['name' => 'Dinas Kesehatan', 'val' => 96, 'max' => 134, 'percent' => 72],
                ['name' => 'BKPSDM', 'val' => 52, 'max' => 98, 'percent' => 53],
                ['name' => 'Diskominfo', 'val' => 41, 'max' => 87, 'percent' => 47],
                ['name' => 'Bagian Hukum', 'val' => 31, 'max' => 76, 'percent' => 41],
            ];
        @endphp

        @foreach($stats as $item)
        <div class="mb-4">
            <div class="flex justify-between text-sm mb-1">
                <span>{{ $item['name'] }}</span>
                <span class="text-gray-500">{{ $item['val'] }}/{{ $item['max'] }} verified</span>
            </div>
            <div class="bg-gray-200 h-2 rounded-full">
                <div class="bg-blue-500 h-2 rounded-full" style="width: {{ $item['percent'] }}%"></div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Notifikasi --}}
    <div class="bg-white p-6 rounded-lg shadow border">
        <h2 class="text-lg font-bold mb-4">🔔 Notifikasi Pending</h2>
        <div class="space-y-3">
            <div class="flex items-center justify-between p-3 bg-gray-50 border rounded-lg">
                <div>
                    <p class="font-semibold text-sm">89 usulan perlu verifikasi</p>
                    <p class="text-xs text-gray-500">Menunggu tindakan operator</p>
                </div>
                <button class="bg-indigo-600 text-white text-xs px-3 py-1 rounded hover:bg-indigo-700">Lihat</button>
            </div>
            <div class="flex items-center justify-between p-3 bg-gray-50 border rounded-lg">
                <div>
                    <p class="font-semibold text-sm">Timeline akan berakhir</p>
                    <p class="text-xs text-gray-500">12 hari tersisa untuk pengusulan</p>
                </div>
                <button class="bg-green-600 text-white text-xs px-3 py-1 rounded hover:bg-green-700">Perpanjang</button>
            </div>
            <div class="flex items-center justify-between p-3 bg-gray-50 border rounded-lg">
                <div>
                    <p class="font-semibold text-sm">Backup otomatis berhasil</p>
                    <p class="text-xs text-gray-500">Terakhir: 08 Jan 2025, 02:00</p>
                </div>
                <button class="bg-gray-200 text-gray-800 text-xs px-3 py-1 rounded hover:bg-gray-300">Detail</button>
            </div>
        </div>
    </div>
</div>

{{-- System Health --}}
<div class="px-6 lg:px-16 mt-8">
    <div class="bg-white p-6 rounded-lg shadow border">
        <h2 class="text-lg font-bold mb-6">🩺 System Health Monitor</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            @php
                $health = [
                    ['label' => 'Server Performance', 'val' => 98, 'status' => 'Excellent', 'color' => 'text-green-600'],
                    ['label' => 'Database Health', 'val' => 95, 'status' => 'Good', 'color' => 'text-blue-600'],
                    ['label' => 'API Response Time', 'val' => 87, 'status' => 'Good', 'color' => 'text-indigo-600'],
                    ['label' => 'User Satisfaction', 'val' => 92, 'status' => 'Excellent', 'color' => 'text-green-600'],
                ];
            @endphp

            @foreach($health as $h)
            <div>
                <div class="text-4xl font-bold {{ $h['color'] }}">{{ $h['val'] }}%</div>
                <p class="text-sm text-gray-600">{{ $h['label'] }}</p>
                <p class="text-xs text-gray-400">{{ $h['status'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

{{-- Quick Actions --}}
<div class="px-6 lg:px-16 mt-8 mb-10">
    <h2 class="text-lg font-bold mb-4">⚡ Quick Actions</h2>
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
        @php
            $actions = ['Kelola Pengguna', 'Timeline KAPE', 'Inbox Usulan', 'Laporan', 'Notifikasi', 'Pengaturan'];
        @endphp
        @foreach($actions as $a)
        <div class="bg-white rounded-lg shadow border p-4 text-center hover:bg-gray-50 cursor-pointer transition">
            <div class="text-indigo-600 mb-2 text-2xl">⚙️</div>
            <p class="text-sm font-semibold">{{ $a }}</p>
        </div>
        @endforeach
    </div>
</div>
@endsection