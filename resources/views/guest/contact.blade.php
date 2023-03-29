<x-guest-layout>
    <!--Contact Two Start-->
    <section class="cta-two" style="margin-top: 20px">
        <div class="container">
            <div class="row justify-content-lg-center text-center">
                <div class="col-lg-6 col-12">
                    <h2 class="cta-title__title">Hubungi kami!</h2>
                    <p class="cta-title__text">
                        Jika ingin informasi terbaru mengenai kami dan ingin menanyakan
                        informasi pengolahan limbah, klik tombol di bawah ini!
                    </p>
                    <a href="https://api.whatsapp.com/send?phone=6281288889662" class="btn main__btn">Hubungi</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section-about">
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
    <section class="contact-two">
        <div class="container">
            {{-- <div class="section-title text-center">
                <span class="section-title__tagline">KONTAK KAMI</span>
                <h2 class="section-title__title">Hubungi untuk informasi <br> lebih lanjut!</h2>
            </div> --}}
            {{-- <div class="contact-details">
                <div class="row">
                    <div class="col-xl-7 col-lg-6 col-md-6">
                        <div class="contact-details__single pb-3">
                            <div class="contact-details__text">
                                <p class="contact-title">Alamat</p>
                                <h3 class="contact-text">Jl. H. Zainuddin no 17 Kebayoran Baru.</h3>
                                <p class="contact-sub-text">Hubungi kami kapanpun dan di mana pun</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-6">
                        <div class="contact-details__single pb-3">
                            <div class="contact-details__text">
                                <p class="contact-title">Kontak</p>
                                <h3 class="contact-text">0821789039875</h3>
                                <p class="contact-sub-text">management@lubricant.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="contact-two__form-box">
                <form action="{{ route('subscribe') }}" method="POST" class="contact-two__form contact-form-validated"
                    novalidate="novalidate" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-form__input-box">
                                <input type="text" placeholder="Masukan Nama Lengkap" name="name">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-form__input-box">
                                <input type="email" placeholder="Masukan Email" name="email">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="contact-form__input-box">
                                <input type="text" placeholder="Masukan Nomor Telepon" name="phone">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12 col-12">
                            <div class="contact-form__input-box text-message-box">
                                <textarea name="message" placeholder="Kirim Pesan"></textarea>
                            </div>

                            <div class="contact-form__btn-box">
                                <button type="submit" class="btn main__btn btn-block w-100">
                                    Kirim Pesan
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Contact Two End-->


    <!--Google Map Start-->
    {{-- <section class="google-map">
        <div class="container">
            <div class="google-map-box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.052487339406!2d106.62096421476872!3d-6.1236387955660945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4be4c3e6021e8dc9!2zNsKwMDcnMjUuMSJTIDEwNsKwMzcnMjMuNCJF!5e0!3m2!1sid!2sid!4v1675140128233!5m2!1sid!2sid"
                    class="google-map__one" allowfullscreen></iframe>
            </div>
        </div>
    </section> --}}
    <!--Google Map End-->
</x-guest-layout>
