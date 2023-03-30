<x-guest-layout>
    <!--Blog Details Start-->
    <section class="blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <ul class="sidebar__post-list list-unstyled">
                        <li class="px-0">
                            @if ( collect(request()->segments())->last()  !== 'profile' )
                                <div class="sidebar__post-image">
                                    <img src="{{ asset('tguest/assets/images/blog/comment-1-1.jpg') }}" alt="" class="rounded-circle">
                                </div>
                            @endif
                            <div class="sidebar__post-content">
                                @if ( collect(request()->segments())->last() !== 'profile')
                                    <h3 class="post_title">
                                        Admin 
                                    </h3>
                                @endif
                                <span class="post_text">Diunggah pada {{ $article->created_at->format('d F Y') }}</span>
                            </div>
                        </li>
                    </ul>
                    <div class="blog-detail__img">
                        @if ( collect(request()->segments())->last()  === 'profile' )
                        <center>
                            <img src="https://nebula-enviro.id/storage/image/article/article_cnORF3dE1676250713.jpg" alt="">
                        </center>
                        @else
                            <img src="{{ asset($article->image) }}" alt="">
                        @endif
                    </div>
                    <h3 class="blog-detail__title pt-4">{{ $article->title }}</h3>
                    <div class="blog-detail__content">
                        <p>
                            {!! $article->description !!}
                        </p>
                        {{-- <h3 class="blog-detail__title">Pengolaham limbah yang baik harus dilakukan dengan riset
                            limbah yang cukup</h3> --}}
                        {{-- <p class="blog-detail__text-1">Pengolahan limbah industri merupakan salah satu masalah yang
                            sangat penting bagi keberlangsungan lingkungan. Limbah industri dapat mengandung zat-zat
                            kimia beracun yang dapat merusak lingkungan jika tidak dikelola dengan baik. Oleh karena
                            itu, penting bagi perusahaan industri untuk memiliki sistem pengelolaan limbah yang
                            efektif dan ramah lingkungan.</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Details End-->

    <!--Blog Start-->
    <section class="blog-carousel-page">
        <div class="container">
            <h3 class="blog-carousel__title">Artikel Lainnya</h3>
            <div class="blog-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style"
                data-owl-options='{
                    "items": 3,
                    "margin": 30,
                    "smartSpeed": 700,
                    "loop":true,
                    "autoplay": 6000,
                    "nav":false,
                    "dots":true,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":2
                        },
                        "992":{
                            "items": 3
                        }
                    }
                }'>
                <!--Blog One Single End-->
                @foreach ($others as $item)
                    <div class="item">
                        <a href="{{ url('/article-detail/'.$item->slug) }}">
                            <div class="blog-one__single">
                                <div class="blog-one__img">
                                    <img src="{{ asset($item->image) }}"
                                        alt="">
                                </div>
                                <div class="blog-one_content mt-4">
                                    <a href="{{ url('/article-detail/'.$item->slug) }}" class="post-by ">
                                        Oleh <span class="text-success">Admin</span> l {{ $item->created_at->format('M d, Y') }}
                                    </a>
                                    <a href="{{ url('/article-detail/'.$item->slug) }}">
                                        <h3 class="blog-title">
                                            {{ $item->title }}
                                        </h3>
                                    </a>
                                    <p class="blog-text">
                                        {{ $item->short_desc }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                @endforeach
                <!--Blog One Single End-->

            </div>
        </div>
    </section>
    <!--Blog End-->
</x-guest-layout>
