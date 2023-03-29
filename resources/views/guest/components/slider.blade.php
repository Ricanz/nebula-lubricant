<section class="main-slider clearfix">
    <div class="swiper-container thm-swiper__slider"
        data-swiper-options='{"slidesPerView": 1, "loop": true,
        "effect": "fade",
        "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
        },
        "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
        },
        "autoplay": {
        "delay": 5000
        }}'>
        
        {{-- Riyanti --}}
        {{-- <div class="swiper-wrapper">
            @foreach (\App\Helpers\Utils::primary_article() as $item)
            <div class="swiper-slide">
                <div class="image-layer"
                    style="
                            background-image: url({{ asset($item->image) }});
                        ">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-12">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">
                                    Pengolahan <b>LIMBAH</b>
                                </p>
                                <h2 class="main-slider__title">
                                    {{ $item->title }}
                                </h2>
                                <p class="main-slider__body">
                                    {{ $item->short_desc }}
                                </p>
                                <div class="main-slider__btn-box">
                                    <a href="{{ url('/article-detail/'.$item->slug) }}" class="btn main__btn">Baca Artikel > </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div> --}}

        {{-- Akong --}}
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="image-layer"
                    style="
                            background-image: url('https://nebula-enviro.id/storage/image/article/article_Sz94dr0D1675158820.jpg');
                        ">
                </div>
                <!-- /.image-layer -->
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-12">
                            <div class="main-slider__content">
                                <p class="main-slider__sub-title">
                                    Tentang <b>Kami</b>
                                </p>
                                <h2 class="main-slider__title">
                                    Nebula Enviro
                                </h2>
                                <p class="main-slider__body">
                                    Nebula Enviro adalah perusahaan penyedia terkini layanan pengangkutan dan pengumpulan limbah B3 dari rantai proses daur ulang limbah B3 sebagai solusi pengelolaan limbah berkelanjutan.
                                </p>
                                <div class="main-slider__btn-box">
                                    <a href="{{ url('/article-detail/profile') }}" class="btn main__btn">Baca Selanjutnya > </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="swiper-pagination" id="main-slider-pagination"></div> --}}

        <!-- If we need navigation buttons -->
        {{-- <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-right-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow"></i>
            </div>
        </div> --}}
    </div>
</section>