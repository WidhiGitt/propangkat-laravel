@extends('layouts.dashboard')

@section('content')
    {{-- SECTION: Header --}}
    <div class="px-6 lg:px-16 mt-2">
        <div class="p-6 bg-gradient-to-r from-green-400 via-green-500 to-green-700 rounded-lg shadow text-white">
            <h1 class="text-2xl font-bold">Welcome, Wiwid 👋</h1>
            <p class="mt-1 text-sm opacity-90">
                Update terbaru dari usulan kenaikan pangkat Anda
            </p>
            <div class="mt-3 p-3 bg-white/20 rounded-lg text-sm flex items-center justify-between">
                <span>Perbarui informasi</span>
            </div>
        </div>
    </div>

    {{-- SECTION: Pencarian & Filter --}}
    <div class="px-8 md:px-16 mt-6">
        <div class="p-6 bg-white rounded-lg shadow border">
            <h2 class="text-xl font-bold mb-2">Pencarian & Filter</h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 w-full">
                <select class="p-2 border border-gray-300 rounded-lg">
                    <option>Pilih OPD</option>
                    <option>OPD 1</option>
                    <option>OPD 2</option>
                    <option>OPD 3</option>
                </select>
                <select class="p-2 border border-gray-300 rounded-lg">
                    <option>Jabatan</option>
                    <option>Pelaksana</option>
                    <option>Struktural</option>
                    <option>Fungsional</option>
                </select>
                <select class="p-2 border border-gray-300 rounded-lg">
                    <option>Status Pegawai</option>
                    <option>Aktif</option>
                    <option>Cuti</option>
                    <option>Pensiun</option>
                </select>
                <input type="text" placeholder="Cari pegawai..." class="col-span-2 p-2 border border-gray-300 rounded-lg">
            </div>
        </div>
    </div>

    {{-- SECTION: Tabel Pegawai --}}
    <div class="px-8 md:px-16 mt-6 mb-10">
        <div class="bg-white p-6 rounded-lg shadow border overflow-x-auto">
            <h2 class="text-xl font-bold mb-4">Daftar Pegawai</h2>
            <table class="min-w-full table-auto border-collapse">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="px-4 py-2 border">No</th>
                        <th class="px-4 py-2 border">Nama</th>
                        <th class="px-4 py-2 border">NIP</th>
                        <th class="px-4 py-2 border">OPD</th>
                        <th class="px-4 py-2 border">Jabatan</th>
                        <th class="px-4 py-2 border">Status</th>
                        <th class="px-4 py-2 border">Tanggal Masuk</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach(range(1,5) as $i)
                    <tr class="hover:bg-gray-50">
                        <td class="px-4 py-2 border">{{ $i }}</td>
                        <td class="px-4 py-2 border">Pegawai {{ $i }}</td>
                        <td class="px-4 py-2 border">12345678{{ $i }}</td>
                        <td class="px-4 py-2 border">OPD {{ $i }}</td>
                        <td class="px-4 py-2 border">{{ ['Pelaksana','Struktural','Fungsional'][$i%3] }}</td>
                        <td class="px-4 py-2 border">
                            <span class="px-2 py-1 rounded-full text-xs font-semibold {{ $i%2==0?'bg-green-100 text-green-600':'bg-yellow-100 text-yellow-600' }}">
                                {{ $i%2==0?'Aktif':'Cuti' }}
                            </span>
                        </td>
                        <td class="px-4 py-2 border">01 Jan 2020</td>
                        <td class="px-4 py-2 border">
                            <button class="bg-blue-500 text-white px-2 py-1 rounded hover:bg-blue-600 transition text-sm">Detail</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection