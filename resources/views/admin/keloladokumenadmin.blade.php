@extends('layouts.dashboard')

@section('content')
    <div class="grid grid-cols-1 gap-4 px-16 mt-1">
        <div class="p-8 pl-9 bg-white rounded-lg shadow">
            <h1 class="text-2xl font-bold">Welcome, Wiwid 👋</h1>
        </div>
    </div>

    <!-- Grid untuk 2 kotak besar di bawah -->
    <div class="grid grid-cols-1 gap-6 px-16 mt-6">
        <div class="p-8 pl-9 bg-white rounded-lg shadow">
            <h2 class="text-2xl font-bold">Pencarian & Filter</h2>
            <h2 class="text-1xl font-light">Update terbaru dari usulan kenaikan pangkat Anda</h2>
            <div class="grid grid-cols-1 mt-6 px-1 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-4 w-full">  
                <select class="p-2 border border-gray-300 rounded-lg">
                    <option>Pilih OPD</option>
                    <option>OPD 1</option>
                    <option>OPD 2</option>
                    <option>OPD 3</option>
                </select>
                <select class="p-2 border border-gray-300 rounded-lg">
                    <option>Jenis Usulan</option>
                    <option>Usulan Pangkat</option>
                    <option>Usulan Gaji</option>
                    <option>Usulan Jabatan</option>
                </select>
                <select class="p-2 border border-gray-300 rounded-lg">
                    <option>Status</option>
                    <option>Pending</option>
                    <option>Disetujui</option>
                    <option>Ditolak</option>
                </select>
                <input type="text" placeholder="Cari..." class="col-span-2 p-2 border border-gray-300 rounded-lg">
            </div>  
        </div>

        <div class="p-8 pl-9 bg-white rounded-lg shadow">
            <h2 class="text-2xl font-bold">Daftar Dokumen</h2>
            <h2 class="text-1xl font-light">Daftar semua usulan kenaikan pangkat</h2>
             <div class="mt-4 p-2 pl-4 bg-gray-100 rounded-lg shadow">
                <h2 class="text-1xl font-bold">Lorem Ipsum</h2>
            </div>
            <div class="mt-4 p-2 pl-4 bg-gray-100 rounded-lg shadow">
                <h2 class="text-1xl font-bold">Lorem Ipsum</h2>
            </div>            
            <div class="mt-4 p-2 pl-4 bg-gray-100 rounded-lg shadow">
                <h2 class="text-1xl font-bold">Lorem Ipsum</h2>
            </div>            
            <div class="mt-4 p-2 pl-4 bg-gray-100 rounded-lg shadow">
                <h2 class="text-1xl font-bold">Lorem Ipsum</h2>
        </div>
    </div>
    </div>
@endsection