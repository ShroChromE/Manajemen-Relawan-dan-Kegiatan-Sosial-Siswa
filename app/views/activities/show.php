<!DOCTYPE html>
<html lang="id" class="h-screen overflow-hidden">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Kegiatan</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            brown: {
              dark:    '#75573A',
              mid:     '#7A5230',
              light:   '#D9D9D9',
              card:    '#75573A',
              border:  '#8B5E3C',
              sidebar: '#FFE15E',
              main:    '#FFF6D0',
              page:    '#ffffff',
              img:     '#75573A',
            },
            yellow: {
              DEFAULT: '#F5C842',
              hover:   '#E0B530',
            },
            cream: '#ffffff',
            muted: '#ffffff',
          },
          fontFamily: {
            jakarta: ['"Plus Jakarta Sans"', 'sans-serif'],
          },
        }
      }
    }
  </script>

  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <style>
    body { font-family: 'Plus Jakarta Sans', sans-serif; }
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: #7A5230; border-radius: 4px; }
  </style>
</head>

<body class="bg-brown-page text-cream flex h-screen overflow-hidden">

  <!-- ── SIDEBAR ── -->
  <aside class="w-52 bg-brown-sidebar flex flex-col py-5 flex-shrink-0 border-r border-black/10">

    <div class="flex items-center gap-2.5 px-4 pb-4 border-b border-black/10 mb-3">
      <div class="w-10 h-10 rounded-full bg-brown-light flex items-center justify-center text-lg flex-shrink-0">👤</div>
      <div class="overflow-hidden">
        <p class="text-sm font-bold text-[#3B2507] truncate">Kenzo Rivaldo</p>
        <p class="text-xs text-[#75573A] truncate">SMK Kristen Immanuel</p>
      </div>
    </div>

    <nav class="flex flex-col gap-0.5 px-2.5">
      <a href="#" class="nav-item flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm font-medium text-[#75573A] hover:bg-black/5 hover:text-[#3B2507] transition-colors">
        <span class="w-5 text-center text-sm">📊</span> Dashboard
      </a>
      <a href="#" class="nav-item active flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm font-bold bg-brown-dark text-[#FFE15E] transition-colors">
        <span class="w-5 text-center text-sm">📋</span> Daftar Kegiatan
      </a>
      <a href="#" class="nav-item flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm font-medium text-[#75573A] hover:bg-black/5 hover:text-[#3B2507] transition-colors">
        <span class="w-5 text-center text-sm">🕐</span> Kelola Kegiatan
      </a>
      <a href="#" class="nav-item flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm font-medium text-[#75573A] hover:bg-black/5 hover:text-[#3B2507] transition-colors">
        <span class="w-5 text-center text-sm">📝</span> Pendaftaran
      </a>
      <a href="#" class="nav-item flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm font-medium text-[#75573A] hover:bg-black/5 hover:text-[#3B2507] transition-colors">
        <span class="w-5 text-center text-sm">👤</span> Profil
      </a>
      <a href="#" class="nav-item flex items-center gap-2.5 px-3 py-2.5 rounded-lg text-sm font-medium text-[#75573A] hover:bg-black/5 hover:text-[#3B2507] transition-colors">
        <span class="w-5 text-center text-sm">📈</span> Laporan & Rekap
      </a>
    </nav>

  </aside>

  <!-- ── MAIN ── -->
  <main class="flex-1 bg-brown-main overflow-y-auto p-7">

    <!-- Page Header with Back Button -->
    <div class="bg-brown-dark rounded-2xl p-6 mb-5 flex items-center gap-4">
      <button onclick="history.back()" class="w-9 h-9 rounded-full bg-white/15 hover:bg-white/25 flex items-center justify-center text-white transition-colors flex-shrink-0">
        ←
      </button>
      <span class="text-3xl">📋</span>
      <div>
        <h1 class="text-xl font-bold text-white">Detail Kegiatan</h1>
        <p class="text-sm text-white mt-0.5">Informasi lengkap mengenai kegiatan sosial</p>
      </div>
    </div>

    <!-- Activity Summary Card -->
    <div class="bg-brown-card border border-brown-border rounded-2xl overflow-hidden mb-5">
      <div class="flex gap-0">
        <!-- Image placeholder -->
        <div class="w-44 h-36 bg-brown-light flex-shrink-0 flex items-center justify-center text-4xl text-white/20 m-4 rounded-xl overflow-hidden">
          <img src="/assets/panti-asuhan-kasih-ibu.jpeg" alt="" class="w-full h-full object-cover" onerror="this.style.display='none'" />
        </div>
        <!-- Info -->
        <div class="flex flex-col justify-center gap-2 py-4 pr-4">
          <span class="inline-block bg-yellow text-brown-dark text-xs font-bold px-3 py-1 rounded-full w-fit">Bakti Sosial</span>
          <h2 class="text-base font-bold text-white leading-snug">Bakti Sosial di Panti Asuhan Kasih Ibu</h2>
          <div class="flex flex-col gap-1">
            <span class="text-xs text-[#D4B896]">📅 <strong class="text-white">Tanggal:</strong> 15 Februari 2026</span>
            <span class="text-xs text-[#D4B896]">🕐 <strong class="text-white">Rentang Waktu:</strong> 12:30 – 17:00</span>
            <span class="text-xs text-[#D4B896]">📍 <strong class="text-white">Tempat/Lokasi:</strong> Jl. Hassanuddin No. 9</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Detail Content Card -->
    <div class="bg-brown-card border border-brown-border rounded-2xl p-6 mb-5">

      <!-- Deskripsi Kegiatan -->
      <div class="mb-5">
        <h3 class="text-base font-bold text-yellow mb-2">Deskripsi Kegiatan</h3>
        <p class="text-sm text-[#D4B896] leading-relaxed">
          Kegiatan ini untuk membantu anak-anak yang berada di panti asuhan, dengan membagi sembako dan kebutuhan untuk anak-anak di sana.
        </p>
      </div>

      <div class="border-t border-white/10 mb-5"></div>

      <!-- Tujuan Kegiatan -->
      <div class="mb-5">
        <h3 class="text-base font-bold text-yellow mb-2">Tujuan Kegiatan</h3>
        <ul class="flex flex-col gap-1.5">
          <li class="flex items-start gap-2 text-sm text-[#D4B896]">
            <span class="text-yellow mt-0.5">•</span>
            Membantu anak-anak yang berada di panti asuhan
          </li>
          <li class="flex items-start gap-2 text-sm text-[#D4B896]">
            <span class="text-yellow mt-0.5">•</span>
            Mencukupi kebutuhan anak-anak di panti asuhan
          </li>
          <li class="flex items-start gap-2 text-sm text-[#D4B896]">
            <span class="text-yellow mt-0.5">•</span>
            Mempererat hubungan dengan orang-orang di sana
          </li>
        </ul>
      </div>

      <div class="border-t border-white/10 mb-5"></div>

      <!-- Rangkaian Acara -->
      <div class="mb-5">
        <h3 class="text-base font-bold text-yellow mb-2">Rangkaian Acara</h3>
        <ul class="flex flex-col gap-1.5">
          <li class="flex items-start gap-2 text-sm text-[#D4B896]">
            <span class="text-yellow mt-0.5">•</span>
            Pembukaan Kegiatan
          </li>
          <li class="flex items-start gap-2 text-sm text-[#D4B896]">
            <span class="text-yellow mt-0.5">•</span>
            Sambutan dari panitia
          </li>
          <li class="flex items-start gap-2 text-sm text-[#D4B896]">
            <span class="text-yellow mt-0.5">•</span>
            Pembagian bantuan sembako
          </li>
          <li class="flex items-start gap-2 text-sm text-[#D4B896]">
            <span class="text-yellow mt-0.5">•</span>
            Dokumentasi dan penutup
          </li>
        </ul>
      </div>

      <div class="border-t border-white/10 mb-5"></div>

      <!-- Jumlah Peserta -->
      <div>
        <h3 class="text-base font-bold text-yellow mb-2">Jumlah Peserta</h3>
        <p class="text-sm text-[#D4B896]">50 relawan dan 100 penerima bantuan</p>
      </div>

    </div>

    <!-- Dokumentasi -->
    <div class="mb-6">
      <h3 class="text-base font-bold text-[#3B2507] mb-3">Dokumentasi:</h3>
      <div class="grid grid-cols-4 gap-3">
        <div class="aspect-square rounded-xl bg-brown-light overflow-hidden flex items-center justify-center text-2xl text-white/30">
          <img src="/assets/dok1.jpeg" alt="" class="w-full h-full object-cover" onerror="this.outerHTML='<div class=\'w-full h-full bg-[#C9B99A] rounded-xl\'></div>'" />
        </div>
        <div class="aspect-square rounded-xl bg-brown-light overflow-hidden flex items-center justify-center text-2xl text-white/30">
          <img src="/assets/dok2.jpeg" alt="" class="w-full h-full object-cover" onerror="this.outerHTML='<div class=\'w-full h-full bg-[#C9B99A] rounded-xl\'></div>'" />
        </div>
        <div class="aspect-square rounded-xl bg-brown-light overflow-hidden flex items-center justify-center text-2xl text-white/30">
          <img src="/assets/dok3.jpg" alt="" class="w-full h-full object-cover" onerror="this.outerHTML='<div class=\'w-full h-full bg-[#C9B99A] rounded-xl\'></div>'" />
        </div>
        <div class="aspect-square rounded-xl bg-brown-light overflow-hidden flex items-center justify-center text-2xl text-white/30">
          <img src="/assets/dok4.jpg" alt="" class="w-full h-full object-cover" onerror="this.outerHTML='<div class=\'w-full h-full bg-[#C9B99A] rounded-xl\'></div>'" />
        </div>
      </div>
    </div>

    <!-- Register Button -->
    <button class="w-full py-3.5 bg-yellow hover:bg-yellow-hover text-black text-base font-bold rounded-xl transition-colors active:scale-95 mb-2">
      Daftar Sekarang
    </button>

  </main>

</body>
</html>