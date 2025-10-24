@extends('layouts.dashboard')

@section('content')

    <!-- Konten Utama -->
    <main class="space-y-6 py-6 max-w-7xl mx-auto px-6 lg:px-16 mt-2">

        <!-- Header -->
    <div class="p-6 bg-gradient-to-r from-purple-400 via-purple-500 to-indigo-700 rounded-lg shadow text-white">
            <h1 class="text-2xl font-bold">Timeline Kenaikan Pangkat</h1>
            <p class="mt-1 text-sm opacity-90">
                Jadwal dan tahapan proses kenaikan pangkat
            </p>
            <div class="mt-3 p-3 bg-white/20 rounded-lg text-sm flex items-center justify-between">
                <span>Daftar jadwal kenaikan pangkat</span>
            </div>
        </div>

<!-- Periode Kenaikan Pangkat -->
<div class="bg-white border border-gray-200 rounded-xl shadow-md p-5 mb-6">
  <div class="flex flex-wrap justify-between items-start mb-3">
    <div>
      <h3 class="text-lg font-semibold text-gray-800">Periode Kenaikan Pangkat</h3>
      <p class="text-gray-500 text-sm">Timeline waktu pengusulan kenaikan pangkat</p>
    </div>
    <div class="flex items-center gap-2">
      <label class="flex items-center gap-2 text-sm text-gray-700">
        <input type="checkbox" class="w-4 h-4 accent-blue-600" checked> Auto Refresh
      </label>
      <span class="text-gray-500 text-sm">Diperbarui: 09:56:23 AM</span>
      <button class="border border-gray-300 rounded-lg px-2 py-1 hover:bg-gray-100">⟳</button>
    </div>
  </div>

  <!-- Card Periode -->
  <div class="border border-gray-300 rounded-lg p-4 flex flex-col md:flex-row justify-between items-start md:items-center gap-3">
    <div>
      <h4 class="font-semibold text-gray-800">Periode Kenaikan Pangkat Agustus 2025</h4>
      <p class="text-gray-500 text-sm">Periode kenaikan pangkat reguler untuk bulan Agustus 2025</p>
    </div>
    <div class="flex flex-wrap gap-4 text-sm">
      <div class="flex flex-col">
        <span class="text-gray-500">Jenis Jabatan</span>
        <span class="font-medium text-gray-800">Semua Jabatan</span>
      </div>
      <div class="flex flex-col">
        <span class="text-gray-500">Periode Waktu</span>
        <span class="font-medium text-gray-800">1 Agustus 2025 - 31 Agustus 2025</span>
      </div>
    </div>
    <span class="bg-gray-200 text-gray-800 px-3 py-1 rounded-lg text-sm font-medium">Normal</span>
  </div>
</div>

<!-- Status Pengajuan -->
<div class="bg-green-50 border border-green-300 rounded-xl shadow p-4 mb-6 flex items-center justify-between flex-wrap gap-3">
  <div class="flex items-center gap-2">
    <span class="text-green-600 text-xl">✔</span>
    <p class="text-green-800 font-medium">Periode Pengajuan Sedang Aktif</p>
  </div>
  <p class="text-green-700 text-sm">Anda dapat mengajukan usulan kenaikan pangkat hingga <strong>31 Maret 2025</strong></p>
</div>

<!-- Tahapan Proses -->
<div class="bg-white border border-gray-200 rounded-xl shadow-md p-5">
  <h3 class="text-lg font-semibold text-gray-800 mb-4">Tahapan Proses Kenaikan Pangkat</h3>

  <div class="border border-gray-300 rounded-lg p-4 flex flex-wrap justify-between items-start md:items-center gap-3">
    <div>
      <h4 class="font-semibold text-gray-800">Periode Pengajuan Kenaikan Pangkat Agustus 2025</h4>
      <p class="text-gray-500 text-sm">Tahapan awal proses kenaikan pangkat</p>
    </div>
    <span class="bg-green-200 text-green-800 px-3 py-1 rounded-lg text-sm font-medium">Aktif</span>
  </div>
</div>
</div>
@endsection