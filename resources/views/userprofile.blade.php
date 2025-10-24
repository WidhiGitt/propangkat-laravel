@extends('layouts.app')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold">Profil Saya</h1>

    <div class="mt-4">
        <p><strong>Nama:</strong> {{ Auth::user()->name }}</p>
        <p><strong>Email:</strong> {{ Auth::user()->email }}</p>
        <p><strong>Role:</strong> {{ Auth::user()->role }}</p>
    </div>

    <!-- Dinamis berdasarkan role -->
    @if(Auth::user()->role === 'pegawai')
        <div class="mt-6 p-4 bg-blue-100 text-blue-800 rounded">
            <h2 class="font-bold">Data Pegawai</h2>
            <p>NIP: {{ Auth::user()->nip }}</p>
            <p>Golongan: {{ Auth::user()->golongan }}</p>
            <!-- dll -->
        </div>
    @elseif(Auth::user()->role === 'operator')
        <div class="mt-6 p-4 bg-green-100 text-green-800 rounded">
            <h2 class="font-bold">Menu Operator</h2>
            <ul>
                <li>Verifikasi usulan</li>
                <li>Kelola data pegawai</li>
            </ul>
        </div>
    @elseif(Auth::user()->role === 'admin')
        <div class="mt-6 p-4 bg-red-100 text-red-800 rounded">
            <h2 class="font-bold">Menu Admin</h2>
            <ul>
                <li>Kelola semua user</li>
                <li>Manajemen sistem</li>
            </ul>
        </div>
    @endif
</div>
@endsection