<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Nebula Lubricant</title>
		<meta name="description" content="Nebula Lubricant" />

		<!-- fonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com/" />

		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

		<link
			href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&amp;display=swap"
			rel="stylesheet"
		/>

		<link
			rel="stylesheet"
			href="{{ asset('tguest/assets/vendors/bootstrap/css/bootstrap.min.css') }}"
		/>
		<link rel="stylesheet" href="{{ asset('tguest/assets/vendors/animate/animate.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('tguest/assets/vendors/animate/custom-animate.css') }}" />
		<link rel="stylesheet" href="{{ asset('tguest/assets/vendors/fontawesome/css/all.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('tguest/assets/vendors/jarallax/jarallax.css') }}" />
		<link
			rel="stylesheet"
			href="{{ asset('tguest/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}"
		/>
		<link
			rel="stylesheet"
			href="{{ asset('tguest/assets/vendors/nouislider/nouislider.min.css') }}"
		/>
		<link
			rel="stylesheet"
			href="{{ asset('tguest/assets/vendors/nouislider/nouislider.pips.css') }}"
		/>
		<link rel="stylesheet" href="{{ asset('tguest/assets/vendors/odometer/odometer.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('tguest/assets/vendors/swiper/swiper.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('tguest/assets/vendors/agrion-icons/style.css') }}" />
		<link
			rel="stylesheet"
			href="{{ asset('tguest/assets/vendors/tiny-slider/tiny-slider.min.css') }}"
		/>
		<link rel="stylesheet" href="{{ asset('tguest/assets/vendors/reey-font/stylesheet.css') }}" />
		<link
			rel="stylesheet"
			href="{{ asset('tguest/assets/vendors/owl-carousel/owl.carousel.min.css') }}"
		/>
		<link
			rel="stylesheet"
			href="{{ asset('tguest/assets/vendors/owl-carousel/owl.theme.default.min.css') }}"
		/>
		<link rel="stylesheet" href="{{ asset('tguest/assets/vendors/bxslider/jquery.bxslider.css') }}" />
		<link
			rel="stylesheet"
			href="{{ asset('tguest/assets/vendors/bootstrap-select/css/bootstrap-select.min.css') }}"
		/>
		<link rel="stylesheet" href="{{ asset('tguest/assets/vendors/vegas/vegas.min.css') }}" />
		<link rel="stylesheet" href="{{ asset('tguest/assets/vendors/jquery-ui/jquery-ui.css') }}" />
		<link rel="stylesheet" href="{{ asset('tguest/assets/vendors/timepicker/timePicker.css') }}" />

		<!-- template styles -->
		<link rel="stylesheet" href="{{ asset('tguest/assets/css/agrion.css') }}" />
		<link rel="stylesheet" href="{{ asset('tguest/assets/css/agrion-responsive.css') }}" />

		<!-- Css custom -->
		<link rel="stylesheet" href="{{ asset('tguest/assets/css/style-custom.css') }}" />
	</head>

	<body class="custom-cursor">
		<div class="custom-cursor__cursor"></div>
		<div class="custom-cursor__cursor-two"></div>

		<div class="preloader">
			<div class="preloader__image"></div>
		</div>
		<!-- /.preloader -->

		<div class="page-wrapper">
			<header class="main-header">
				<div class="main-header__wrapper container">
					<div class="main-header__wrapper-inner">
						<div class="main-header__logo">
							<a href="index.html" class="text_logo">
								<p>Nebula Lubricant</p>
							</a>
						</div>
						<div class="main-header__menu-box">
							<div class="main-header__menu-box-bottom">
								<nav class="main-menu">
									<div class="main-menu__wrapper">
										<div class="main-menu__wrapper-inner">
											<div class="main-menu__main-menu-box">
												<a href="#" class="mobile-nav__toggler"
													><i class="fa fa-bars"></i
												></a>
												<ul class="main-menu__list">
													<li>
														<a href="index.html" class="text-white">Home</a>
													</li>
													<li>
														<a href="article.html" class="text-white">Blog</a>
													</li>
													<li>
														<a href="about.html" class="text-white">About Us</a>
													</li>
													<li>
														<a href="contact.html" class="text-white"
															>Contact Us</a
														>
													</li>
													<li>
														<a href="" class="btn btn-warning-subs px-4">
															Subscribe
														</a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="stricky-header stricked-menu main-menu">
				<div class="sticky-header__content"></div>
				<!-- /.sticky-header__content -->
			</div>
			<!-- /.stricky-header -->

			<!--Main Slider Start-->
			<section class="main-slider clearfix">
				<div
					class="swiper-container thm-swiper__slider"
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
                }}'
				>
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<div
								class="image-layer"
								style="
									background-image: url({{ asset('tguest/assets/images/backgrounds/main-slider-1-5.png') }});
								"
							></div>
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
						</div>
						<div class="swiper-slide">
							<div
								class="image-layer"
								style="
									background-image: url({{ asset('tguest/assets/images/backgrounds/main-slider-1-2.jpg') }});
								"
							></div>
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
												<a href="article.html" class="btn main__btn"
													>Baca Artikel >
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div
								class="image-layer"
								style="
									background-image: url({{'assets/images/backgrounds/main-slider-1-3.jpg'}});
								"
							></div>
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
						</div>
					</div>

					<div class="swiper-pagination" id="main-slider-pagination"></div>

					<!-- If we need navigation buttons -->
					<div class="main-slider__nav">
						<div
							class="swiper-button-prev"
							id="main-slider__swiper-button-next"
						>
							<i class="icon-right-arrow"></i>
						</div>
						<div
							class="swiper-button-next"
							id="main-slider__swiper-button-prev"
						>
							<i class="icon-right-arrow"></i>
						</div>
					</div>
				</div>
			</section>
			<!--Main Slider End-->

			<!-- Information Start -->
			<section class="section-information">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<img
								src="{{ asset('tguest/assets/images/resources/crystal-kwok-XUEdfpPIhXg-unsplash 1.png') }}"
								alt=""
								class="info-detail_img"
							/>
						</div>
					</div>
					<div class="info-details_content">
						<p class="info-title_title-1">Nebula Lubricant</p>
						<h3 class="info-title_title-2">
							Informasi pengolahan limbah menjadi hasil olah terbaik
						</h3>
						<p class="info-title_text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
							eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
							enim ad minim veniam, quis nostrud exercitation ullamco laboris
							nisi ut aliquip.
						</p>
						<div class="btn main__btn text-success">Baca Selengkapnya ></div>
					</div>
				</div>
			</section>
			<!-- Information End -->

			<!--Services One Start-->
			<section class="services-onee">
				<div class="container">
					<div class="section-title text-center">
						<h2 class="section-title__title">Penawaran Kami</h2>
					</div>
					<div class="row">
						<!--Services One Single Start-->
						<div
							class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft"
							data-wow-delay="100ms"
						>
							<div class="services-one__single">
								<div class="services-one__icons">
									<img src="{{ asset('tguest/assets/images/icon/Icon-1.png') }}" alt="" />
								</div>
								<div class="services-one__content">
									<h3 class="services-one__title">Pengolahan</h3>
									<p class="services-one__text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									</p>
								</div>
							</div>
						</div>
						<!--Services One Single End-->
						<!--Services One Single Start-->
						<div
							class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft"
							data-wow-delay="100ms"
						>
							<div class="services-one__single">
								<div class="services-one__img-box">
									<div class="services-one__icons">
										<img src="{{ asset('tguest/assets/images/icon/icon-2.png') }}" alt="" />
									</div>
								</div>
								<div class="services-one__content">
									<h3 class="services-one__title">Pengolahan</h3>
									<p class="services-one__text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									</p>
								</div>
							</div>
						</div>
						<!--Services One Single End-->
						<!--Services One Single Start-->
						<div
							class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft"
							data-wow-delay="100ms"
						>
							<div class="services-one__single">
								<div class="services-one__img-box">
									<div class="services-one__icons">
										<img src="{{ asset('tguest/assets/images/icon/icon-3.png') }}" alt="" />
									</div>
								</div>
								<div class="services-one__content">
									<h3 class="services-one__title">Pengolahan</h3>
									<p class="services-one__text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									</p>
								</div>
							</div>
						</div>
						<!--Services One Single End-->
						<!--Services One Single Start-->
						<div
							class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft"
							data-wow-delay="100ms"
						>
							<div class="services-one__single">
								<div class="services-one__img-box">
									<div class="services-one__icons">
										<img src="{{ asset('tguest/assets/images/icon/icon-4.png') }}" alt="" />
									</div>
								</div>
								<div class="services-one__content">
									<h3 class="services-one__title">Limbah</h3>
									<p class="services-one__text">
										Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
									</p>
								</div>
							</div>
						</div>
						<!--Services One Single End-->
					</div>
				</div>
			</section>
			<!--Services One End-->

			<!--Blog Details Start-->
			<section class="blog-details">
				<div class="container">
					<div>
						<div class="row">
							<div class="col-xl-7 col-lg-7">
								<h3 class="blog-left__title">Artikel Pengolahan Limbah</h3>
								<div class="blog-details__left">
									<div class="blog-details__img">
										<img
											src="{{ asset('tguest/assets/images/blog/white-concrete-building.png') }}"
											alt="building"
										/>
									</div>
									<div class="blog-details__content">
										<ul class="list-unstyled blog-details__meta">
											<li>
												<a href="article.html" class="post-by">
													Oleh
													<span class="text-success">Riyanti Maulya</span> l May
													23, 2022
												</a>
											</li>
										</ul>
										<h3 class="blog-details__title">
											Pengaruh limbah industri terhadap lingkungan masyarakat
											sekitar.
										</h3>
										<p class="blog-details__text-2 mb-4">
											Duis aute irure dolor in reprehenderit in voluptate velit
											esse cillum dolore eu fugiat nulla pariatur. Excepteur
											sint occaecat cupidatat non proident.
										</p>
										<button class="btn main__btn-2">Baca Selengkapnya ></button>
									</div>
								</div>
							</div>
							<div class="col-xl-5 col-lg-5">
								<div class="sidebar">
									<div class="d-flex justify-content-between">
										<h3 class="blog-right__title">Artikel Lainnya</h3>
										<p class="blog-right__text">Lihat Semuanya</p>
									</div>
									<div class="sidebar__single sidebar__post">
										<ul class="sidebar__post-list list-unstyled">
											<li>
												<div class="sidebar__post-content">
													<p class="post-by">
														Oleh
														<span class="text-success">Riyanti Maulya</span> Aug
														23, 2021
													</p>
													<h3>
														<a href="detailArticle.html" class="post-text">
															9 Cara untuk mengetahui jenis limbah yang
															berbahaya bagi lingkungan.
														</a>
													</h3>
												</div>
											</li>
											<li>
												<div class="sidebar__post-content">
													<p class="post-by">
														Oleh
														<span class="text-success">Riyanti Maulya</span> Aug
														23, 2021
													</p>
													<h3>
														<a href="detailArticle.html" class="post-text">
															9 Cara untuk mengetahui jenis limbah yang
															berbahaya bagi lingkungan.
														</a>
													</h3>
												</div>
											</li>
											<li>
												<div class="sidebar__post-content">
													<p class="post-by">
														Oleh
														<span class="text-success">Riyanti Maulya</span> Aug
														23, 2021
													</p>
													<h3>
														<a href="detailArticle.html" class="post-text">
															9 Cara untuk mengetahui jenis limbah yang
															berbahaya bagi lingkungan.
														</a>
													</h3>
												</div>
											</li>
											<li>
												<div class="sidebar__post-content">
													<p class="post-by">
														Oleh
														<span class="text-success">Riyanti Maulya</span> Aug
														23, 2021
													</p>
													<h3>
														<a href="detailArticle.html" class="post-text">
															9 Cara untuk mengetahui jenis limbah yang
															berbahaya bagi lingkungan.
														</a>
													</h3>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Blog Details End-->

			<!-- About Start -->
			<section class="section-about">
				<div class="container">
					<div class="overflow-hidden">
						<div class="row">
							<div class="col-2"></div>
							<div class="col-7 bg-warning text-warning">x</div>
							<div class="col-3 bg-success text-success">x</div>
						</div>
					</div>
					<div class="about-content">
						<div class="row">
							<div class="col-lg-6 col-xl-6 col-12 py-4">
								<div class="about-details__content">
									<p class="about-details__title">Tentang Kami</p>
									<h3 class="about-details__title-2">
										We are a community of content writers who share their
										learnings
									</h3>
									<p class="about-details__text-2">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
										do eiusmod tempor incididunt ut labore et dolore magna
										aliqua.
									</p>
									<a href="article.html" class="about-details__link"
										>Read More >
									</a>
								</div>
							</div>
							<div class="col-lg-6 col-xl-6 col-12 py-4">
								<div class="about-details__content">
									<p class="about-details__title">Visi</p>
									<h3 class="about-details__title-2">
										Creating valuable content for creatives all around the world
									</h3>
									<p class="about-details__text-2">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
										do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation
										ullamco laboris nisi ut aliquip ex ea commodo consequat.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- About End -->

			<!--Brand One Start-->
			<section class="brand-one">
				<div class="brand-one__inner">
					<div class="container">
						<div class="row">
							<div class="col-xl-12">
								<div
									class="brand-one__carousel thm-owl__carousel owl-theme owl-carousel"
									data-owl-options='{
                                "margin": 0,
                                "smartSpeed": 700,
                                "loop":true,
                                "autoplay": 6000,
                                "nav":false,
                                "dots":false,
                                "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                                "responsive":{
                                    "0":{
                                        "items":1
                                    },
                                    "600":{
                                        "items":2
                                    },
                                    "800":{
                                        "items":3
                                    },
                                    "1024":{
                                        "items": 4
                                    },
                                    "1200":{
                                        "items": 5
                                    }
                                }
                            }'
								>
									<!--Brand One Single-->
									<div class="brand-one__single">
										<div class="brand-one__img">
											<img src="{{ asset('tguest/assets/images/brand/Logo-1.png') }}" alt="" />
										</div>
									</div>
									<!--Brand One Single-->
									<div class="brand-one__single">
										<div class="brand-one__img">
											<img src="{{ asset('tguest/assets/images/brand/Logo-2.png') }}" alt="" />
										</div>
									</div>
									<!--Brand One Single-->
									<div class="brand-one__single">
										<div class="brand-one__img">
											<img src="{{ asset('tguest/assets/images/brand/Logo-3.png') }}" alt="" />
										</div>
									</div>
									<!--Brand One Single-->
									<div class="brand-one__single">
										<div class="brand-one__img">
											<img src="{{ asset('tguest/assets/images/brand/Logo-4.png') }}" alt="" />
										</div>
									</div>
									<!--Brand One Single-->
									<div class="brand-one__single">
										<div class="brand-one__img">
											<img src="{{ asset('tguest/assets/images/brand/Logo-5.png') }}" alt="" />
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Brand One End-->

			<!--Testimonial Three Start-->
			<section class="testimonial-three">
				<div class="container">
					<div class="testimonial-body">
						<div class="row">
							<div class="col-xl-5 col-lg-5 col-12">
								<div class="testimonial-three__left">
									<div class="section-title text-left">
										<span class="section-title__tagline">TESTIMONIAL</span>
										<h2 class="section-title__title">
											Kata mereka tentang website kami
										</h2>
										<p class="section-title__text">
											Testimoni dari pengalaman para pengguna website Nebula
											Lubricant.
										</p>
									</div>
								</div>
							</div>
							<div class="col-xl-7 col-lg-7 col-12">
								<div class="testimonial-three__right">
									<div
										class="testimonial-three__carousel thm-owl__carousel owl-theme owl-carousel"
										data-owl-options='{
                                        "items": 3,
                                        "margin": 30,
                                        "smartSpeed": 700,
                                        "loop":true,
                                        "autoplay": 6000,
                                        "nav":true,
                                        "dots":false,
                                        "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                                        "responsive":{
                                            "0":{
                                                "items":1
                                            },
                                            "768":{
                                                "items":1
                                            },
                                            "992":{
                                                "items":1
                                            }
                                        }
                                    }'
									>
										<!--Testimonial One Single Start-->
										<div class="item">
											<div class="testimonial-one__single">
												<div class="testimonial-one__content">
													<p class="testimonial-one__text">
														Lorem ipsum is simply free text dolor sit amet,
														consect notted adipisicing elit sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua.
													</p>
													<div class="testimonial-one__client-info">
														<div class="testimonial-one__client-img">
															<img
																src="{{ asset('tguest/assets/images/testimonial/testimonial-1-1.jpg') }}"
																alt=""
															/>
															<div class="testimonial-one__quote">
																<span class="icon-quote"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="testimonial-one__client-details-box">
													<div class="testimonial-one__client-details">
														<h4 class="testimonial-one__client-name">
															Sarah Albert
														</h4>
														<p class="testimonial-one__client-sub-title">
															Customer
														</p>
													</div>
												</div>
											</div>
										</div>
										<!--Testimonial One Single End-->
										<!--Testimonial One Single Start-->
										<div class="item">
											<div class="testimonial-one__single">
												<div class="testimonial-one__content">
													<p class="testimonial-one__text">
														Lorem ipsum is simply free text dolor sit amet,
														consect notted adipisicing elit sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua.
													</p>
													<div class="testimonial-one__client-info">
														<div class="testimonial-one__client-img">
															<img
																src="{{ asset('tguest/assets/images/testimonial/testimonial-1-2.jpg') }}"
																alt=""
															/>
															<div class="testimonial-one__quote">
																<span class="icon-quote"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="testimonial-one__client-details-box">
													<div class="testimonial-one__client-details">
														<h4 class="testimonial-one__client-name">
															Kevin Martin
														</h4>
														<p class="testimonial-one__client-sub-title">
															Customer
														</p>
													</div>
												</div>
											</div>
										</div>
										<!--Testimonial One Single End-->
										<!--Testimonial One Single Start-->
										<div class="item">
											<div class="testimonial-one__single">
												<div class="testimonial-one__content">
													<p class="testimonial-one__text">
														Lorem ipsum is simply free text dolor sit amet,
														consect notted adipisicing elit sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua.
													</p>
													<div class="testimonial-one__client-info">
														<div class="testimonial-one__client-img">
															<img
																src="{{ asset('tguest/assets/images/testimonial/testimonial-1-3.jpg') }}"
																alt=""
															/>
															<div class="testimonial-one__quote">
																<span class="icon-quote"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="testimonial-one__client-details-box">
													<div class="testimonial-one__client-details">
														<h4 class="testimonial-one__client-name">
															Aleesha Brown
														</h4>
														<p class="testimonial-one__client-sub-title">
															Customer
														</p>
													</div>
												</div>
											</div>
										</div>
										<!--Testimonial One Single End-->
										<!--Testimonial One Single Start-->
										<div class="item">
											<div class="testimonial-one__single">
												<div class="testimonial-one__content">
													<p class="testimonial-one__text">
														Lorem ipsum is simply free text dolor sit amet,
														consect notted adipisicing elit sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua.
													</p>
													<div class="testimonial-one__client-info">
														<div class="testimonial-one__client-img">
															<img
																src="assets/images/testimonial/testimonial-1-4.jpg"
																alt=""
															/>
															<div class="testimonial-one__quote">
																<span class="icon-quote"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="testimonial-one__client-details-box">
													<div class="testimonial-one__client-details">
														<h4 class="testimonial-one__client-name">
															Mike Hardson
														</h4>
														<p class="testimonial-one__client-sub-title">
															Customer
														</p>
													</div>
												</div>
											</div>
										</div>
										<!--Testimonial One Single End-->
										<!--Testimonial One Single Start-->
										<div class="item">
											<div class="testimonial-one__single">
												<div class="testimonial-one__content">
													<p class="testimonial-one__text">
														Lorem ipsum is simply free text dolor sit amet,
														consect notted adipisicing elit sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua.
													</p>
													<div class="testimonial-one__client-info">
														<div class="testimonial-one__client-img">
															<img
																src="{{ asset('tguest/assets/images/testimonial/testimonial-1-5.jpg') }}"
																alt=""
															/>
															<div class="testimonial-one__quote">
																<span class="icon-quote"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="testimonial-one__client-details-box">
													<div class="testimonial-one__client-details">
														<h4 class="testimonial-one__client-name">
															Jolie Michale
														</h4>
														<p class="testimonial-one__client-sub-title">
															Customer
														</p>
													</div>
												</div>
											</div>
										</div>
										<!--Testimonial One Single End-->
										<!--Testimonial One Single Start-->
										<div class="item">
											<div class="testimonial-one__single">
												<div class="testimonial-one__content">
													<p class="testimonial-one__text">
														Lorem ipsum is simply free text dolor sit amet,
														consect notted adipisicing elit sed do eiusmod
														tempor incididunt ut labore et dolore magna aliqua.
													</p>
													<div class="testimonial-one__client-info">
														<div class="testimonial-one__client-img">
															<img
																src="{{ asset('tguest/assets/images/testimonial/testimonial-1-6.jpg') }}"
																alt=""
															/>
															<div class="testimonial-one__quote">
																<span class="icon-quote"></span>
															</div>
														</div>
													</div>
												</div>
												<div class="testimonial-one__client-details-box">
													<div class="testimonial-one__client-details">
														<h4 class="testimonial-one__client-name">
															David Smith
														</h4>
														<p class="testimonial-one__client-sub-title">
															Customer
														</p>
													</div>
												</div>
											</div>
										</div>
										<!--Testimonial One Single End-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--Testimonial Three End-->

			<section class="cta-two">
				<div class="container">
					<div class="row justify-content-lg-center text-center">
						<div class="col-lg-6 col-12">
							<h2 class="cta-title__title">Hubungi kami!</h2>
							<p class="cta-title__text">
								Jika ingin informasi terbaru mengenai kami dan ingin menanyakan
								informasi pengolahan limbah, klik tombol di bawah ini!
							</p>
							<a href="" class="btn main__btn">Hubungi</a>
						</div>
					</div>
				</div>
			</section>

			<!--Site Footer Start-->
			<footer class="site-footer">
				<div class="site-footer__top">
					<div class="container">
						<div class="row mb-5">
							<div
								class="col-lg-6 col-md-12 col-12 text-lg-start text-md-start text-center"
							>
								<h3 class="p-0">
									<a href="index.html" class="footer-title_link text-white"
										>Nebula Lubricant</a
									>
								</h3>
							</div>
							<div
								class="col-lg-6 col-md-12 col-12 text-lg-end text-md-start text-center"
							>
								<a href="index.html" class="footer-link p-0">Home</a>
								<a href="article.html" class="footer-link">Blog</a>
								<a href="about.html" class="footer-link">About Us</a>
								<a href="contact.html" class="footer-link">Contact Us</a>
								<a href="" class="footer-link">Privacy Policy</a>
							</div>
						</div>
						<div class="site-footer__top-inner">
							<div class="row">
								<div
									class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp text-lg-start text-md-start text-center"
									data-wow-delay="100ms"
								>
									<div class="footer-widget__column footer-widget__about">
										<h3 class="footer-widget__about-text">
											Subscribe untuk mendapatkan informasi mengenai Nebula
											Lubricant
										</h3>
									</div>
								</div>
								<div
									class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp d-flex align-items-center"
									data-wow-delay="400ms"
								>
									<div class="footer-widget__column footer-widget__Contact">
										<form class="row g-2">
											<div class="col-auto">
												<input
													type="email"
													class="form-control footer-input_email"
													placeholder="Masukan email"
												/>
											</div>
											<div class="col-auto">
												<button type="submit" class="btn main__btn">
													Subscribe
												</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="row mt-5">
							<div
								class="col-lg-12 footer-contact text-lg-start text-md-start text-center"
							>
								<p>Alamat Nebula Lubricant</p>
								<p>management@lubricant.com 082167653872</p>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!--Site Footer End-->
		</div>
		<!-- /.page-wrapper -->

		<!-- .mobile-nav__wrapper -->
		<div class="mobile-nav__wrapper">
			<div class="mobile-nav__overlay mobile-nav__toggler"></div>
			<!-- /.mobile-nav__overlay -->
			<div class="mobile-nav__content">
				<span class="mobile-nav__close mobile-nav__toggler"
					><i class="fa fa-times"></i
				></span>
				<!-- /.logo-box -->
				<div class="mobile-nav__container"></div>
				<!-- /.mobile-nav__container -->
				<ul class="mobile-nav__contact list-unstyled">
					<li>
						<i class="fa fa-envelope"></i>
						<a href="mailto:needhelp@packageName__.com"
							>management@lubricant.com</a
						>
					</li>
					<li>
						<i class="fa fa-phone-alt"></i>
						<a href="tel:666-888-0000">0821789039875</a>
					</li>
				</ul>
				<!-- /.mobile-nav__contact -->
			</div>
			<!-- /.mobile-nav__content -->
		</div>
		<!-- /.mobile-nav__wrapper -->

		<script src="{{ asset('tguest/assets/vendors/jquery/jquery-3.6.0.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/jarallax/jarallax.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/nouislider/nouislider.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/odometer/odometer.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/swiper/swiper.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/wnumb/wNumb.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/wow/wow.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/isotope/isotope.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/countdown/countdown.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/owl-carousel/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/bxslider/jquery.bxslider.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/vegas/vegas.min.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/timepicker/timePicker.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/circleType/jquery.circleType.js') }}"></script>
		<script src="{{ asset('tguest/assets/vendors/circleType/jquery.lettering.min.js') }}"></script>

		<!-- template js -->
		<script src="{{ asset('tguest/assets/js/agrion.js') }}"></script>
	</body>
</html>
