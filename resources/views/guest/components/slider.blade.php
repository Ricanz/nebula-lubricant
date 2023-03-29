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
        <div class="swiper-wrapper">
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
            {{-- <div class="swiper-slide">
                <div class="image-layer"
                    style="
                            background-image: url({{ asset('tguest/assets/images/backgrounds/main-slider-1-2.jpg') }});
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
                                    Bagaimana cara mengolah limbah yang baik
                                </h2>
                                <p class="main-slider__body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing
                                    elit. Itaque distinctio reiciendis, odio sapiente
                                    quisquam molestias magni esse a sit deserunt ullam
                                    voluptate, nam incidunt laudantium corrupti commodi.
                                </p>
                                <div class="main-slider__btn-box">
                                    <a href="article.html" class="btn main__btn">Baca Artikel >
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-layer"
                    style="
                            background-image: url({{ 'assets/images/backgrounds/main-slider-1-3.jpg' }});
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
                                    Bagaimana cara mengolah limbah yang baik
                                </h2>
                                <p class="main-slider__body">
                                    Lorem ipsum dolor, sit amet consectetur adipisicing
                                    elit. Itaque distinctio reiciendis, odio sapiente
                                    quisquam molestias magni esse a sit deserunt ullam
                                    voluptate, nam incidunt laudantium corrupti commodi.
                                </p>
                                <div class="main-slider__btn-box">
                                    <a href="" class="btn main__btn">Baca Artikel > </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

        {{-- <div class="swiper-pagination" id="main-slider-pagination"></div> --}}

        <!-- If we need navigation buttons -->
        <div class="main-slider__nav">
            <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                <i class="icon-right-arrow"></i>
            </div>
            <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                <i class="icon-right-arrow"></i>
            </div>
        </div>
    </div>
</section>