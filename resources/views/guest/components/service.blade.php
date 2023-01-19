<section class="services-onee">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title">Penawaran Kami</h2>
        </div>
        <div class="row">
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="services-one__single">
                    <div class="services-one__icons">
                        <img src="{{ asset('tguest/assets/images/icon/Icon-1.png') }}" alt="" />
                    </div>
                    <div class="services-one__content">
                        <h3 class="services-one__title">{{ \App\Helpers\Utils::get_offer()[0]->title }}</h3>
                        <p class="services-one__text">
                            {{ \App\Helpers\Utils::get_offer()[0]->description }}
                        </p>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="services-one__single">
                    <div class="services-one__img-box">
                        <div class="services-one__icons">
                            <img src="{{ asset('tguest/assets/images/icon/icon-2.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="services-one__content">
                        <h3 class="services-one__title">{{ \App\Helpers\Utils::get_offer()[1]->title }}</h3>
                        <p class="services-one__text">
                            {{ \App\Helpers\Utils::get_offer()[1]->description }}
                        </p>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="services-one__single">
                    <div class="services-one__img-box">
                        <div class="services-one__icons">
                            <img src="{{ asset('tguest/assets/images/icon/icon-3.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="services-one__content">
                        <h3 class="services-one__title">{{ \App\Helpers\Utils::get_offer()[2]->title }}</h3>
                        <p class="services-one__text">
                            {{ \App\Helpers\Utils::get_offer()[2]->description }}
                        </p>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
            <!--Services One Single Start-->
            <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
                <div class="services-one__single">
                    <div class="services-one__img-box">
                        <div class="services-one__icons">
                            <img src="{{ asset('tguest/assets/images/icon/icon-4.png') }}" alt="" />
                        </div>
                    </div>
                    <div class="services-one__content">
                        <h3 class="services-one__title">{{ \App\Helpers\Utils::get_offer()[3]->title }}</h3>
                        <p class="services-one__text">
                            {{ \App\Helpers\Utils::get_offer()[3]->description }}
                        </p>
                    </div>
                </div>
            </div>
            <!--Services One Single End-->
        </div>
    </div>
</section>