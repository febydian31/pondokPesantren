@extends('layouts.frontend.app', ['title' => 'Halaman Tentang Kami'])

@section('content')
    <section class="top">
        <div class="artikel">
            <div class="judul container">
                <h1>Panti Asuhan dan Pondok Pesantren Zuhriyah</h1>
                <p>Sesuai Amanah dari Alm. H. Moh. Djamhuri Bin H. Moh Fadhil keinginanannya mendirikan Pondok Pesantren di
                    daearah kelarihan beliau di Rejodani,Ngaglik, Sleman, D I Yogyakarta, agar di daerah tersebut seperti
                    suasana pada zaman beliau masih muda di daerah tersebut kegiatan keagamaan berupa Peasntren yang cukup
                    makmur, tetapai pada zaman beliau sudah tua kegiatan tersebut mulai surut dan keinginan tersebut belum
                    dapat teralisasi sampai wafat, maka para ahli waris beliau merealisasikan amanah tersebut dengan
                    mendirikan Panti Asuhan dan Pondok Pesantren . yang berwawasan Islami. Kemudian pada Tahun 2000 di
                    dirikan Yayasan Fadhilatul Djamhuriyah yang berorganisasikan anggota keluarga Bani Djamhuri. Pada Tahun
                    2000 itu juga Yayasan Fadhilatul Djamhuriyah mewakafkan tanah untuk mendirikan Panti Asuhan dan Pondok
                    Pesantren Zuhriyyah yang di Asuh dan dikelola oleh Ibu Ustajah Dra. Hj. Syamsiyah, M.Pd. I. Yang
                    sekaligus cucu mantu dari Alm.H. Moh. Djamhoeri.</p>
                <p>Pada Tahun 2001 PAPP ZUHRIYAH telah terdaftar di Kementrian Sosial dan Kementrian Agama sampai saat ini,
                    dan sudah beberapa kali menjadi juara I lomba kebersihan Pondok Pesantren se Kabupaten Sleman dan D I
                    Yogyakarta.</p>
            </div>
        </div>
    </section>

    <section id="services" class=" services section">
        <div class="container section-title judul-artikel" data-aos="fade-up">
            <div><span>Visi & Misi</span></div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card isi program-card">
                        <h3>Visi</h3>
                        <p>TERWUJUDNYA SANTRI PENGHAFAL QUR’AN YANG RELIGIUS, BERINTEGRITAS, BERKOMPETEN, DAN BERWAWASAN
                            GLOBAL</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card isi program-card">
                        <h3>Misi</h3>
                        <ul>
                            <li>MENJADIKAN MUSLIM BERKARAKTER RELIGIUS BERAQIDAH AHLUSSUNNAH WAL JAMAAH</li>
                            <li>MEMBANGUN PRIBADI SANTRI YANG BERINTEGRITAS TINGGI</li>
                            <li>MELAKSANAKAN PENDIDIKAN TERPADU YANG BERKEARIFAN LOKAL DAN BERWAWASAN GLOBAL</li>
                            <li>MENGHANTARKAN SANTRI YANG BERKOMPETEN DALAM BERILMU DAN BERAMAL</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="program services section">
        <div class="container section-title judul-artikel" data-aos="fade-up">
            <div><span>Program</span></div>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card program-card">
                        <h5>Pendidikan Tahfidzul Qur’an dan Madrasah Diniyah</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card program-card">
                        <h5>Madrasah Formal (MTs/MA) dan Bimbingan Belajar Al-Qur’an</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card program-card">
                        <h5>Pelatihan kemandirian, akhlak, dan kepemimpinan</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services section">
        <div class="container section-title judul-artikel" data-aos="fade-up">
            <div><span>Struktur Organisasi</span></div>
        </div>
        <div class="container card struktur col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <img src="{{ asset('images/organisasion.jpg') }}" alt="">
        </div>
    </section>
@endsection
