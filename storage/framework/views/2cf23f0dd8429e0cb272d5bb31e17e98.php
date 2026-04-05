<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Identik Cafe - Premium Dining'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --gold: #D4AF37;
            --gold-dark: #B8962E;
            --black: #1a1a1a;
            --gray-dark: #2d2d2d;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0f0f0f 0%, #1a1a1a 100%);
            color: rgb(170, 214, 49);
        }
        .navbar {
            background: rgba(26, 26, 26, 0.95);
            backdrop-filter: blur(20px);
        }
        .hero {
            min-height: 100vh;
            background: linear-gradient(rgba(187, 184, 184, 0.7), rgba(0,0,0,0.7)), url('https://wiratech.co.id/wp-content/uploads/2021/01/makanan-khas-sunda-_1_.webp');
            background-size: cover;
            background-position: center;
        }
        .section-title {
            @apply text-5xl md:text-6xl font-bold mb-16 text-center bg-gradient-to-r from-yellow-400 via-yellow-300 to-orange-400 bg-clip-text text-transparent;
            font-family: 'Playfair Display', serif;
        }
        .menu-card {
            @apply bg-gradient-to-br from-gray-900/80 to-black/50 backdrop-blur-xl border border-gray-700/50 rounded-3xl p-8 shadow-2xl hover:shadow-gold/50 hover:scale-105 hover:border-gold/70 transition-all duration-500 group;
        }
        .menu-card img {
            @apply w-full h-64 object-cover rounded-2xl group-hover:scale-110 transition-transform duration-700;
        }
        .fade-in { animation: fadeInUp 1s ease-out forwards; }
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }
        .gold-glow { box-shadow: 0 0 30px rgba(212, 175, 55, 0.3); }
    </style>
</head>
<body class="overflow-x-hidden">
    <!-- Navbar -->
    <nav class="navbar fixed top-0 w-full z-50 py-4 shadow-2xl">
        <div class="max-w-7xl mx-auto px-6 flex justify-between items-center">
            <a href="<?php echo e(route('home')); ?>" class="text-3xl font-bold bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent">
                Identik Cafe
            </a>
            <ul class="hidden lg:flex space-x-12">
                <li><a href="<?php echo e(route('home')); ?>" class="<?php echo e(request()->routeIs('home') ? 'text-yellow-400 font-semibold' : 'text-gray-300 hover:text-yellow-400'); ?> text-lg font-medium transition-all duration-300">Beranda</a></li>
                <li><a href="<?php echo e(route('menu')); ?>" class="<?php echo e(request()->routeIs('menu') ? 'text-yellow-400 font-semibold' : 'text-gray-300 hover:text-yellow-400'); ?> text-lg font-medium transition-all duration-300">Menu</a></li>
                <li><a href="<?php echo e(route('gallery')); ?>" class="<?php echo e(request()->routeIs('gallery') ? 'text-yellow-400 font-semibold' : 'text-gray-300 hover:text-yellow-400'); ?> text-lg font-medium transition-all duration-300">Galeri</a></li>
                <li><a href="<?php echo e(route('about')); ?>" class="<?php echo e(request()->routeIs('about') ? 'text-yellow-400 font-semibold' : 'text-gray-300 hover:text-yellow-400'); ?> text-lg font-medium transition-all duration-300">Tentang</a></li>
                <li><a href="<?php echo e(route('contact')); ?>" class="<?php echo e(request()->routeIs('contact') ? 'text-yellow-400 font-semibold' : 'text-gray-300 hover:text-yellow-400'); ?> text-lg font-medium transition-all duration-300">Kontak</a></li>
            </ul>
            <a href="<?php echo e(route('admin.contacts.index')); ?>" class="bg-gradient-to-r from-yellow-500 to-orange-500 text-black px-8 py-3 rounded-2xl font-bold text-lg hover:from-yellow-400 hover:to-orange-400 shadow-lg hover:shadow-gold/50 transition-all duration-300">
                Admin Panel
            </a>
        </div>
    </nav>

    <!-- Flash Messages -->
    <?php if(session('success')): ?>
        <div class="fixed top-24 right-6 z-50 bg-gradient-to-r from-green-500 to-green-600 text-white px-8 py-4 rounded-2xl shadow-2xl max-w-md animate-pulse">
            <i class="fas fa-check-circle mr-3"></i><?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <main class="pt-24">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-gray-900 to-black py-16 mt-24 border-t-4 border-gray-800">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center md:text-left">
                <div>
                    <h3 class="text-3xl font-bold bg-gradient-to-r from-yellow-400 to-orange-400 bg-clip-text text-transparent mb-6">Identik Cafe</h3>
                    <p class="text-gray-400 mb-6">Premium dining experience dengan cita rasa autentik Indonesia dalam suasana elegan.</p>
                    <div class="flex justify-center md:justify-start space-x-6">
                        <a href="#" class="w-12 h-12 bg-gray-800 rounded-2xl flex items-center justify-center hover:bg-yellow-500 hover:text-black transition-all duration-300"><i class="fab fa-instagram text-xl"></i></a>
                        <a href="#" class="w-12 h-12 bg-gray-800 rounded-2xl flex items-center justify-center hover:bg-yellow-500 hover:text-black transition-all duration-300"><i class="fab fa-facebook text-xl"></i></a>
                        <a href="#" class="w-12 h-12 bg-gray-800 rounded-2xl flex items-center justify-center hover:bg-yellow-500 hover:text-black transition-all duration-300"><i class="fab fa-whatsapp text-xl"></i></a>
                    </div>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-white mb-6">Jam Operasional</h4>
                    <div class="space-y-2 text-gray-400">
                        <p><i class="fas fa-clock mr-3 text-yellow-400"></i>Senin - Minggu: 10:00 - 22:00</p>
                        <p><strong>Buka setiap hari!</strong></p>
                    </div>
                </div>
                <div>
                    <h4 class="text-xl font-bold text-white mb-6">Kontak</h4>
                    <div class="space-y-2 text-gray-400">
                        <p><i class="fas fa-phone mr-3 text-yellow-400"></i>+62 812-3456-7890</p>
                        <p><i class="fas fa-envelope mr-3 text-yellow-400"></i>hello@identikcafe.com</p>
                        <p><i class="fas fa-map-marker-alt mr-3 text-yellow-400"></i>Jl. Inkopad blok J,Kecamatan Tajurhalang,Kabupaten Bogor,16320</p>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-500">
                <p>&copy; 2026 Identik Cafe. Premium Dining Experience. Powered by Kiporu's team.</p>
            </div>
        </div>
    </footer>
</body>
</html>
<?php /**PATH C:\laragon\www\cafe-aroma\resources\views/layouts/app.blade.php ENDPATH**/ ?>