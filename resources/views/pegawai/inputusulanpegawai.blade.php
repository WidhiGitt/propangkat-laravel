@extends('layouts.dashboard')

@section('content')
<div x-data="{ step: {{ session('step', 1) }} }" class="px-8 lg:px-16 mt-4 space-y-6">

   <!-- Section Header Welcome -->
    <div class="px-0 mt-2">
        <div class="p-6 bg-gradient-to-r from-blue-500 via-cyan-500 to-green-300 rounded-xl shadow-md text-white">
            <h1 class="text-2xl font-bold">Input Usulan Kenaikan Pangkat</h1>
            <p class="text-sm opacity-90 mt-1">Periode Agustus 2025</p>
            <div class="mt-4 flex items-center">
                <div class="flex items-center w-full bg-white/10 border border-green-300 rounded-lg px-4 py-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2 text-green-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <span class="text-sm font-medium">Lengkapi detail pegawai terlebih dahulu, kemudian upload semua dokumen yang diperlukan</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabs -->
    <div class="bg-white rounded-lg shadow p-4">
        <div class="flex border-b">
            <button 
                :class="step === 1 ? 'border-b-2 border-blue-500 text-blue-500 font-semibold' : 'text-gray-500'" 
                @click="step = 1"
                class="pb-2 mr-6">
                Detail Pegawai
            </button>
            <button 
                :disabled="{{ session()->has('usulan_data') ? 'false' : 'true' }}"
                :class="step === 2 ? 'border-b-2 border-blue-500 text-blue-500 font-semibold' : 'text-gray-400'"
                class="pb-2 cursor-pointer disabled:cursor-not-allowed disabled:text-gray-300"
                @click="step = 2">
                Kelengkapan Berkas
            </button>
        </div>

        <!-- Step 1: Detail Pegawai -->
        <div x-show="step === 1" x-transition class="pt-6">
            <form action="{{ route('usulan.storeData') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                @csrf

                <div>
                    <label class="block text-sm font-medium mb-1">NIP Pegawai *</label>
                    <input type="text" name="nip" placeholder="Masukkan NIP 18 digit" required
                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Nama Pegawai *</label>
                    <input type="text" name="nama" placeholder="Nama lengkap pegawai" required
                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Perangkat Daerah *</label>
                    <select name="perangkat_daerah" required
                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                        <option value="">Pilih perangkat daerah</option>
                        <option>Dinas Pendidikan</option>
                        <option>Dinas Kesehatan</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Golongan *</label>
                    <select name="golongan" required
                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                        <option value="">Pilih golongan</option>
                        <option>III/a</option>
                        <option>III/b</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">TMT Golongan *</label>
                    <input type="date" name="tmt_golongan" required
                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Jabatan *</label>
                    <input type="text" name="jabatan" placeholder="Jabatan saat ini" required
                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Jenis Jabatan *</label>
                    <select name="jenis_jabatan" required
                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                        <option value="">Pilih jenis jabatan</option>
                        <option>Pelaksana</option>
                        <option>Struktural</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Pendidikan *</label>
                    <select name="pendidikan" required
                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                        <option value="">Pilih pendidikan terakhir</option>
                        <option>S1</option>
                        <option>S2</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Tahun Lulus</label>
                    <input type="number" name="tahun_lulus" placeholder="Tahun lulus pendidikan terakhir"
                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Nomor Surat Pengantar OPD</label>
                    <input type="text" name="no_surat_pengantar" placeholder="Nomor surat pengantar"
                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Tanggal Surat</label>
                    <input type="date" name="tanggal_surat"
                        class="w-full border rounded-lg px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                <div class="col-span-1 md:col-span-2 flex justify-end mt-4">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-2 rounded-lg">
                        Simpan & Lanjutkan
                    </button>
                </div>
            </form>
        </div>

        <!-- Step 2: Kelengkapan Berkas -->
        <div x-show="step === 2" x-transition class="pt-6">
            <form action="{{ route('usulan.storeDokumen') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <div class="bg-blue-50 border-l-4 border-blue-500 p-4 rounded text-sm text-blue-700">
                    Upload semua dokumen kelengkapan sesuai ketentuan. Pastikan format file PDF dan ukuran maksimal 5MB.
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">SK Pangkat Terakhir (PDF)</label>
                    <input type="file" name="sk_pangkat" accept="application/pdf" required
                        class="w-full border rounded-lg px-3 py-2">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">Ijazah Terakhir (PDF)</label>
                    <input type="file" name="ijazah" accept="application/pdf" required
                        class="w-full border rounded-lg px-3 py-2">
                </div>

                <div>
                    <label class="block text-sm font-medium mb-1">SKP 2 Tahun Terakhir (PDF)</label>
                    <input type="file" name="skp" accept="application/pdf" required
                        class="w-full border rounded-lg px-3 py-2">
                </div>

                <div class="flex justify-end mt-6">
                    <button type="submit" class="bg-green-500 hover:bg-green-600 text-white font-semibold px-6 py-2 rounded-lg">
                        Submit Usulan
                    </button>
                </div>
            </form>
        </div>

        @if(session('success'))
            <div class="mt-6 p-4 bg-green-500 text-white rounded">
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>
@endsection