<?php 
include "include/header.php";
 include "include/navbar.php"; ?>


</div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header><!-- #header end -->

<!-- Page Title
============================================= -->



<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">
			<div class="slider-inner">

				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-left">
									<h2 data-animate="fadeInUp" class="slider-text" style="font-size: 3.5em; color: #ffffff;">CONTACT US</h2>
								</div>
							</div>
							<div class="swiper-slide-bg slider-img" style="background-image: url('images/sites/akinadesola.png');"></div>
						</div>
						
						
					</div>
				</div>

				<a href="#" data-scrollto="#content" data-offset="100" class="one-page-arrow dark"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

			</div>
</section>


<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row align-items-stretch col-mb-50 mb-0">
						<!-- Contact Form
						============================================= -->
						<div class="col-lg-6">

							<div class="fancy-title title-border">
								<h3>Send us an Email</h3>
							</div>

							<div class="form">

								<!-- <div class="form-result"></div> -->

								<form class="mb-0" action="process.php" method="post">

									<!-- <div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div> -->

									<div class="row">
										<div class="col-md-6 form-group">
											<label for="name">Name <small>*</small></label>
											<input type="text" name="name" value="" class="sm-form-control" required>
										</div>

										<div class="col-md-6 form-group">
											<label for="email">Email <small>*</small></label>
											<input type="email" name="email" value="" class="email sm-form-control" required>
										</div>

										

										<div class="w-100"></div>

										<div class="col-12 form-group">
											<label for="subject">Subject <small>*</small></label>
											<input type="text" name="subject" value="" class="sm-form-control" required>
										</div>

										<div class="w-100"></div>

										<div class="col-12 form-group">
											<label for="message">Message <small>*</small></label>
											<textarea class="sm-form-control" name="message" rows="6" cols="30" required></textarea>
										</div>

										<!-- <div class="col-12 form-group d-none">
											<input type="text" id="botcheck" name="botcheck" value="" class="sm-form-control" />
										</div> -->

										<input class="button button-3d m-0" type="submit" name="submit" value="submit feedback">
									</div>

									

								</form>
							</div>

						</div><!-- Contact Form End -->

						<!-- Google Map
						============================================= -->
						<div class="col-lg-6 min-vh-50">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.8772762813114!2d3.3248781137968604!3d6.537179124820173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8e6fbb093db9%3A0x448b67ddad71cb4!2sFolham%20(NIG)%20Limited!5e0!3m2!1sen!2sng!4v1669673251100!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div><!-- Google Map End -->
					</div>
					

					<!-- Contact Info
					============================================= -->
					<div class="row col-mb-50">
						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-map-marker2"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Address<span class="subtitle">32 Alhaji Asiri Abo Street, Isolo, Lagos</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-phone3"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Speak to Us<span class="subtitle">+234 705 894 2665, +234 802 345 2832</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-mail"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Send Us a Mail<span class="subtitle">info@folham.com</span></h3>
								</div>
							</div>
						</div>

						<div class="col-sm-6 col-lg-3">
							<div class="feature-box fbox-center fbox-bg fbox-plain">
								<div class="fbox-icon">
									<a href="#"><i class="icon-instagram"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Follow on Instagram<span class="subtitle">@folham_ltd</span></h3>
								</div>
							</div>
						</div>
					</div><!-- Contact Info End -->

				</div>
			</div>
		</section><!-- #content end -->

<?php include "include/footer.php"; ?>