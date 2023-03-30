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
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>
