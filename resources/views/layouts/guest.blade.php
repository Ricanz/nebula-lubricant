<!DOCTYPE html>
<html lang="en">

{{-- Head Components --}}
@include('guest/partials/head')

{{-- <body class="custom-cursor"> --}}
<body>
    {{-- <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div> --}}

    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader -->

    <a href="https://api.whatsapp.com/send?phone=6281288889662" class="float" target="_blank">
        <i class="fa fa-whatsapp my-float"></i>
    </a>
    <div class="page-wrapper">
        @include('guest/partials/header')
        
        {{-- Content --}}
        {{ $slot }}
        
        <!--Site Footer Start-->
        @include('guest/partials/footer')
        <!--Site Footer End-->
    </div>
    <!-- /.page-wrapper -->

    <!-- .mobile-nav__wrapper -->
    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->
            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:nebula.enviro@gmail.com">nebula.enviro@gmail.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:081288889662">0812 8888 9662</a>
                </li>
            </ul>
            <!-- /.mobile-nav__contact -->
        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->
    @include('guest/partials/scripts')
    @push('scripts')
</body>

</html>
