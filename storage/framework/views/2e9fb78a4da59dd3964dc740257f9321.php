<?php $__env->startSection('title', 'Menu Premium -  Identik Cafe'); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero Menu -->
<section class="hero flex items-center justify-center text-center px-6 py-32">
    <div class="max-w-4xl mx-auto fade-in">
        <h1 class="section-title mb-10">Menu Premium</h1>
        <p class="text-xl md:text-2xl text-gray-300 mb-12 max-w-2xl mx-auto leading-relaxed">
            Nikmati kuliner autentik Indonesia dengan bahan premium dan sentuhan modern.
            Setiap hidangan baik makanan maupun minuman disajikan dengan cinta dan kepedulian.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="#makanan" class="px-8 py-4 bg-gradient-to-r from-yellow-500 to-orange-500 text-black font-bold rounded-2xl hover:shadow-gold/50 transition-all duration-300">🍗 Makanan Utama</a>
            <a href="#cemilan" class="px-8 py-4 bg-gradient-to-r from-gray-700 to-gray-600 text-white font-bold rounded-2xl hover:shadow-gray-500/50 transition-all duration-300">🍟 Cemilan</a>
            <a href="#minuman" class="px-8 py-4 bg-gradient-to-r from-yellow-500 to-orange-500 text-black font-bold rounded-2xl hover:shadow-gold/50 transition-all duration-300">☕ Minuman</a>
        </div>
    </div>
</section>

<!-- SECTION 1: MAKANAN UTAMA -->
<section id="makanan" class="py-32 px-6 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20 fade-in">
            <h2 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-yellow-400 via-orange-400 to-red-500 bg-clip-text text-transparent font-playfair">
                Makanan Utama
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">Pilihan daging premium dengan bumbu rahasia turun-temurun</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <?php $__currentLoopData = $makanan_utama; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="menu-card group fade-in" style="animation-delay: <?php echo e($loop->index * 0.1); ?>s">
                <div class="overflow-hidden rounded-2xl mb-6">
                    <img src="<?php echo e($item['image']); ?>" alt="<?php echo e($item['name']); ?>"
                         class="group-hover:scale-110 transition-transform duration-700">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-yellow-400 transition-colors"><?php echo e($item['name']); ?></h3>
                    <div class="flex items-center justify-between mb-6">
                        <span class="text-3xl font-black text-yellow-400"><?php echo e($item['price']); ?></span>
                        <div class="flex items-center space-x-2 text-yellow-400">
                            <i class="fas fa-star"></i>
                            <span class="font-semibold">4.9</span>
                        </div>
                    </div>
                    <button class="w-full bg-gradient-to-r from-yellow-500 to-orange-500 text-black py-4 px-8 rounded-2xl font-bold text-lg shadow-xl hover:shadow-gold/50 hover:scale-105 transition-all duration-300 group-hover:bg-yellow-400">
                        Pesan Sekarang
                    </button>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- SECTION 2: CEMILAN -->
<section id="cemilan" class="py-32 px-6 bg-gradient-to-b from-gray-900 to-black">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20 fade-in">
            <h2 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-yellow-400 via-orange-400 to-yellow-500 bg-clip-text text-transparent font-playfair">
                Cemilan Nikmat
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">Pendamping sempurna untuk setiap momen</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <?php $__currentLoopData = $cemilan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="menu-card group fade-in" style="animation-delay: <?php echo e($loop->index * 0.1); ?>s">
                <div class="overflow-hidden rounded-2xl mb-6">
                    <img src="<?php echo e($item['image']); ?>" alt="<?php echo e($item['name']); ?>"
                         class="group-hover:scale-110 transition-transform duration-700">
                </div>
                <div>
                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors"><?php echo e($item['name']); ?></h3>
                    <div class="flex items-center justify-between mb-6">
                        <span class="text-2xl font-black text-yellow-400"><?php echo e($item['price']); ?></span>
                    </div>
                    <button class="w-full bg-gradient-to-r from-gray-700 to-gray-600 text-white py-3 px-6 rounded-xl font-semibold hover:bg-yellow-500 hover:text-black transition-all duration-300">
                        Tambah Pesanan
                    </button>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<!-- SECTION 3: MINUMAN -->
<section id="minuman" class="py-32 px-6 bg-gradient-to-b from-black to-gray-900">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-20 fade-in">
            <h2 class="text-5xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-yellow-400 via-orange-400 to-red-500 bg-clip-text text-transparent font-playfair">
                Minuman Segar
            </h2>
            <p class="text-xl text-gray-400 max-w-3xl mx-auto">Minuman premium untuk melengkapi pengalaman kuliner Anda</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <?php $__currentLoopData = $minuman; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="menu-card group fade-in" style="animation-delay: <?php echo e($loop->index * 0.1); ?>s">
                <div class="overflow-hidden rounded-2xl mb-6">
                    <img src="<?php echo e($item['image']); ?>" alt="<?php echo e($item['name']); ?>"
                         class="group-hover:scale-110 transition-transform duration-700">
                </div>
                <div>
                    <h3 class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors"><?php echo e($item['name']); ?></h3>
                    <div class="flex items-center justify-between mb-6">
                        <span class="text-2xl font-black text-yellow-400"><?php echo e($item['price']); ?></span>
                    </div>
                    <button class="w-full bg-gradient-to-r from-yellow-500 to-orange-500 text-black py-3 px-6 rounded-xl font-semibold hover:bg-yellow-400 transition-all duration-300">
                        Pesan Minuman
                    </button>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    // Smooth scroll ke section
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            e.preventDefault();
            const target = document.querySelector(anchor.getAttribute('href'));
            target?.scrollIntoView({ behavior: 'smooth' });
        });
    });

    // Navbar scroll effect
    window.addEventListener('scroll', () => {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 100) {
            navbar.style.background = 'rgba(26, 26, 26, 0.98)';
            navbar.style.boxShadow = '0 20px 40px rgba(0,0,0,0.5)';
        } else {
            navbar.style.background = 'rgba(26, 26, 26, 0.95)';
            navbar.style.boxShadow = '0 10px 30px rgba(0,0,0,0.3)';
        }
    });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\cafe-aroma\resources\views/website/menu.blade.php ENDPATH**/ ?>