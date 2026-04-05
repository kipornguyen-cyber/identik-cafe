@extends('layouts.app')
@section('title', 'Galeri - Identik Cafe')

@section('content')
<section class="py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <h2 class="section-title mb-12">Galeri Kami</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <div class="gallery-item group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105">
                <img src="https://i.pinimg.com/736x/42/de/eb/42deebb7733915be87d80be0113d1015.jpg" alt="Interior Cafe" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h3 class="text-xl font-bold text-white mb-2">Interior Nyaman</h3>
                        <p class="text-white/90">Suasana hangat untuk bekerja atau bersantai</p>
                    </div>
                </div>
            </div>

            <div class="gallery-item group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105">
                <img src="https://i.pinimg.com/736x/b8/21/eb/b821ebf38d9cff4492bd5ca173e1f72b.jpg" alt="Kopi Spesial" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h3 class="text-xl font-bold text-white mb-2">Kopi Premium</h3>
                        <p class="text-white/90">Biji kopi pilihan terbaik</p>
                    </div>
                </div>
            </div>

            <div class="gallery-item group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105">
                <img src="https://i.pinimg.com/1200x/8f/d5/0f/8fd50f8f3e94ba25728789876e6d29dc.jpg" alt="Latte Art" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                    <div>
                        <h3 class="text-xl font-bold text-white mb-2">Latte Art</h3>
                        <p class="text-white/90">Kreativitas barista kami</p>
                    </div>
                </div>
            </div>

            <div class="gallery-item group relative overflow-hidden rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-500 hover:scale-105 lg:col-span-2">
                <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" alt="Cafe Atmosphere" class="w-full h-96 object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-8">
                    <div>
                        <h3 class="text-2xl font-bold text-white mb-3">Identik Cafe Experience</h3>
                        <p class="text-xl text-white/90 mb-6">Nikmati momen spesial Anda bersama kami</p>
                        <a href="{{ route('contact') }}" class="bg-amber-600 text-white px-8 py-3 rounded-full font-semibold hover:bg-amber-700 transition-all duration-300">Kunjungi Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
