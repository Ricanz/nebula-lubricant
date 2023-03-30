<x-guest-layout>
    <!--Blog Details Start-->
    <section class="blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
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
