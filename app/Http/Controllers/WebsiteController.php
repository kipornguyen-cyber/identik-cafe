<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function home()
    {
        return view('website.home');
    }

    public function gallery()
    {
        return view('website.gallery');
    }

    public function about()
    {
        return view('website.about');
    }

    public function contact()
    {
        return view('website.contact');
    }

    public function index()
    {
         return view('admin.contacts.index', compact('messages'));
    }

    public function show(ContactMessage $contactMessage)
    {
        return view('admin.contacts.show', compact('contactMessage'));
    }

    public function destroy(ContactMessage $contactMessage)
    {

        return view('admin.contacts.index', compact('messages'));
    }


    public function menu()
{
    // SECTION 1: MAKANAN UTAMA (12 items)
    $makanan_utama = [
        [
            'name' => 'Ayam Goreng Lengkuas',
            'price' => 'Rp 45.000',
            'image' => 'https://www.dapurkobe.co.id/wp-content/uploads/ayam-goreng-lengkuas.jpg'
        ],
        [
            'name' => 'Ayam Bakar Kecap Madu',
            'price' => 'Rp 48.000',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQI_d52OdcaWL_H8iBbVzLTzXSnl9vLkHElZg&s'
        ],
        [
            'name' => 'Ayam Penyet Sambal Bawang',
            'price' => 'Rp 42.000',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSno1a7-5ZaC2ha3jIhooNRDnFmxNPT4ZeE2A&s'
        ],
        [
            'name' => 'Lele Goreng Tepung',
            'price' => 'Rp 38.000',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQla8hlbIrd6HuHEbPOKh9iCehIgwODIK63Pg&s'
        ],
        [
            'name' => 'Lele Bakar Rica Rica',
            'price' => 'Rp 40.000',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRz9I6UHybWlx0V-W9hMtRaMwa-nrNJWleo5A&s'
        ],
        [
            'name' => 'Nila Bakar Kecap Manis',
            'price' => 'Rp 45.000',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXkpUx-QedwceGm1U5PRkSY2vK-U2ghx0xlQ&s'
        ],
        [
            'name' => 'Iga Bakar Pedas Manis',
            'price' => 'Rp 65.000',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQI_QQQ-km7FHYdUdYLPZj1hG-25L7Miww5Hg&s'
        ],
        [
            'name' => 'Sate Ayam Madura (10 Tusuk)',
            'price' => 'Rp 55.000',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSnGGnJcQp8pKNGHrzZvuNrSw4NxSIclCpcPQ&s'
        ],
        [
            'name' => 'Sate Kambing (10 Tusuk)',
            'price' => 'Rp 68.000',
            'image' => 'https://image.idntimes.com/post/20250529/satay-8884597-1920-f92567521a71a1e8e846a228594a2593-ea0d4a7d5cc72dea288b68edf2de8c47.jpg'
        ],
        [
            'name' => 'Gudeg Jogja Komplit',
            'price' => 'Rp 38.000',
            'image' => 'https://cdn-1.timesmedia.co.id/images/2022/12/21/gudeg-2.jpg'
        ],
        [
            'name' => 'Rendang Daging Sapi',
            'price' => 'Rp 75.000',
            'image' => 'https://assets.pikiran-rakyat.com/crop/0x0:0x0/720x0/webp/photo/2024/02/06/1844699204.jpg'
        ],
        [
            'name' => 'Nasi Goreng Seafood',
            'price' => 'Rp 58.000',
            'image' => 'https://assets.unileversolutions.com/recipes-v2/258059.jpg'
        ],
    ];

    // SECTION 2: CEMILAN (10 items)
    $cemilan = [
        [
            'name' => 'Kentang Goreng Krispi Besar',
            'price' => 'Rp 25.000',
            'image' => 'https://www.dapurkobe.co.id/wp-content/uploads/kentang-goreng-crispy.jpg'
        ],
        [
            'name' => 'Roti Bakar Coklat Keju',
            'price' => 'Rp 22.000',
            'image' => 'https://cdn1-production-images-kly.akamaized.net/dllyIPrTRJsVFkZMho30G2lzK-M=/469x260/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2469757/original/039967700_1543260105-resep-sederhana-roti-bakar-cokelat-keju-spesial-pakai-roti-tawar.jpg'
        ],
        [
            'name' => 'Indomie Goreng Special',
            'price' => 'Rp 28.000',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReAO_hVukOw2t5II1kBjdg8Z6x6PR1QY8XMQ&s'
        ],
        [
            'name' => 'Cireng Tepung Kanji Pedas',
            'price' => 'Rp 20.000',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOfdVOggPNZVclS6Sa8cn_5awHGgroAiqQ5w&s'
        ],
        [
            'name' => 'Tempe Goreng Tepung',
            'price' => 'Rp 18.000',
            'image' => 'https://www.dapurkobe.co.id/wp-content/uploads/tempe-goreng-kriuk-ala-tepung-kobe.jpg'
        ],
        [
            'name' => 'Tahu Isi Sayur',
            'price' => 'Rp 19.000',
            'image' => 'https://i.ytimg.com/vi/Bt5UCDiKqXI/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBi8lxUQnve6xtZHITGk2d2Pq9rxA'
        ],
        [
            'name' => 'Bakwan Sayur',
            'price' => 'Rp 18.000',
            'image' => 'https://cms.disway.id/uploads/a0806e451bcc75fae997404f18c3fb5d.png'
        ],
        [
            'name' => 'Pisang Goreng Madu',
            'price' => 'Rp 20.000',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQi32aEcMdyGwuVZQfWh1tueHR0BPVVmcdluw&s'
        ],
        [
            'name' => 'Martabak Mini Coklat',
            'price' => 'Rp 25.000',
            'image' => 'https://buckets.sasa.co.id/v1/AUTH_Assets/Assets/p/website/medias/page_medias/resep_martabak_mini_coklat_kacang.jpg'
        ],
        [
            'name' => 'Kerupuk Udang',
            'price' => 'Rp 15.000',
            'image' => 'https://images.alodokter.com/dk0z4ums3/image/upload/v1760598875/attached_image/kalori-kerupuk-udang-dan-cara-konsumsi-yang-sehat.jpg'
        ],
    ];

    // SECTION 3: MINUMAN (8 items)
    $minuman = [
        [
            'name' => 'Cappuccino Premium',
            'price' => 'Rp 35.000',
            'image' => 'https://api.omela.com/storage/1325/conversions/e68bad0655a2c75490ac4e1be59eaace-large.png'
        ],
        [
            'name' => 'Lemon Tea Segar',
            'price' => 'Rp 25.000',
            'image' => 'https://cdn.shopify.com/s/files/1/1146/8126/files/Lemon-Tea-Pictures_large.jpg?v=1503945632'
        ],
        [
            'name' => 'Kopi Hitam Tubruk',
            'price' => 'Rp 28.000',
            'image' => 'https://blue.kumparan.com/image/upload/fl_progressive,fl_lossy,c_fill,f_auto,q_auto:best,w_640/v1634025439/01gg9pqjs8ht0k27p13c2tyjx0.jpg'
        ],
        [
            'name' => 'Teh Tarik Original',
            'price' => 'Rp 22.000',
            'image' => 'https://awsimages.detik.net.id/community/media/visual/2025/05/03/teh-tarik-1746271200044_43.jpeg?w=600&q=90'
        ],
        [
            'name' => 'Es Jeruk Nipis',
            'price' => 'Rp 20.000',
            'image' => 'https://foto.kontan.co.id/Af65DnPyU1WaK9hSyL3zWGMVKhw=/smart/2024/03/14/1703599507p.jpg'
        ],
        [
            'name' => 'Jus Alpukat Susu',
            'price' => 'Rp 30.000',
            'image' => 'https://thumb.viva.id/vivabanyuwangi/665x374/2026/02/03/6981802dbd31e-jus-alpukat-susu-kedelai-minuman-sehat_banyuwangi.jpg'
        ],
        [
            'name' => 'Es Teh Manis',
            'price' => 'Rp 18.000',
            'image' => 'https://awsimages.detik.net.id/community/media/visual/2020/05/14/0af32d8b-36b7-4555-8e79-4fd54c98f795.jpeg?w=600&q=90'
        ],
        [
            'name' => 'Jus Jeruk Pure',
            'price' => 'Rp 28.000',
            'image' => 'https://awsimages.detik.net.id/community/media/visual/2020/07/17/jus-jeruk-1_43.jpeg?w=600&q=90'
        ],
    ];

    return view('website.menu', compact('makanan_utama', 'cemilan', 'minuman'));
}
}


