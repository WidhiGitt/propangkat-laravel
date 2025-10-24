@extends('layouts.dashboard')

@section('content')
<div class="px-6 py-6">
    <h1 class="text-2xl font-bold mb-4 text-gray-900">📊 Laporan Aktivitas</h1>

    {{-- Filter --}}
    <div class="bg-white p-4 rounded-lg shadow mb-4 flex flex-col md:flex-row gap-3 md:items-center justify-between">
        <div class="flex flex-col md:flex-row gap-3">
            <input type="text" placeholder="Cari nama atau aksi..." 
                   class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="date" class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <input type="date" class="border border-gray-300 rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div class="flex gap-2">
            <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition">
                Filter
            </button>
            <a href="{{ route('laporan.export.pdf') }}" 
               class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-lg transition">
                Export PDF
            </a>
        </div>
    </div>

    {{-- Tabel Aktivitas --}}
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="w-full text-left">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="px-4 py-3 font-semibold text-gray-800">#</th>
                    <th class="px-4 py-3 font-semibold text-gray-800">Nama Pengguna</th>
                    <th class="px-4 py-3 font-semibold text-gray-800">Aksi</th>
                    <th class="px-4 py-3 font-semibold text-gray-800">Waktu</th>
                </tr>
            </thead>
            <tbody>
                @forelse($logs as $index => $log)
                <tr class="border-b hover:bg-gray-50 transition">
                    <td class="px-4 py-3">{{ $index + 1 }}</td>
                    <td class="px-4 py-3">{{ $log->user->name }}</td>
                    <td class="px-4 py-3">{{ $log->action }}</td>
                    <td class="px-4 py-3">{{ $log->created_at->format('d M Y H:i') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="px-4 py-6 text-center text-gray-500">
                        Tidak ada aktivitas yang ditemukan.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection