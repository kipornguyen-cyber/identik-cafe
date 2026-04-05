<?php $__env->startSection('title', 'Kontak - Identik Cafe'); ?>

<?php $__env->startSection('content'); ?>
<section class="py-20 px-6">
    <div class="max-w-6xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-20">
            <div>
                <h2 class="section-title mb-8">Hubungi Kami</h2>
                <div class="space-y-6">
                    <div class="flex items-start space-x-4 p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="w-12 h-12 bg-amber-100 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-map-marker-alt text-amber-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-xl text-gray-800 mb-2">Alamat</h4>
                            <p class="text-gray-600">Jl. Raya Inkopad No.13 Blok J1, Sasak Panjang,<br>Tajurhalang,Kabupaten Bogor,16320</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-phone text-green-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-xl text-gray-800 mb-2">Telepon</h4>
                            <p class="text-gray-600">+62 21 1234 5678<br>+62 812 3456 7890</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-envelope text-blue-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-xl text-gray-800 mb-2">Social Media</h4>
                            <p class="text-gray-600">Instagram: Identik cafe<br>TikTok: Identik cafe</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-6 bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300">
                        <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-clock text-purple-600 text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-xl text-gray-800 mb-2">Jam Buka</h4>
                            <p class="text-gray-600">Senin-Minggu<br>07:00 - 22:00</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-3xl shadow-2xl">
                <h3 class="text-2xl font-bold text-gray-800 mb-6">Kirim Pesan</h3>
                <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="space-y-6">
                    <?php echo csrf_field(); ?>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Nama Lengkap</label>
                        <input type="text" name="name" required
                               class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300"
                               placeholder="Masukkan nama Anda">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                        <input type="email" name="email" required
                               class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300"
                               placeholder="example@email.com">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Subjek</label>
                        <input type="text" name="subject"
                               class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300"
                               placeholder="Subjek pesan">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Pesan</label>
                        <textarea name="message" rows="6" required
                                  class="w-full p-4 border border-gray-300 rounded-xl focus:ring-2 focus:ring-amber-500 focus:border-amber-500 transition-all duration-300 resize-vertical"
                                  placeholder="Ceritakan apa yang bisa kami bantu..."></textarea>
                    </div>

                    <button type="submit"
                            class="w-full bg-gradient-to-r from-amber-600 to-amber-700 text-white py-4 px-8 rounded-xl font-bold text-lg shadow-xl hover:shadow-2xl hover:from-amber-700 hover:to-amber-800 transition-all duration-300 transform hover:-translate-y-1">
                        <i class="fas fa-paper-plane mr-2"></i>
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\cafe-aroma\resources\views/website/contact.blade.php ENDPATH**/ ?>