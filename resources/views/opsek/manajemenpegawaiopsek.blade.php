@extends('layouts.dashboard')

@section('content')

  <!-- Konten Utama -->
  <main class="space-y-6 py-6 max-w-7xl mx-auto px-6 lg:px-16 mt-2">

    <!-- Header -->
    <div class="p-6 bg-gradient-to-r from-purple-400 via-purple-500 to-indigo-700 rounded-lg shadow text-white">
            <h1 class="text-2xl font-bold">Manajemen Pegawai</h1>
            <p class="mt-1 text-sm opacity-90">
                Kelola data pegawai di unit kerja Anda
            </p>
            <div class="mt-3 p-3 bg-white/20 rounded-lg text-sm flex items-center justify-between">
                <span>Ada <strong>23</strong> usulan yang perlu segera diverifikasi</span>
            </div>
        </div>

    <!-- Kartu Statistik -->
    <div class="grid grid-cols-3 gap-6 mb-8">
      <div class="bg-white border border-gray-200 shadow rounded-lg p-5">
        <p class="text-gray-600 text-sm">Total Pegawai</p>
        <h3 class="text-2xl font-bold">0</h3>
      </div>
      <div class="bg-white border border-gray-200 shadow rounded-lg p-5">
        <p class="text-gray-600 text-sm">PNS</p>
        <h3 class="text-2xl font-bold">0</h3>
      </div>
      <div class="bg-white border border-gray-200 shadow rounded-lg p-5">
        <p class="text-gray-600 text-sm">PPPK</p>
        <h3 class="text-2xl font-bold">0</h3>
      </div>
    </div>

    <!-- Filter & Pencarian -->
    <div class="bg-white border border-gray-200 rounded-xl shadow-md p-5 w-full">
    <h4 class="text-lg font-semibold mb-4 text-gray-800">Filter & Pencarian</h4>
    <div class="flex flex-wrap gap-3 w-full">
        <!-- Input Search -->
        <input 
        type="text" 
        placeholder="Cari nama atau NIP..." 
        class="border border-gray-300 rounded-lg px-4 py-2 flex-grow min-w-[200px] focus:outline-none focus:ring-2 focus:ring-blue-500"
        >

    <!-- Select Status -->
    <select 
      class="border border-gray-300 rounded-lg px-4 py-2 flex-grow min-w-[150px] focus:outline-none focus:ring-2 focus:ring-blue-500">
      <option>Semua Status</option>
      <option>PNS</option>
      <option>PPPK</option>
    </select>

    <!-- Tombol Refresh -->
    <button class="border border-gray-300 rounded-lg px-4 py-2 hover:bg-gray-100 flex items-center gap-1">
      ⟳
    </button>

    <!-- Tombol Tambah -->
    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition whitespace-nowrap">
      + Tambah Pegawai
    </button>
  </div>
</div>




    <!-- Tabel Data Pegawai -->
    <div class="bg-white border border-gray-200 rounded-lg shadow p-5">
      <div class="flex justify-between items-center mb-4">
        <h4 class="font-semibold">Data Pegawai</h4>
        <div class="flex gap-2">
          <button class="border border-gray-300 rounded-lg px-4 py-2 hover:bg-gray-100">Import</button>
          <button class="border border-gray-300 rounded-lg px-4 py-2 hover:bg-gray-100">Ekspor Data</button>
        </div>
      </div>

      <div class="overflow-x-auto">
        <table class="w-full border-collapse">
          <thead>
            <tr class="bg-gray-100 text-left text-sm font-medium">
              <th class="px-4 py-2 border-b">NIP</th>
              <th class="px-4 py-2 border-b">Nama</th>
              <th class="px-4 py-2 border-b">Jabatan</th>
              <th class="px-4 py-2 border-b">Golongan</th>
              <th class="px-4 py-2 border-b">Status</th>
              <th class="px-4 py-2 border-b">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="6" class="text-center py-6 text-gray-500">
                Tidak ada data pegawai ditemukan
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </main>
  @endsection