@extends('layouts.dashboard')

@section('content')

  <!-- Konten Utama -->
  <main class="space-y-6 py-6 max-w-7xl mx-auto px-6 lg:px-16 mt-2">

    <!-- Header -->
    <div class="p-6 bg-gradient-to-r from-purple-400 via-purple-500 to-indigo-700 rounded-lg shadow text-white">
            <h1 class="text-2xl font-bold">Usulan Kenaikan Pangkat</h1>
            <p class="mt-1 text-sm opacity-90">
                Kelola usulan kenaikan pangkat pegawai di unit kerja Anda
            </p>
            <div class="mt-3 p-3 bg-white/20 rounded-lg text-sm flex items-center justify-between">
                <span>Ada <strong>23</strong> usulan yang perlu segera diverifikasi</span>
            </div>
        </div>

    <!-- Kartu Statistik -->
    <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 gap-4 mb-6">
      <div class="bg-white border border-gray-200 shadow rounded-lg p-5">
        <p class="text-gray-600 text-sm">Total Usulan</p>
        <h3 class="text-2xl font-bold">0</h3>
      </div>
      <div class="bg-white border border-gray-200 shadow rounded-lg p-5">
        <p class="text-gray-600 text-sm">Menunggu</p>
        <h3 class="text-2xl font-bold">0</h3>
      </div>
      <div class="bg-white border border-gray-200 shadow rounded-lg p-5">
        <p class="text-gray-600 text-sm">Diproses</p>
        <h3 class="text-2xl font-bold">0</h3>
      </div>
      <div class="bg-white border border-gray-200 shadow rounded-lg p-5">
        <p class="text-gray-600 text-sm">Disetujui</p>
        <h3 class="text-2xl font-bold">0</h3>
      </div>
      <div class="bg-white border border-gray-200 shadow rounded-lg p-5">
        <p class="text-gray-600 text-sm">Ditolak</p>
        <h3 class="text-2xl font-bold">0</h3>
      </div>
    </div>

<!-- Filter dan Pencarian -->
<div class="bg-white border border-gray-200 rounded-xl shadow-md p-5 w-full mb-6">
  <h4 class="text-lg font-semibold mb-3 text-gray-800">Filter dan Pencarian</h4>
  <div class="flex flex-wrap gap-3 w-full">
    <!-- Input Search -->
    <input 
      type="text" 
      placeholder="Cari berdasarkan nama, NIP, atau unit kerja..." 
      class="border border-gray-300 rounded-lg px-4 py-2 w-full md:flex-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
    >

    <!-- Select Status -->
    <select 
      class="border border-gray-300 rounded-lg px-4 py-2 w-full md:w-1/4 focus:outline-none focus:ring-2 focus:ring-blue-500">
      <option>Semua Status</option>
      <option>Menunggu</option>
      <option>Diproses</option>
      <option>Disetujui</option>
      <option>Ditolak</option>
    </select>

    <!-- Tombol Refresh -->
    <button class="border border-gray-300 rounded-lg px-4 py-2 hover:bg-gray-100 flex items-center justify-center gap-1">
      ⟳
    </button>

    <!-- Tombol Export -->
    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition">
      Ekspor Data
    </button>
  </div>
</div>

<!-- Daftar Usulan Kenaikan Pangkat -->
<div class="bg-white border border-gray-200 rounded-xl shadow-md p-5 w-full">
  <h4 class="text-lg font-semibold mb-3 text-gray-800">Daftar Usulan Kenaikan Pangkat</h4>
  <div class="overflow-x-auto">
    <table class="w-full text-left border-collapse">
      <thead class="bg-gray-100">
        <tr>
          <th class="px-4 py-2 font-medium text-gray-700 border-b">Pegawai</th>
          <th class="px-4 py-2 font-medium text-gray-700 border-b">Jabatan</th>
          <th class="px-4 py-2 font-medium text-gray-700 border-b">Unit Kerja</th>
          <th class="px-4 py-2 font-medium text-gray-700 border-b">Kenaikan</th>
          <th class="px-4 py-2 font-medium text-gray-700 border-b">Status</th>
          <th class="px-4 py-2 font-medium text-gray-700 border-b">Tanggal</th>
          <th class="px-4 py-2 font-medium text-gray-700 border-b text-center">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="7" class="px-4 py-4 text-center text-gray-500">
            Belum ada usulan kenaikan pangkat
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection