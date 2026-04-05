<?php $__env->startSection('title', 'Beranda - Identik Cafe'); ?>

<?php $__env->startSection('content'); ?>
<section class="hero px-6 py-20">
    <div class="max-w-6xl mx-auto flex flex-col lg:flex-row items-center gap-12">
        <div class="lg:w-1/2 text-center lg:text-left">
            <h1 class="text-5xl lg:text-6xl font-bold text-gray-800 mb-6 leading-tight">
                Selamat Datang di<br>
                <span class="text-amber-700">Identik Cafe</span>
            </h1>
            <p class="text-xl text-white-600 mb-8 max-w-lg mx-auto lg:mx-0">
                Nikmati kopi dan makanan terbaik dengan suasana nyaman dan cita rasa autentik dari biji kopi pilihan.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                <a href="<?php echo e(route('menu')); ?>" class="bg-transparent border-2 border-amber-700 text-black-700 px-8 py-4 rounded-full font-semibold hover:bg-green-700 hover:text-white transition-all duration-300">Lihat Menu</a>
                <a href="<?php echo e(route('contact')); ?>" class="bg-transparent border-2 border-amber-700 text-amber-700 px-8 py-4 rounded-full font-semibold hover:bg-amber-700 hover:text-white transition-all duration-300">Hubungi Kami</a>
            </div>
        </div>
        <div class="lg:w-1/2">
            <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                 alt="Identik Cafe Hero"
                 class="rounded-3xl shadow-2xl w-full h-96 lg:h-[500px] object-cover">
        </div>
    </div>
</section>

<!-- Quick Menu Preview -->
<section class="py-20 bg-gradient-to-br from-amber-50 to-orange-50">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="section-title text-amber-800 mb-12">Menu Populer Kami</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-amber p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                <img src="https://api.omela.com/storage/1325/conversions/e68bad0655a2c75490ac4e1be59eaace-large.png" class="w-full h-40 object-cover rounded-lg mb-4" alt="Cappucino">
                <h3 class="font-semibold text-lg mb-2">Cappucino</h3>
                <p class="text-amber-600 font-bold text-xl">Rp 25.000</p>
            </div>
            <div class="bg-orange p-6 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/1200x675/photo/2023/01/25/2724889521.jpg" class="w-full h-40 object-cover rounded-lg mb-4" alt="Pecel Lele">
                <h3 class="font-semibold text-lg mb-2">Pecel Lele</h3>
                <p class="text-amber-600 font-bold text-xl">Rp 35.000</p>
            </div>
            
        </div>
        <div class="text-center mt-12">
            <a href="<?php echo e(route('menu')); ?>" class="cta-button text-lg px-10 py-4">Lihat Semua Menu</a>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\cafe-aroma\resources\views/website/home.blade.php ENDPATH**/ ?>