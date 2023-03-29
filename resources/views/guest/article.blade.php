<x-guest-layout>

    <!--Blog Details Start-->
    <section class="banner__blog-details bg-banner-article">
        <div class="container">
            <div>
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="blog-details__left">
                            <div class="blog-details__content__mt">
                                <p class="text-dark mb-2" style="letter-spacing: 3px; text-transform: uppercase">
                                    PRIMARY POST
                                </p>
                                <h3 class="blog-details__title">
                                    {{ $primary->title }}
                                </h3>
                                <ul class="list-unstyled blog-details__meta">
                                    <li>
                                        <a href="article.html" class="post-by">
                                            Oleh
                                            <span class="text-success">Admin</span> l 
                                            {{ $primary->created_at->format('M d, Y') }}
                                        </a>
                                    </li>
                                </ul>
                                <p class="blog-details__text-2 mb-4">
                                    {{ $primary->short_desc }}
                                </p>
                                <a href="{{ url('/article-detail/'.$primary->slug) }}" class="btn main__btn-yellow">Baca Artikel ></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 d-flex justify-content-center">
                        <div class="blog-details__left p-0">
                            <div class="blog-details__content__mt">
                                <div class="blog-details__img">
                                    <img src="{{ asset($primary->image) }}"
                                        alt="building" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Details End-->
    <!--Blog Details Start-->
    <section class="blog-details">
        <div class="container">
            <div class="row">
                <h3 class="blog-details__title mt-5 mb-4">Semua Artikel</h3>
                <hr />
            </div>
            <div>
                @foreach ($data as $item)
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

    <!--Services One Start-->
    @include('../guest/components/service')
    <!--Services One End-->

    {{-- CTA Section --}}
    @include('../guest/components/cta')
</x-guest-layout>
