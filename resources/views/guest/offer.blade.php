<x-guest-layout>
    <!--Blog Details Start-->
    <section class="blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <ul class="sidebar__post-list list-unstyled">
                        <li class="px-0">
                            <div class="sidebar__post-image">
                                <img src="{{ asset('tguest/assets/images/blog/comment-1-1.jpg') }}" alt="" class="rounded-circle">
                            </div>
                            <div class="sidebar__post-content">
                                <h3 class="post_title">
                                    Admin
                                </h3>
                                <span class="post_text">Diunggah pada {{ $offer->created_at->format('d F Y') }}</span>
                            </div>
                        </li>
                    </ul>
                    <h3 class="blog-detail__title pt-4">{{ $offer->title }}</h3>
                    <div class="blog-detail__content">
                        <p>
                            {!! $offer->description !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Blog Details End-->
</x-guest-layout>
