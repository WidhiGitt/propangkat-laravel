@extends('layouts.dashboard')

@section('content')
<div class="px-6 py-6 space-y-6">

    {{-- Judul Halaman --}}
    <div>
        <h1 class="text-2xl font-bold text-gray-900">⚙️ Pengaturan Admin</h1>
        <p class="text-gray-600 mt-1">Kelola informasi akun admin dan pantau aktivitas pengguna dalam sistem.</p>
    </div>

    {{-- Form Pengaturan Akun --}}
    <div class="bg-white rounded-lg shadow p-6">
        <h2 class="text-lg font-semibold text-gray-900 mb-4">Pengaturan Akun</h2>
        <form action="{{ route('admin.updateProfile') }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 text-gray-800 font-medium">Nama</label>
                    <input type="text" name="name" value="{{ auth()->user()->name }}" 
                           class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
                </div>
                <div>
                    <label class="block mb-1 text-gray-800 font-medium">Email</label>
                    <input type="email" name="email" value="{{ auth()->user()->email }}" 
                           class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block mb-1 text-gray-800 font-medium">Password Baru</label>
                    <input type="password" name="password" placeholder="Kosongkan jika tidak diubah"
                           class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
                </div>
                <div>
                    <label class="block mb-1 text-gray-800 font-medium">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" 
                           class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" 
                        class="px-5 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>

    {{-- Riwayat Aktivitas --}}
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-lg font-semibold text-gray-900">Riwayat Aktivitas Pengguna</h2>
            <div class="flex space-x-2">
                <input type="text" placeholder="Cari aktivitas..." 
                       class="px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 focus:outline-none">
                <button class="px-4 py-2 bg-gray-100 border rounded-lg hover:bg-gray-200 transition">Cari</button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full text-left text-sm text-gray-800">
                <thead class="border-b bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 font-medium">#</th>
                        <th class="px-4 py-2 font-medium">Nama Pengguna</th>
                        <th class="px-4 py-2 font-medium">Aktivitas</th>
                        <th class="px-4 py-2 font-medium">Waktu</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($activities as $index => $activity)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2">{{ $index + 1 }}</td>
                            <td class="px-4 py-2">{{ $activity->user->name }}</td>
                            <td class="px-4 py-2">{{ $activity->description }}</td>
                            <td class="px-4 py-2">{{ $activity->created_at->format('d M Y H:i') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-4 text-center text-gray-500">
                                Tidak ada aktivitas yang tercatat.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection