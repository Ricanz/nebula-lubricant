<x-guest-layout>
    <section class="section-about">
        <div class="container">
            <div class="overflow-hidden">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-3 bg-success text-success">x</div>
                    <div class="col-5 bg-warning text-warning">x</div>
                    <div class="col-2"></div>
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
                            <div class="mt-3">
                                <a href="article.html" class="about-details__link"
                                    >Read More >
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-6 col-12 py-4">
                        <div class="about-details__content">
                            <p class="about-details__title">Visi</p>
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

    <section class="about-one pt-0">
        <div class="container">
            <div class="row mb-5">
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <h3 class="blog-details__title">Memiliki tim yang kreatif.</h3>
                        <h4 class="blog-details__title__2">
                            Kekuatan terbesar kami ada pada tim, yang menjadikan setiap
                            pekerjaan lebih fresh dan tajam.
                        </h4>
                        <p class="blog-details__text-2 mb-4">
                            Kreativitas merupakan akar dari segalanya. Hal tersebut dapat
                            membuat pekerjaan yang ada pada perusahaan kami menjadi lebih
                            baru dan fresh. Mengandalkan setiap kreativitas dan
                            implementasi ke pengolahan akan membuat hasil pengolahan
                            menjadi lebih baik. Di samping itu, tim kami juga memberikan
                            informasi seputar pengolahan limbah pada situs ini dengan
                            penulisan artikel yang kekinian.
                        </p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__right justify-content-center">
                        <div
                            class="about-one__img-box wow slideInRight"
                            data-wow-delay="100ms"
                            data-wow-duration="2500ms"
                        >
                            <div class="about-one__img-one">
                                <img
                                    src="{{ asset('tguest/assets/images/resources/photo-of-people-doing-handshakes-3183197.png') }}"
                                    alt=""
                                />
                            </div>
                            <div class="about-one__video-link">
                                <div class="about-one__video-icon">
                                    <span class="shape_about"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-one__right">
                        <div
                            class="about-one__img-box wow slideInRight"
                            data-wow-delay="100ms"
                            data-wow-duration="2500ms"
                        >
                            <div class="about-one__img-one">
                                <img
                                    src="{{ asset('tguest/assets/images/resources/photo-of-people-doing-handshakes-3183197.png') }}"
                                    alt=""
                                />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-one__left">
                        <h3 class="blog-details__title">Memiliki tim yang kreatif.</h3>
                        <h4 class="blog-details__title__2">
                            Kekuatan terbesar kami ada pada tim, yang menjadikan setiap
                            pekerjaan lebih fresh dan tajam.
                        </h4>
                        <p class="blog-details__text-2 mb-4">
                            Kreativitas merupakan akar dari segalanya. Hal tersebut dapat
                            membuat pekerjaan yang ada pada perusahaan kami menjadi lebih
                            baru dan fresh. Mengandalkan setiap kreativitas dan
                            implementasi ke pengolahan akan membuat hasil pengolahan
                            menjadi lebih baik. Di samping itu, tim kami juga memberikan
                            informasi seputar pengolahan limbah pada situs ini dengan
                            penulisan artikel yang kekinian.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA Section --}}
    @include('../guest/components/cta')
</x-guest-layout>