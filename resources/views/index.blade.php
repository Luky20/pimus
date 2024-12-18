@extends('layout.mainweb')

@section('title')
    PIMUS 14
@endsection

@section('style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@endsection
@section('content')
    <!-- Main Banner -->
    
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container index-container">
        <div >
            <img src="{{ url('assets/images/logo/LOGO PIMUS 14-03.png') }}" alt="" style="display:block;">
        </div>
            @if (session('status'))
                <div class="alert alert-danger">
                    {{ session('status') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6 align-self-center">
                            <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
                                <div class="desc-background">
                                    <p style="color: #fff; font-weight: bold;">Magical Carnival: The Art of Incantation</p>
                                    <p style="color: #fff;text-align:justify !important; text-justify:inter-word" font
                                        size="1">PIMUS XIV menggabungkan konsep ilmu pengetahuan dan sihir dalam kompetisi kreatif. Peserta, yang digambarkan sebagai <i>Wizards</i> dan <i>Witches</i>, akan berkompetisi menciptakan <i>"spells"</i> dan <i>"artifacts" </i>menggunakan imajinasi mereka. Acara ini diibaratkan seperti <i>Carnival</i>, tempat penuh kebebasan berekspresi dan kreativitas. UBAYA diumpamakan sebagai Hogwarts, akademi para penyihir, di mana para peserta dapat menunjukkan inovasi dan keterampilan. PIMUS XIV menjadi media untuk mengekspresikan ide-ide kreatif melalui <i>"The Art of Abracadabra"</i>. Kompetisi dalam PIMUS XIV kali ini dirancang untuk dapat memberikan ruang yang luas bagi peserta untuk mengeksplorasi imajinasi mereka.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                                <h6><img src="{{ url('assets/images/web/Bumper.png') }}" alt=""> </h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Banner -->

    <!-- Fun Fact Pimus -->
    <div id="about" class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-image wow fadeIn maskot" data-wow-duration="1s" data-wow-delay="0.2s">
                        <img src="{{ url('assets/images/web/Owl.png') }}" alt="person graphic">
                    </div>
                </div>
                <div class="col-lg-8 align-self-center desc-background">
                    <div class="services">
                        <div class="row">
                            <div class="col-lg-6">
                                <div data-tilt class="d-flex item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="icon">
                                        <i class="fas fa-trophy" style="height: 175px; width: 130px; color: #F2E399;"></i>
                                    </div>
                                    <div class="right-text align-self-center mb-1">
                                        <p>Fakultas dengan perolehan gelar Juara Umum terbanyak
                                            adalah Fakultas Teknik</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div data-tilt class="d-flex item wow fadeIn" data-wow-duration="1s" data-wow-delay="0.7s">
                                    <div class="icon">
                                        <i class="fas fa-film" style="height: 175px; width: 130px; color: #F2E399;"></i>
                                    </div>
                                    <div class="right-text h-100 align-self-center">
                                        <p>Video Digital Pendidikan merupakan cabang baru yang
                                            menggantikan cabang Film
                                            Pendek pada PIMUS sebelumnya</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div data-tilt class="d-flex item wow fadeIn d-flex" data-wow-duration="1s"
                                    data-wow-delay="0.9s">
                                    <div class="icon">
                                        {{-- <i class="fas fa-hand-holding-heart"
                                            style="height: 175px; width: 100px; color: #faba8e;"></i> --}}
                                        <i><img src="{{ url('assets/images/web/Owl.png') }}" alt="person graphic"
                                                class="align-items-center mt-4"
                                                style="height: 155px; width: 130px; color: #F2E399;"></i>
                                    </div>
                                    <div class="right-text align-self-center">
                                        <p>Maskot PIMUS merupakan burung hantu yang bernama Dr. Pimsy. Burung hantu
                                            merupakan hewan yang melambangkan pengetahuan, kebijaksanaan, dan pembawa
                                            perubahan</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div data-tilt class="d-flex item wow fadeIn" data-wow-duration="1s" data-wow-delay="1.1s">
                                    <div class="icon h-100 mt-3">
                                        <i class="fas fa-hands-helping"
                                            style="height: 180px; width: 130px; color: #F2E399;"></i>
                                    </div>
                                    <div class="right-text align-self-center">
                                        <p>Logo PIMUS berupa tangan-tangan dengan warna yang melambangkan setiap fakultas
                                            dan politeknik saling menggenggam satu sama lain dengan piala di bagian tengah
                                            yang diperebutkan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fun Fact Pimus -->

    <!-- Throwback Pimus -->
    <div id="services" class="our-services section">
        <div class="container">

            <div class="mt-5 mb-5 d-flex w-100 justify-content-center">
                <div class="mt-5 desc-background-pim w-80 text-center ">
                    <h2 style="color: #F2E399; text-align: center; text-transform: none; font-family: CarnivaleeFreakshow; font-weight:bold; font-size: 50px;"
                        data-aos="zoom-in">pekan
                        ilmiah mahasiswa</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="left-image drive-responsive">
                        <iframe src="https://drive.google.com/file/d/1tOjvGIXU4O_pJ5MuVx-faQmIomrfqUwZ/preview"
                            width="640" height="400" allow="autoplay"></iframe>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s">

                    <div class="section- desc-background">
                        <p style="color: #fff; text-align:justify !important; " class="text-justify">Pekan Ilmiah
                            Mahasiswa
                            Universitas Surabaya atau PIMUS merupakan acara tahunan yang diselenggarakan
                            oleh Direktorat Pengembangan Kemahasiswaan Universitas Surabaya dengan tujuan untuk
                            menyaring
                            mahasiswa/i terbaik UBAYA
                            untuk menjadi perwakilan pada kompetisi nasional. Di tahun yang ke-14 ini, PIMUS
                            memiliki 11
                            cabang lomba yang terdiri
                            dari PKM 4 Bidang (PKM RSH, PKM K, PKM PM, PKM RE), Pemilihan Mahasiswa
                            Berprestasi, Video Digital Pendidikan, Ide Bisnis, Poster Digital Pendidikan,
                            Kompetisi MIPAS, Debat Bahasa Inggris, dan Debat Bahasa Indonesia. Yuk daftarkan dirimu
                            sekarang, dapatkan pengalaman berharga, kesempatan menjadi
                            perwakilan UBAYA, dan total hadiah puluhan juta rupiah!</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- End Throwback Pimus -->

   <!-- Timeline Pimus -->
   <div class="mt-5 d-flex w-100 justify-content-center">
        <div class="mt-5 w-75">
            <img src="{{ asset('assets/images/timeline font-07.png') }}" alt="Timeline Pimus XIV">
        </div>
    </div>
    <link rel="stylesheet" href="{{ url('/assets/css/timeline.css') }}">
    <div class="content">
        <div class="timeline col-lg-6 wow fadeInRight">
            <ul>
                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">7 Oktober 2024 - 10 November 2024</h3>
                        <h1 class="text-center">Open Registration </h1>
                    </div>
                </li>
                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">5 - 8 November 2024</h3>
                        <h1 class="text-center">Technical Meeting</h1>
                    </div>
                </li>
                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">5 - 8 November 2024</h3>
                        <h1>Klinik PKM, Ide Bisnis, dan Video Digital Pendidikan</h1>
                    </div>
                </li>
                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">21 November 2024</h3>
                        <h1>Pengumpulan Proposal untuk di Revisi (Ide Bisnis)</h1>
                    </div>
                </li>
                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">23 November 2024</h3>
                        <h1>Pengumpulan Proposal untuk di Revisi (PKM)</h1>
                    </div>
                </li>
                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">3 Desember 2024</h3>
                        <h1>Pengumpulan Final Proposal (PKM & Ide Bisnis)</h1>
                    </div>
                </li>
                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">6 Desember 2024</h3>
                        <h1>Pengumpulan Karya Poster + Kelengkapannya (POSTER)</h1>
                    </div>
                </li>
                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">5 Desember 2024</h3>
                        <h1>Pengumpulan Surat Pernyataan Orisinalitas, Gagasan Kreatif/Naskah Produk Inovatif, PPT Gagasan Kreatif/Naskah Produk Inovatif, dan Video (PILMAPRES)</h1>
                    </div>
                </li>

                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">6 Desember 2024</h3>
                        <h1>Pengumpulan hasil karya beserta kelengkapannya (Video Digital Pendidikan)</h1>
                    </div>
                </li>

                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">9 Desember 2024</h3>
                        <h1>Upload Video di Instagram (PILMAPRES)</h1>
                    </div>
                </li>
                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">10 Desember 2024</h3>
                        <h1>Pengunggahan poster bagi tim finalis (POSTER)</h1>
                    </div>
                </li>

                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">10 Desember 2024</h3>
                        <h1>Pengunggahan hasil karya di instagram (Video Digital Pendidikan)</h1>
                    </div>
                </li>

                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">9 Desember - 13 Desember 2024</h3>
                        <h1>Acara Perlombaan PIMUS XIV</h1>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Timeline Pimus -->
@endsection

@section('script')
    <script>
        AOS.init();
    </script>
@endsection
