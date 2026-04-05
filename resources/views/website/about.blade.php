@extends('layouts.app')
@section('title', 'Tentang Kami - Identik Cafe')

@section('content')
<section class="py-20 px-6 bg-gradient-to-br from-amber-50 to-orange-50">
    <div class="max-w-6xl mx-auto">
        <!-- Hero About -->
        <div class="text-center mb-20">
            <h2 class="section-title text-gray-800 mb-6">Tentang Identik Cafe</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">

Identik Cafe berdiri sejak tahun 2026 dengan satu tujuan sederhana: jadi tempat nyaman buat semua orang. Di sini, kamu bisa ngopi santai, ngobrol bareng teman, atau sekadar menikmati waktu sendiri tanpa gangguan.
Kami menyajikan berbagai pilihan kopi dan makanan dengan kualitas terbaik, tapi tetap dengan suasana yang hangat dan nggak kaku. Buat kami, yang penting bukan cuma rasa, tapi juga pengalaman yang kamu rasakan setiap kali datang ke sini.
Identik Cafe bukan sekadar cafe, tapi tempat di mana cerita, tawa, dan momen kecil jadi lebih berarti.


Identik Cafe — where your moments become part of the story.

            </p>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-20 text-center">
            <div class="bg-white p-8 rounded-2xl shadow-xl">
                <div class="text-4xl font-bold text-amber-600 mb-4">500+</div>
                <div class="text-gray-600 font-semibold">Kopi Disajikan</div>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-xl">
                <div class="text-4xl font-bold text-amber-600 mb-4">50+</div>
                <div class="text-gray-600 font-semibold">Menu Istimewa</div>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-xl">
                <div class="text-4xl font-bold text-amber-600 mb-4">4.9⭐</div>
                <div class="text-gray-600 font-semibold">Rating Pelanggan</div>
            </div>
            <div class="bg-white p-8 rounded-2xl shadow-xl">
                <div class="text-4xl font-bold text-amber-600 mb-4">7AM-10PM</div>
                <div class="text-gray-600 font-semibold">Setiap Hari</div>
            </div>
        </div>

        <!-- Story -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
            <div>
                <h3 class="text-3xl font-bold text-gray-800 mb-6">Cerita Kami</h3>
                <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                    Identik Cafe lahir dari kecintaan kami terhadap kopi dan momen sederhana yang bermakna. Kami memilih biji kopi terbaik dari petani lokal dan mengolahnya dengan penuh perhatian, setiap cangkir yang Anda nikmati memiliki rasa yang autentik dan berkarakter.
                </p>
                <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                    Selain kopi, kami juga menyediakan pastry dan makanan ringan homemade yang melengkapi pengalaman Anda. Tim barista terlatih siap menyajikan minuman favorit Anda dengan senyum ramah.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center space-x-4 p-4 bg-white rounded-xl shadow-md">
                        <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-coffee text-amber-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Kopi Lokal Terbaik</h4>
                            <p class="text-sm text-gray-600">Biji kopi pilihan dari petani Indonesia</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-4 p-4 bg-white rounded-xl shadow-md">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                            <i class="fas fa-leaf text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-800">Ramah Lingkungan</h4>
                            <p class="text-sm text-gray-600">Penggunaan bahan ramah lingkungan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Cafe Interior" class="w-full h-[500px] object-cover rounded-3xl shadow-2xl">
                <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-gradient-to-br from-amber-400 to-orange-500 rounded-full opacity-20"></div>
            </div>
        </div>
    </div>
</section>
@endsection
