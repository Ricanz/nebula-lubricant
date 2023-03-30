<footer class="site-footer">
    <div class="site-footer__top">
        <div class="container">
            {{-- <div class="row mb-5">
                <div class="col-lg-6 col-md-12 col-12 text-lg-start text-md-start text-center">
                    <h3 class="p-0">
                        <a href="index.html" class="footer-title_link text-white">Nebula Lubricant</a>
                    </h3>
                </div>
                <div class="col-lg-6 col-md-12 col-12 text-lg-end text-md-start text-center">
                    <a href="{{ url('/') }}" class="footer-link p-0">Home</a>
                    <a href="{{ url('/article') }}" class="footer-link">Blog</a>
                    <a href="{{ url('/about') }}" class="footer-link">About Us</a>
                    <a href="{{ url('/contact') }}" class="footer-link">Contact Us</a>
                </div>
            </div> --}}
            <div class="site-footer__top-inner" id="konsultasi_gratis">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 wow fadeInUp text-lg-start text-md-start text-center"
                        data-wow-delay="100ms">
                        <div class="footer-widget__column footer-widget__about">
                            <h3 class="footer-widget__about-text">
                                Jika ingin bertanya dan mengetahui apa yang dapat kami bantu untuk pengelolaan limbah Anda segera hubungi kami
                            </h3>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 wow fadeInUp d-flex align-items-center"
                        data-wow-delay="400ms">
                        <div class="footer-widget__column footer-widget__Contact">
                            <form class="row g-2" method="POST" action="{{ route('subscribe') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="col-auto">
                                    <input type="email" name="email" id="email" class="form-control footer-input_email"
                                        placeholder="Masukan email" />
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn main__btn">
                                        Konsultasi Gratis
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-12 footer-contact text-lg-start text-md-start text-center">
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
        </div>
    </div>
</footer>