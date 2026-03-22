<!DOCTYPE html>
<html lang="id" class="h-screen overflow-hidden">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Kegiatan Sosial</title>
 
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
    .card-img-lines::before,
    .card-img-lines::after {
      content: '';
      position: absolute;
      width: 140%;
      height: 1px;
      background: rgba(255,255,255,0.15);
    }
    .card-img-lines::before { transform: rotate(30deg); }
    .card-img-lines::after  { transform: rotate(-30deg); }
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
 
    <!-- Page Header -->
    <div class="bg-brown-dark rounded-2xl p-6 mb-5 flex items-center gap-4">
      <span class="text-3xl">📋</span>
      <div>
        <h1 class="text-xl font-bold text-white">Daftar Kegiatan Sosial</h1>
        <p class="text-sm text-white mt-0.5">Temukan dan daftar kegiatan sosial yang sesuai dengan minat Anda</p>
      </div>
    </div>
 
    <!-- Search & Filter -->
    <div class="flex gap-3 mb-6">
      <div class="flex-1 flex items-center bg-[#F9F0DC] rounded-xl px-4 gap-2.5 border border-black">
        <span class="text-sm text-[#999]">🔍</span>
        <input id="searchInput" type="text" placeholder="Cari Kegiatan ..."
               class="flex-1 bg-transparent border-none outline-none text-sm text-brown-dark placeholder-[#b0956d] py-3" />
      </div>
      <select id="categoryFilter"
               class="bg-[#F9F0DC] border border-black rounded-xl px-4 py-3 text-sm text-brown-dark outline-none cursor-pointer min-w-[170px]">
        <option value="">Semua Kategori</option>
        <option value="Bakti Sosial">Bakti Sosial</option>
        <option value="Pendidikan">Pendidikan</option>
        <option value="Lingkungan">Lingkungan</option>
        <option value="Kesehatan">Kesehatan</option>
      </select>
    </div>
 
    <!-- Cards Grid -->
    <div id="cardsGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
 
      <div class="card bg-brown-card border border-brown-border rounded-xl overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-2xl transition-all duration-200" data-kategori="Bakti Sosial">
        <div class="relative h-40 overflow-hidden bg-brown-img">
          <img src="/assets/panti-asuhan-kasih-ibu.jpeg" alt="" class="w-full h-full object-cover" />
        </div>
        <div class="p-4 flex flex-col gap-2 flex-1">
          <h3 class="text-sm font-semibold text-white leading-snug">Bakti Sosial di Panti Asuhan Kasih Ibu</h3>
          <div class="flex flex-col gap-1">
            <span class="text-xs text-white">📅 15 Februari 2026</span>
            <span class="text-xs text-white">🕐 12:30 – 17:00</span>
            <span class="text-xs text-white">📍 Jl. Hassanuddin No.9</span>
          </div>
          <button onclick="lihatDetail(0)" class="mt-auto w-full py-2.5 bg-yellow hover:bg-yellow-hover text-black text-sm font-bold rounded-lg transition-colors active:scale-95">Lihat Detail</button>
        </div>
      </div>
 
      <div class="card bg-brown-card border border-brown-border rounded-xl overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-2xl transition-all duration-200" data-kategori="Bakti Sosial">
        <div class="relative h-40 overflow-hidden bg-brown-img">
          <img src="/assets/tebang-kacang.jpeg" alt="" class="w-full h-full object-cover" />
        </div>
        <div class="p-4 flex flex-col gap-2 flex-1">
          <h3 class="text-sm font-semibold text-white leading-snug">Gotong Royong di Desa Tebang Kacang</h3>
          <div class="flex flex-col gap-1">
            <span class="text-xs text-white">📅 15 Februari 2026</span>
            <span class="text-xs text-white">🕐 12:30 – 17:00</span>
            <span class="text-xs text-white">📍 Jl. Hassanuddin No.9</span>
          </div>
          <button onclick="lihatDetail(1)" class="mt-auto w-full py-2.5 bg-yellow hover:bg-yellow-hover text-black text-sm font-bold rounded-lg transition-colors active:scale-95">Lihat Detail</button>
        </div>
      </div>
 
      <div class="card bg-brown-card border border-brown-border rounded-xl overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-2xl transition-all duration-200" data-kategori="Pendidikan">
       <div class="relative h-40 overflow-hidden bg-brown-img">
          <img src="/assets/takjil.jpg" alt="" class="w-full h-full object-cover" />
      </div>
        <div class="p-4 flex flex-col gap-2 flex-1">
          <h3 class="text-sm font-semibold text-white leading-snug">Membagi Takjil di Daerah Sunagi Raya</h3>
          <div class="flex flex-col gap-1">
            <span class="text-xs text-white">📅 20 Februari 2026</span>
            <span class="text-xs text-white">🕐 08:00 – 12:00</span>
            <span class="text-xs text-white">📍 Jl. Merdeka No.3</span>
          </div>
          <button onclick="lihatDetail(2)" class="mt-auto w-full py-2.5 bg-yellow hover:bg-yellow-hover text-black text-sm font-bold rounded-lg transition-colors active:scale-95">Lihat Detail</button>
        </div>
      </div>
 
      <div class="card bg-brown-card border border-brown-border rounded-xl overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-2xl transition-all duration-200" data-kategori="Lingkungan">
       <div class="relative h-40 overflow-hidden bg-brown-img">
          <img src="/assets/penanaman-mangrove-di-pesisir.jpg" alt="" class="w-full h-full object-cover" />
      </div>
        <div class="p-4 flex flex-col gap-2 flex-1">
          <h3 class="text-sm font-semibold text-white leading-snug">Penanaman Pohon Mangrove Pesisir</h3>
          <div class="flex flex-col gap-1">
            <span class="text-xs text-white">📅 22 Februari 2026</span>
            <span class="text-xs text-white">🕐 07:00 – 11:00</span>
            <span class="text-xs text-white">📍 Pantai Kijing</span>
          </div>
          <button onclick="lihatDetail(3)" class="mt-auto w-full py-2.5 bg-yellow hover:bg-yellow-hover text-black text-sm font-bold rounded-lg transition-colors active:scale-95">Lihat Detail</button>
        </div>
      </div>
 
      <div class="card bg-brown-card border border-brown-border rounded-xl overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-2xl transition-all duration-200" data-kategori="Kesehatan">
        <div class="relative h-40 overflow-hidden bg-brown-img">
          <img src="/assets/pmi.jpeg" alt="" class="w-full h-full object-cover" />
        </div>
        <div class="p-4 flex flex-col gap-2 flex-1">
          <h3 class="text-sm font-semibold text-white leading-snug">Donor Darah PMI Kota Pontianak</h3>
          <div class="flex flex-col gap-1">
            <span class="text-xs text-white">📅 25 Februari 2026</span>
            <span class="text-xs text-white">🕐 09:00 – 14:00</span>
            <span class="text-xs text-white">📍 Gedung PMI Pontianak</span>
          </div>
          <button onclick="lihatDetail(4)" class="mt-auto w-full py-2.5 bg-yellow hover:bg-yellow-hover text-black text-sm font-bold rounded-lg transition-colors active:scale-95">Lihat Detail</button>
        </div>
      </div>
 
      <div class="card bg-brown-card border border-brown-border rounded-xl overflow-hidden flex flex-col hover:-translate-y-1 hover:shadow-2xl transition-all duration-200" data-kategori="Bakti Sosial">
      <div class="relative h-40 overflow-hidden bg-brown-img">
          <img src="/assets/remaja.jpeg" alt="" class="w-full h-full object-cover" />
      </div>
        <div class="p-4 flex flex-col gap-2 flex-1">
          <h3 class="text-sm font-semibold text-white leading-snug">Membagikan Sarapan Gratis di Jalan</h3>
          <div class="flex flex-col gap-1">
            <span class="text-xs text-white">📅 15 Februari 2026</span>
            <span class="text-xs text-white">🕐 12:30 – 17:00</span>
            <span class="text-xs text-white">📍 Jl. Hassanuddin No.9</span>
          </div>
          <button onclick="lihatDetail(5)" class="mt-auto w-full py-2.5 bg-yellow hover:bg-yellow-hover text-black text-sm font-bold rounded-lg transition-colors active:scale-95">Lihat Detail</button>
        </div>
      </div>
 
    </div>
 
    <!-- Empty State -->
    <div id="emptyState" class="hidden text-center py-16 text-[#75573A]">
      <span class="text-4xl block mb-3">🔍</span>
      <p class="text-base">Tidak ada kegiatan yang ditemukan.</p>
    </div>
 
  </main>
 
  <!-- ── MODAL ── -->
  <div id="modalOverlay" class="fixed inset-0 bg-black/65 flex items-center justify-center z-50 opacity-0 pointer-events-none transition-opacity duration-200">
    <div id="modalBox" class="bg-brown-card border border-brown-border rounded-2xl w-11/12 max-w-md overflow-hidden relative translate-y-5 transition-transform duration-200">
      <button id="modalClose" class="absolute top-3 right-3 bg-black/40 text-white w-8 h-8 rounded-full text-sm z-10 hover:bg-black/60 transition-colors">✕</button>
      <div class="h-44 bg-brown-img flex items-center justify-center text-5xl text-white/20">🖼</div>
      <div class="p-6">
        <span id="modalKategori" class="inline-block bg-yellow text-brown-dark text-xs font-bold px-3 py-1 rounded-full mb-3">Bakti Sosial</span>
        <h2 id="modalTitle" class="text-lg font-bold text-white mb-3">Judul Kegiatan</h2>
        <div class="flex flex-col gap-1.5 mb-4">
          <span id="modalTanggal" class="text-sm text-[#D4B896]">📅 —</span>
          <span id="modalWaktu"   class="text-sm text-[#D4B896]">🕐 —</span>
          <span id="modalLokasi"  class="text-sm text-[#D4B896]">📍 —</span>
        </div>
        <p id="modalDesc" class="text-sm text-[#D4B896] leading-relaxed mb-5">Deskripsi kegiatan.</p>
        <button class="w-full py-3 bg-yellow hover:bg-yellow-hover text-black text-base font-bold rounded-xl transition-colors">
          Daftar Sekarang
        </button>
      </div>
    </div>
  </div>

<script src="/js/daftar-kegiatan-sosial.js"></script>

</body>
</html>