<x-guest-layout>
    <!--Main Slider Start-->
    @include('../guest/components/slider')
    <!--Main Slider End-->
    <!-- Information Start -->
    <section class="section-information">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <img src="{{ asset('tguest/assets/images/resources/crystal-kwok-XUEdfpPIhXg-unsplash 1.png') }}"
                        alt="" class="info-detail_img" />
                </div>
            </div>
            <div class="info-details_content">
                <p class="info-title_title-1">Nebula Lubricant</p>
                <h3 class="info-title_title-2">
                    Informasi pengolahan limbah menjadi hasil olah terbaik
                </h3>
                <p class="info-title_text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip.
                </p>
                <div class="btn main__btn text-success">Baca Selengkapnya ></div>
            </div>
        </div>
    </section>
    <!-- Information End -->

    <!--Services One Start-->
    @include('../guest/components/service')
    <!--Services One End-->

    <!--Blog Details Start-->
    <section class="blog-details">
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
                                            <span class="text-success">Riyanti Maulya</span> l May
                                            23, 2022
                                        </a>
                                    </li>
                                </ul>
                                <h3 class="blog-details__title">
                                    Pengaruh limbah industri terhadap lingkungan masyarakat
                                    sekitar.
                                </h3>
                                <p class="blog-details__text-2 mb-4">
                                    Duis aute irure dolor in reprehenderit in voluptate velit
                                    esse cillum dolore eu fugiat nulla pariatur. Excepteur
                                    sint occaecat cupidatat non proident.
                                </p>
                                <button class="btn main__btn-2">Baca Selengkapnya ></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5">
                        <div class="sidebar">
                            <div class="d-flex justify-content-between">
                                <h3 class="blog-right__title">Artikel Lainnya</h3>
                                <p class="blog-right__text">Lihat Semuanya</p>
                            </div>
                            <div class="sidebar__single sidebar__post">
                                <ul class="sidebar__post-list list-unstyled">
                                    <li>
                                        <div class="sidebar__post-content">
                                            <p class="post-by">
                                                Oleh
                                                <span class="text-success">Riyanti Maulya</span> Aug
                                                23, 2021
                                            </p>
                                            <h3>
                                                <a href="detailArticle.html" class="post-text">
                                                    9 Cara untuk mengetahui jenis limbah yang
                                                    berbahaya bagi lingkungan.
                                                </a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-content">
                                            <p class="post-by">
                                                Oleh
                                                <span class="text-success">Riyanti Maulya</span> Aug
                                                23, 2021
                                            </p>
                                            <h3>
                                                <a href="detailArticle.html" class="post-text">
                                                    9 Cara untuk mengetahui jenis limbah yang
                                                    berbahaya bagi lingkungan.
                                                </a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-content">
                                            <p class="post-by">
                                                Oleh
                                                <span class="text-success">Riyanti Maulya</span> Aug
                                                23, 2021
                                            </p>
                                            <h3>
                                                <a href="detailArticle.html" class="post-text">
                                                    9 Cara untuk mengetahui jenis limbah yang
                                                    berbahaya bagi lingkungan.
                                                </a>
                                            </h3>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar__post-content">
                                            <p class="post-by">
                                                Oleh
                                                <span class="text-success">Riyanti Maulya</span> Aug
                                                23, 2021
                                            </p>
                                            <h3>
                                                <a href="detailArticle.html" class="post-text">
                                                    9 Cara untuk mengetahui jenis limbah yang
                                                    berbahaya bagi lingkungan.
                                                </a>
                                            </h3>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
                                We are a community of content writers who share their
                                learnings
                            </h3>
                            <p class="about-details__text-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua.
                            </p>
                            <a href="article.html" class="about-details__link">Read More >
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-12 py-4">
                        <div class="about-details__content">
                            <p class="about-details__title">Visi</p>
                            <h3 class="about-details__title-2">
                                Creating valuable content for creatives all around the world
                            </h3>
                            <p class="about-details__text-2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
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
                            <div class="brand-one__single">
                                <div class="brand-one__img">
                                    <img src="{{ asset('tguest/assets/images/brand/Logo-1.png') }}" alt="" />
                                </div>
                            </div>
                            <!--Brand One Single-->
                            <div class="brand-one__single">
                                <div class="brand-one__img">
                                    <img src="{{ asset('tguest/assets/images/brand/Logo-2.png') }}" alt="" />
                                </div>
                            </div>
                            <!--Brand One Single-->
                            <div class="brand-one__single">
                                <div class="brand-one__img">
                                    <img src="{{ asset('tguest/assets/images/brand/Logo-3.png') }}" alt="" />
                                </div>
                            </div>
                            <!--Brand One Single-->
                            <div class="brand-one__single">
                                <div class="brand-one__img">
                                    <img src="{{ asset('tguest/assets/images/brand/Logo-4.png') }}" alt="" />
                                </div>
                            </div>
                            <!--Brand One Single-->
                            <div class="brand-one__single">
                                <div class="brand-one__img">
                                    <img src="{{ asset('tguest/assets/images/brand/Logo-5.png') }}" alt="" />
                                </div>
                            </div>
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
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text">
                                                Lorem ipsum is simply free text dolor sit amet,
                                                consect notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="{{ asset('tguest/assets/images/testimonial/testimonial-1-1.jpg') }}"
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
                                                    Sarah Albert
                                                </h4>
                                                <p class="testimonial-one__client-sub-title">
                                                    Customer
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text">
                                                Lorem ipsum is simply free text dolor sit amet,
                                                consect notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="{{ asset('tguest/assets/images/testimonial/testimonial-1-2.jpg') }}"
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
                                                    Kevin Martin
                                                </h4>
                                                <p class="testimonial-one__client-sub-title">
                                                    Customer
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text">
                                                Lorem ipsum is simply free text dolor sit amet,
                                                consect notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="{{ asset('tguest/assets/images/testimonial/testimonial-1-3.jpg') }}"
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
                                                    Aleesha Brown
                                                </h4>
                                                <p class="testimonial-one__client-sub-title">
                                                    Customer
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text">
                                                Lorem ipsum is simply free text dolor sit amet,
                                                consect notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="assets/images/testimonial/testimonial-1-4.jpg"
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
                                                    Mike Hardson
                                                </h4>
                                                <p class="testimonial-one__client-sub-title">
                                                    Customer
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text">
                                                Lorem ipsum is simply free text dolor sit amet,
                                                consect notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="{{ asset('tguest/assets/images/testimonial/testimonial-1-5.jpg') }}"
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
                                                    Jolie Michale
                                                </h4>
                                                <p class="testimonial-one__client-sub-title">
                                                    Customer
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Testimonial One Single End-->
                                <!--Testimonial One Single Start-->
                                <div class="item">
                                    <div class="testimonial-one__single">
                                        <div class="testimonial-one__content">
                                            <p class="testimonial-one__text">
                                                Lorem ipsum is simply free text dolor sit amet,
                                                consect notted adipisicing elit sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <div class="testimonial-one__client-info">
                                                <div class="testimonial-one__client-img">
                                                    <img src="{{ asset('tguest/assets/images/testimonial/testimonial-1-6.jpg') }}"
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
                                                    David Smith
                                                </h4>
                                                <p class="testimonial-one__client-sub-title">
                                                    Customer
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
