<x-guest-layout>
    <!--Main Slider Start-->
    @include('../guest/components/slider')
    <!--Main Slider End-->


    <section class="contact-two">
        <div class="container">
            <div class="contact-details">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="contact-details__single pb-3">
                            <div class="contact-details__text">
                                <p class="contact-title">V I S I</p>
                                {{-- <h3 class="contact-text">Visi</h3> --}}
                                <p class="contact-sub-text">
                                    Visi kami adalah menjadi perusahaan mitra terkemuka untuk solusi pengangkutan dan pengolajan limbah B3.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="contact-details__single pb-3">
                            <div class="contact-details__text">
                                <p class="contact-title">M I S I</p>
                                {{-- <h3 class="contact-text">Misi</h3> --}}
                                <p class="contact-sub-text">
                                    Misi kami adalah untuk menyerahkan warisan abadi dari tanggung jawab lingkungan dan masa depan yang lebih bersih untuk generasi yang akan datang.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Information Start -->
    {{-- <section class="section-information">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <img src="{{ asset(\App\Helpers\Utils::get_nebula_article()->image) }}"
                        alt="" class="info-detail_img" />
                </div>
            </div>
            <div class="info-details_content">
                <p class="info-title_title-1">Nebula Enviro</p>
                <h3 class="info-title_title-2">
                    {{ \App\Helpers\Utils::get_nebula_article()->title }}
                </h3>
                <p class="info-title_text">
                    {{ \App\Helpers\Utils::get_nebula_article()->short_desc }}
                </p>
                <a href="{{ url('/article-detail/'.\App\Helpers\Utils::get_nebula_article()->slug) }}" class="btn main__btn text-success">Baca Selengkapnya ></a>
            </div>
        </div>
    </section> --}}
    <!-- Information End -->

    <!--Services One Start-->
    @include('../guest/components/service')
    <!--Services One End-->

    <!--Blog Details Start-->
    {{-- <section class="blog-details">
        <div class="container">
            <div>
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <h3 class="blog-left__title">Artikel Pengolahan Limbah</h3>
                        <div class="blog-details__left">
                            <div class="blog-details__img">
                                <img src="{{ asset('tguest/assets/images/blog/white-concrete-building.png') }}"
                                    alt="building" />
                            </div>
                            <div class="blog-details__content">
                                <ul class="list-unstyled blog-details__meta">
                                    <li>
                                        <a href="article.html" class="post-by">
                                            Oleh
                                            <span class="text-success">Admin</span> {{ $primary_article->created_at->format('M d, Y') }}
                                        </a>
                                    </li>
                                </ul>
                                <h3 class="blog-details__title">
                                    {{ $primary_article->title }}
                                </h3>
                                <p class="blog-details__text-2 mb-4">
                                    {!! $primary_article->short_desc !!}
                                </p>
                                <a href="{{ url('/article-detail/'.$primary_article->slug) }}" class="btn main__btn-2">Baca Selengkapnya ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="sidebar">
                            <div class="d-flex justify-content-between">
                                <h3 class="blog-right__title">Artikel Lainnya</h3>
                                <a href="{{ url('/article') }}">
                                    <p class="blog-right__text">Lihat Semuanya</p>
                                </a>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <ul class="sidebar__post-list list-unstyled">
                                    @foreach ($articles as $item)
                                        <li>
                                            <div class="sidebar__post-content">
                                                <p class="post-by">
                                                    Oleh
                                                    <span class="text-success">Admin</span> {{ $item->created_at->format('M d, Y') }}
                                                </p>
                                                <h3>
                                                    <a href="{{ url('/article-detail/'.$item->slug) }}" class="post-text">
                                                        {{ $item->title }}
                                                    </a>
                                                </h3>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--Blog Details End-->

    <!-- About Start -->
    <section class="section-about">
        <div class="container">
            <div class="overflow-hidden">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-7 bg-warning text-warning">x</div>
                    <div class="col-3 bg-success text-success">x</div>
                </div>
            </div>
            <div class="about-content">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-12 py-4">
                        <div class="about-details__content">
                            <p class="about-details__title">Tentang Kami</p>
                            <h3 class="about-details__title-2">
                                Memberikan pelayanan untuk pengolahan dan informasi tentang
                                limbah.
                            </h3>
                            <p class="about-details__text-2">
                                Kami telah berhasil melayani jutaan liter permintaan pelumas
                                untuk berbagai bidang industri di Indonesia. Berbekal etos
                                kerja dan profesionalisme. Selalu mengupayakan yang terbaik
                                untuk setiap pelanggan. Kami yakin dapat membangun
                                kebersamaan bisnis jangka panjang dengan perusahaan Anda
                            </p>
                            <a href="{{ url('/about') }}" class="about-details__link">Baca Selengkapnya >
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-12 py-4">
                        <div class="about-details__content">
                            <p class="about-details__title">Nebula Enviro</p>
                            <h3 class="about-details__title-2">
                                Menjadi perusahaan pengolahan limbah terpercaya se-Indonesia
                            </h3>
                            <p class="about-details__text-2">
                                Dengan bisnis utama di bidang pelumas, berbekal pengalaman
                                itu, kami yakin akan mewujudkan visi dengan efektif dan
                                memperikan layanan terbaik kepada semua partner usaha kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

    <!--Brand One Start-->
    <section class="brand-one">
        <div class="brand-one__inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel"
                            data-owl-options='{
                            "margin": 0,
                            "smartSpeed": 700,
                            "loop":true,
                            "autoplay": 6000,
                            "nav":false,
                            "dots":false,
                            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                            "responsive":{
                                "0":{
                                    "items":1
                                },
                                "600":{
                                    "items":2
                                },
                                "800":{
                                    "items":3
                                },
                                "1024":{
                                    "items": 4
                                },
                                "1200":{
                                    "items": 5
                                }
                            }
                        }'>
                            <!--Brand One Single-->
                            @foreach ($clients as $item)
                                <div class="brand-one__single">
                                    <div class="brand-one__img">
                                        <img src="{{ asset($item->image) }}" alt="" />
                                    </div>
                                </div>
                            @endforeach
                            <!--Brand One Single-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->

    <!--Testimonial Three Start-->
    <section class="testimonial-three">
        <div class="container">
            <div class="testimonial-body">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-12">
                        <div class="testimonial-three__left">
                            <div class="section-title text-left">
                                <span class="section-title__tagline">TESTIMONIAL</span>
                                <h2 class="section-title__title">
                                    Kata mereka tentang website kami
                                </h2>
                                <p class="section-title__text">
                                    Testimoni dari pengalaman para pengguna website Nebula
                                    Lubricant.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-12">
                        <div class="testimonial-three__right">
                            <div class="testimonial-three__carousel thm-owl__carousel owl-theme owl-carousel"
                                data-owl-options='{
                                    "items": 3,
                                    "margin": 30,
                                    "smartSpeed": 700,
                                    "loop":true,
                                    "autoplay": 6000,
                                    "nav":true,
                                    "dots":false,
                                    "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                    "responsive":{
                                        "0":{
                                            "items":1
                                        },
                                        "768":{
                                            "items":1
                                        },
                                        "992":{
                                            "items":1
                                        }
                                    }
                                }'>
                                <!--Testimonial One Single Start-->
                                @foreach ($testimonials as $item)
                                    <div class="item">
                                        <div class="testimonial-one__single">
                                            <div class="testimonial-one__content">
                                                <p class="testimonial-one__text">
                                                    {{ $item->description }}
                                                </p>
                                                <div class="testimonial-one__client-info">
                                                    <div class="testimonial-one__client-img">
                                                        <img src="{{ asset($item->image) }}"
                                                            alt="" />
                                                        <div class="testimonial-one__quote">
                                                            <span class="icon-quote"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="testimonial-one__client-details-box">
                                                <div class="testimonial-one__client-details">
                                                    <h4 class="testimonial-one__client-name">
                                                        {{ $item->name }}
                                                    </h4>
                                                    <p class="testimonial-one__client-sub-title">
                                                        {{ $item->position }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                @endforeach
                                <!--Testimonial One Single End-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Three End-->

    {{-- CTA Section --}}
    @include('../guest/components/cta')
</x-guest-layout>
