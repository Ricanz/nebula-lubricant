<x-guest-layout>
    <!--Main Slider Start-->
    @include('../guest/components/slider')
    <!--Main Slider End-->

    <section class="about-one pt-10">
        <div class="container">
            <div class="row mb-5">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <h3 class="blog-details__title">VISI</h3>
                        <h4 class="blog-details__title__2">
                            Visi kami adalah menjadi perusahaan mitra terkemuka untuk solusi pengangkutan dan pengolajan limbah B3.
                        </h4>
                        <p class="blog-details__text-2 mb-4">
                            Yang berkelanjutan, menerapkan standar mutu yang berlaku dan mendukung dampak positif bagi lingkungan hidup.
                            Kami akan berusaha keras untuk mencapainya melalui prinsip dan teknologi terkini, penanganan yang aman dan bertanggung jawab, serta  komitmen terhadap kepuasan pelanggan.
                            Kami berikhtiar menciptakan nilai bagi semua pemangku kepentingan, termasuk karyawan, mitra kerjasama, pelanggan, dan masyarakat yang kami layani, sekaligus mengurangi dampak lingkungan dari sampah berbahaya dan pembuangannya.
                        </p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right justify-content-center">
                        <div class="about-one__img-box wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="about-one__img-one">
                                <img src="{{ asset('tguest/assets/images/resources/76.jpg') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div class="about-one__img-box wow slideInRight" data-wow-delay="100ms"
                            data-wow-duration="2500ms">
                            <div class="about-one__img-one">
                                <img src="{{ asset('tguest/assets/images/resources/5592274.jpg') }}"
                                    alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <h3 class="blog-details__title">MISI</h3>
                        <h4 class="blog-details__title__2">
                            Misi kami adalah untuk menyerahkan warisan abadi dari tanggung jawab lingkungan dan masa depan yang lebih bersih untuk generasi yang akan datang.
                        </h4>
                        <p class="blog-details__text-2 mb-4">
                            {{-- Sedangkan misi perusahaan ini adalah selalu ingin berkembang dan bergerak maju bersama pelanggan. --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Services One Start-->
    @include('../guest/components/service')
    <!--Services One End-->


    <!--Blog Details Start-->
    <section class="blog-details" id="blog">
        <div class="container">
            <div class="row">
                <h3 class="blog-details__title text-center mt-5 mb-4">Blog</h3>
                <hr />
            </div>
            <div>
                @foreach ($articles as $item)
                    <div class="row">
                        <div class="col-xl-3 col-lg-5 d-flex justify-content-center">
                            <div class="blog-details__left p-0">
                                <div class="blog-details__content__mt">
                                    <div class="blog-details__img">
                                        <img src="{{ asset($item->image) }}"
                                            alt="building" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-7">
                            <div class="blog-details__left">
                                <div class="blog-details__content">
                                    <p class="text-success mb-2" style="letter-spacing: 3px; text-transform: uppercase">
                                        FEATURED POST
                                    </p>
                                    <a href="{{ url('/article-detail/'.$item->slug) }}">
                                        <h3 class="blog-details__title">
                                            {{ $item->title }}
                                        </h3>
                                    </a>
                                    <p class="blog-details__text-2 mb-4 pt-0">
                                        {{ $item->short_desc }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                @endforeach
            </div>
        </div>
    </section>
    <!--Blog Details End-->

    @if (count($testimonials) > 0)
        
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
    @endif

    {{-- CTA Section --}}
    @include('../guest/components/cta')

    <section class="section-about" id="contact_us">
        <div class="container">
            <div class="about-content contact-new">
                <div class="row">
                    <div class="col-lg-6 col-xl-6 col-12 py-4">
                        <div class="about-details__content">
                            <p class="about-details__title" style="color: white">Kontak Kami</p>
                            <p><strong>Alamat</strong></p>
                            <p>Jl Iskandar Muda RT/RW: 005/002</p>
                            <p>Kel Kedaung Wetan </p>
                            <p>Kec Neglasari</p>
                            <p>Kotamadya Tangerang 15128</p>
                            <br>
                            <p>nebula.enviro@gmail.com</p>
                            <p>
                                <i class="fa fa-whatsapp my-float"></i>
                                0812 8888 9662
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-12 py-4">
                        <div class="about-details__content">
                            {{-- <p class="about-details__title">Nebula Enviro</p> --}}
                            <div class="container">
                                <div class="google-map-box">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.052487339406!2d106.62096421476872!3d-6.1236387955660945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4be4c3e6021e8dc9!2zNsKwMDcnMjUuMSJTIDEwNsKwMzcnMjMuNCJF!5e0!3m2!1sid!2sid!4v1675140128233!5m2!1sid!2sid"
                                        class="google-map__one" allowfullscreen></iframe>
                                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7934.104971641613!2d106.623167!3d-6.123639!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a01f35a280c85%3A0xbe67e04ef16c91ab!2sVihara%20Araya%20Dhamma!5e0!3m2!1sid!2sid!4v1680153833025!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
