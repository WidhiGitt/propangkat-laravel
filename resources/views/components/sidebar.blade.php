<!-- tambahkan di head sekali saja -->
<style>
  [x-cloak] { display: none !important; }
</style>

<div 
  x-data="{ sidebarOpen: false, darkMode: false }"
  :class="{ 'dark': darkMode }"
  class="relative h-screen bg-gray-100 dark:bg-gray-900"
>

  <!-- Sidebar -->
  <aside 
    class="fixed inset-y-0 left-0 z-30 flex flex-col transition-all duration-300
          bg-white dark:bg-gray-900 border-r border-gray-200 dark:border-gray-700 shadow-lg"
    :class="sidebarOpen ? 'w-64' : 'w-20'"
  >
    <!-- Wrapper Header -->
      <div class="relative flex items-center justify-between p-4 mt-2 border-b border-gray-200 dark:border-gray-700">

        <!-- Bagian Kiri: Logo -->
        <div class="flex items-center gap-2 ml-10">
          <span class="absolute top-3 left-3 inline-flex w-8 h-8 items-center justify-center rounded-lg bg-indigo-600 text-white font-bold">
            W
          </span>
          <span x-show="sidebarOpen" x-transition x-cloak class="font-semibold text-gray-800 dark:text-gray-100">
            ProPangkat
          </span>
        </div>

        <!-- Tombol Hamburger (mini mode) -->
        <button 
          x-show="!sidebarOpen" 
          x-cloak
          @click="sidebarOpen = true"
          class="absolute top-3 right-1 p-1.5 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 
                text-gray-700 dark:text-gray-200 transition-all duration-200"
        >
          <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>

        <!-- Tombol X (full mode) -->
        <button 
          x-show="sidebarOpen" 
          x-cloak
          @click="sidebarOpen = false"
          class="absolute top-3 right-3 p-2 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800 
                text-gray-700 dark:text-gray-200 transition-all duration-200"
        >
          <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>


    <!-- NAV -->
    <nav class="flex-1 px-2 py-4 space-y-">

       <!-- Menu khusus pegawai -->
      <!--<template x-if="role === 'pegawai'">-->
      <a href="/pegawai/dashboardpegawai" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-indigo-600 bg-indigo-50 dark:bg-gray-800 dark:text-indigo-400 font-medium">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10h14V10l-7-7-7 7z"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Dashboard</span>
      </a>

      <a href="timelinepegawai" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Timeline</span>
      </a>

      <a href="/pegawai/inputusulanpegawai" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Input Usulan</span>
      </a>

      <a href="/pegawai/riwayatusulanpegawai" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox=butto"0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Riwayat Usulan</span>
      </a>
      </template>

      <!-- Menu khusus operator -->
      <!--<template x-if="role === 'operator'">
      <a href="/operator/dashboardoperator" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-indigo-600 bg-indigo-50 dark:bg-gray-800 dark:text-indigo-400 font-medium">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10h14V10l-7-7-7 7z"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Dashboard</span>
      </a>    
      <a href="timelineoperator" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Timeline KAPE</span>
      </a>
      <a href="/operator/inboxusulanoperator" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Inbox Usulan</span>
      </a>
      </template>
      <a href="/operator/listpegawaioperator" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>List Pegawai</span>
      </a>
      </template>-->

      <!-- Menu khusus admin -->
      <!--<template x-if="role === 'admin'">
      <a href="/admin/dashboardadmin" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-indigo-600 bg-indigo-50 dark:bg-gray-800 dark:text-indigo-400 font-medium">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10h14V10l-7-7-7 7z"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Dashboard</span>
      </a>
      <a href="/admin/manajemenpenggunaadmin" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Manajemen Pengguna</span>
      </a>
      <a href="/admin/roledanhakaksesadmin" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Role & Hak Akses</span>
      </a>
        <a href="/admin/roledanhakaksesadmin" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Role & Hak Akses</span>
      </a>
        <a href="/admin/timelineadmin" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Timeline KAPE</span>
      </a>
        <a href="/admin/inboxusulanadmin" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Inbox Usulan</span>
      </a>
        <a href="/admin/keloladokumenadmin" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Kelola Dokumen</span>
      </a>
        <a href="/admin/logaktivitasadmin" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Log Aktivitas</span>
      </a>
        <a href="/admin/laporandanexportadmin" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Laporan & Export</span>
      </a>
      <a href="/admin/notifikasiadmin" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Notifikasi Global</span>
      </a>
      <a href="/admin/pengaturanadmin" 
         class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-800">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path d="M12 20h9"/>
        </svg>
        <span x-show="sidebarOpen" x-transition x-cloak>Pengaturan Sistem</span>
      </a>
      </template>-->
    </nav>

    <!-- Profile -->
    <a href="/userprofile" 
      class="flex items-center gap-3 p-4 border-t border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 transition">
      <img class="w-8 h-8 rounded-full" src="https://i.pravatar.cc/100" alt="User">
      <div x-show="sidebarOpen" x-transition x-cloak>
        <p class="text-sm font-medium text-gray-700 dark:text-gray-200">Tom Cook</p>
        <p class="text-xs text-gray-500 dark:text-gray-400">tom@example.com</p>
      </div>
    </a>
  </aside>
</div>
