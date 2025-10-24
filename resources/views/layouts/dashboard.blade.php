<!DOCTYPE html>
<html lang="en" x-data="{ sidebarOpen: true }">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'ProPangkat' }}</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script>
        lucide.createIcons();
    </script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                },
            },
        }
    </script>
</head>
<body class="flex min-h-screen bg-gray-100" x-data="{ sidebarOpen: true }">
    <!-- Sidebar -->
    <div class="relative z-50">
        <x-sidebar />
    </div>

    <!-- Konten utama -->
    <div class="flex-1 flex flex-col min-h-screen transition-all duration-300"
         :class="sidebarOpen ? 'ml-90' : 'ml-0'">

        <!-- Header -->
        <header class="w-full px-6 py-4 bg-white shadow border-b border-gray-200 flex justify-between items-center sticky top-0 z-40">

          <!-- Kiri: Tombol toggle + Logo -->
          <div class="flex items-center gap-4 px-16">
            <div class="flex items-center gap-3">
              <div>
                <h1 class="font-semibold text-gray-800 text-lg">Dinas Pendidikan</h1>
                <p class="text-sm text-gray-500">Provinsi Kalimantan Timur</p>
              </div>
            </div>
          </div>

          <!-- Kanan: Notifikasi, Profil, Logout -->
          <div class="flex items-center gap-5">

            <!-- Notifikasi -->
            <button type="button" class="relative p-2 rounded-full hover:bg-gray-100 transition">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-600">
                <path stroke-linecap="round" stroke-linejoin="round"
                  d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75V8.25a6 6 0 10-12 0v1.5a8.967 8.967 0 01-2.311 6.022 23.85 23.85 0 005.454 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
              </svg>
              <span class="absolute top-1.5 right-1.5 bg-red-500 text-white text-xs font-semibold px-1.5 py-0.5 rounded-full">
                3
              </span>
            </button>

            <!-- Profil Pengguna -->
            <div class="flex items-center gap-3">
              <div class="text-right hidden sm:block">
                <p class="font-medium text-gray-800">Dr. Ahmad Wijaya, S.Pd</p>
                <p class="text-sm text-gray-500">123456789012345678 • Dinas Pendidikan</p>
              </div>
              <div class="w-10 h-10 rounded-full bg-gray-200 flex items-center justify-center text-gray-600 font-semibold">
                A
              </div>
            </div>

            <!-- Tombol Logout -->
            <!-- <form action="{route('logout')}" method="POST"> -->
              @csrf
              <button type="submit"
                class="border border-gray-300 text-gray-600 hover:bg-gray-100 px-4 py-2 rounded-lg transition flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h6a2 2 0 012 2v1" />
                </svg>
                <span>Logout</span>
              </button>
            </form>
          </div>
        </header>

        <!-- Konten -->
        <main class="flex-1 p-6">
            @yield('content')
        </main>
    </div>
</body>
</html>