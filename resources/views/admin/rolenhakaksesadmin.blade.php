@extends('layouts.dashboard')

@section('content')
<div class="px-6 lg:px-16 mt-2 space-y-6">
    <!-- Header Alert -->
    <div class="bg-red-500 text-white rounded-lg p-5 mb-6">
        <div class="flex items-center space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 9v2m0 4h.01M4.93 4.93l14.14 14.14M12 2a10 10 0 100 20 10 10 0 000-20z" />
            </svg>
            <div>
                <h1 class="font-bold text-lg">Role dan Hak Akses</h1>
                <p class="text-sm">Informasi Role Pengguna dalam Sistem</p>
            </div>
        </div>
        <div class="mt-3 text-sm bg-red-600/40 p-3 rounded">
            Halaman ini menampilkan informasi tentang role yang tersedia dalam sistem dan pengguna yang memiliki role tersebut.
            Role menentukan hak akses dan kemampuan pengguna dalam menggunakan fitur-fitur sistem.
        </div>
    </div>

    <!-- Konten Utama -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Daftar Role -->
        <div class="bg-white rounded-lg shadow p-5 border border-gray-200">
            <h2 class="font-semibold text-lg mb-4 text-black">Daftar Role</h2>
            <div class="space-y-3">
                <div class="border border-blue-400 rounded-lg p-3 flex justify-between items-center hover:bg-gray-50 cursor-pointer">
                    <div>
                        <p class="font-medium text-black">Semua Pengguna</p>
                        <span class="text-sm text-gray-500">20 pengguna</span>
                    </div>
                    <span class="text-blue-500 font-bold">A</span>
                </div>
                <div class="border border-gray-300 rounded-lg p-3 flex justify-between items-center hover:bg-gray-50 cursor-pointer">
                    <div>
                        <span class="bg-pink-100 text-pink-600 text-xs font-semibold px-2 py-1 rounded">ADMIN</span>
                        <p class="text-sm text-gray-500 mt-1">1 pengguna</p>
                    </div>
                </div>
                <div class="border border-gray-300 rounded-lg p-3 flex justify-between items-center hover:bg-gray-50 cursor-pointer">
                    <div>
                        <span class="bg-blue-100 text-blue-600 text-xs font-semibold px-2 py-1 rounded">OPERATOR</span>
                        <p class="text-sm text-gray-500 mt-1">7 pengguna</p>
                    </div>
                </div>
                <div class="border border-gray-300 rounded-lg p-3 flex justify-between items-center hover:bg-gray-50 cursor-pointer">
                    <div>
                        <span class="bg-purple-100 text-purple-600 text-xs font-semibold px-2 py-1 rounded">OPERATOR_SEKOLAH</span>
                        <p class="text-sm text-gray-500 mt-1">7 pengguna</p>
                    </div>
                </div>
                <div class="border border-gray-300 rounded-lg p-3 flex justify-between items-center hover:bg-gray-50 cursor-pointer">
                    <div>
                        <span class="bg-green-100 text-green-600 text-xs font-semibold px-2 py-1 rounded">PEGAWAI</span>
                        <p class="text-sm text-gray-500 mt-1">5 pengguna</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Daftar Pengguna -->
        <div class="bg-white rounded-lg shadow p-5 border border-gray-200 md:col-span-2">
            <div class="flex justify-between items-center mb-4">
                <h2 class="font-semibold text-lg text-black">Semua Pengguna</h2>
                <input type="text" placeholder="Cari pengguna..."
                    class="border border-gray-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:ring focus:ring-blue-200">
            </div>

            <div class="space-y-3">
                @foreach (['Administrator', 'Operator 1', 'Operator 2', 'Operator 3'] as $user)
                <div class="border border-gray-200 rounded-lg p-4 flex justify-between items-center hover:bg-gray-50">
                    <div>
                        <p class="font-medium text-black">{{ $user }}</p>
                        <p class="text-sm text-gray-500">{{ strtolower(str_replace(' ', '', $user)) }}@propangkat.dev</p>
                        <span class="bg-blue-100 text-blue-600 text-xs font-semibold px-2 py-1 rounded mt-2 inline-block">
                            {{ strtoupper(str_contains($user, 'Operator') ? 'OPERATOR' : 'ADMIN') }}
                        </span>
                    </div>
                    <div class="flex gap-2">
                        <button class="px-3 py-1 bg-gray-200 hover:bg-gray-300 rounded-lg text-sm">Edit Role</button>
                        <button class="px-3 py-1 bg-red-100 hover:bg-red-200 text-red-600 rounded-lg text-sm">Hapus</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
