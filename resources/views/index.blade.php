@extends('layout.mainweb')

@section('title')
    PIMUS 13
@endsection

@section('style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
@endsection

@section('content')
    <!-- Main Banner -->
    <div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
        <div class="container">
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
                                <h6><img src="{{ url('assets/images/logo/LOGO PIMUS 14-03.png') }}" alt=""> </h6>
                                <div class="desc-background">
                                    <p style="color: #fff; font-weight: bold;">THE NEW GAME : DISCOVER POTENTIAL TO UNLOCK
                                        YOUR UNIVERSE</p>
                                    <p style="color: #fff;text-align:justify !important; text-justify:inter-word" font
                                        size="1">Para <i>player</i> secara tiba-tiba masuk ke dalam dunia game,
                                        dimana game tersebut belum aktif.
                                        Para <i>player</i> harus mengaktifkan game terlebih dahulu,
                                        karena satu-satunya cara para <i>Player</i> dapat pulang ke
                                        dunia asal adalah dengan menyelesaikan game tersebut.
                                        Setelah game berhasil diaktifkan maka terbuka beberapa <i>Map</i>
                                        berbeda, dimana para <i>Player</i> harus menyelesaikan <i>Map</i> untuk
                                        dapat mengumpulkan komponen kunci yang menjadi jalan mereka
                                        untuk kembali pulang ke dunia asal mereka.
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
                                        <i><img src="{{ url('assets/images/logo/siluet.png') }}" alt="person graphic"
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
                <div class="mt-3 desc-background w-50 text-center ">
                    <h2 style="color: #F2E399; text-align: center; text-transform: none; font-family: CarnivaleeFreakshow; font-weight:bold; font-size: 50px;"
                        data-aos="zoom-in">pekan
                        ilmiah mahasiswa</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 align-self-center  wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="left-image drive-responsive">
                        <iframe src="https://drive.google.com/file/d/1_ZlZre5YX7lt7cqatA618Igm9CUYuywM/preview"
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
                            untuk menjadi perwakilan pada kompetisi nasional. Di tahun yang kesebelas ini, PIMUS
                            memiliki 8
                            cabang lomba yang terdiri
                            dari PKM 4 Bidang (PKM RSH, PKM K, PKM PM, PKM KC), Pemilihan Mahasiswa
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
        <div class="mt-3 desc-background w-50 text-center ">
            <h1 style="color: #F2E399; text-align: center; text-transform: none; font-family: CarnivaleeFreakshow; font-weight:bold; font-size: 50px;">
                timeline pimus xiv</h1>
        </div>
    </div>
    <link rel="stylesheet" href="{{ url('/assets/css/timeline.css') }}">
    <div class="content">
        <div class="timeline col-lg-6 wow fadeInRight">
            <ul>
                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">10-31 Oktober 2023</h3>
                        <h1 class="text-center">Open Registration </h1>
                    </div>
                </li>
                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">6-7 November 2023</h3>
                        <h1 class="text-center">Technical Meeting</h1>
                    </div>
                </li>
                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">10-11 November 2023</h3>
                        <h1>Klinik PKM, PILMAPRES, dan Video Digital Pendidikan</h1>
                    </div>
                </li>
                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">15 November 2023</h3>
                        <h1>Pengumpulan Proposal untuk di Revisi (PKM dan Pilmapres)</h1>
                    </div>
                </li>
                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">24 November 2023</h3>
                        <h1>Pengumpulan Final Proposal (PKM dan Pilmapres)</h1>
                    </div>
                </li>
                {{--

                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">30 Oktober 2021</h3>
                        <h1>Technical Meeting Debat Indonesia, Debat Inggris, K-MIPA, Poster</h1>
                    </div>
                </li>

                --}}
                <li>
                    <div class="timeline-content">
                        <h3 style="color: #ffffff" class="date">27 November-1 Desember 2023</h3>
                        <h1>Acara Perlombaan PIMUS XIII</h1>
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
