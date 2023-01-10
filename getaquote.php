<?php 
include "include/header.php";
include "include/navbar.php"; 

?>



					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

<!-- Page Title
============================================= -->
<section id="page-title" class="page-title-mini">

<div class="container clearfix">
    <h1>Get a Quote</h1>
    <ol class="breadcrumb">
    <h1>Be a part of our Business</h1>
        
    </ol>
</div>

</section><!-- #page-title end -->





<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<div class="tabs mx-auto mb-0 clearfix" id="tab-login-register" style="max-width: 500px;">
						<div class="tab-container">
                            

							<div class="tab-content" id="tab-login">
								<div class="card mb-0">
									<div class="card-body" style="padding: 40px;">
										<form class="mb-0" action="sendquote.php" method="post">

											<h3>Request Quote</h3>

											<div class="row">
                                                <div class="col-12 form-group">
													<label for="">Full Name:</label>
													<input type="name" name="name" value="" class="form-control" required/>
												</div>

												<div class="col-12 form-group">
													<label for="">Email:</label>
													<input type="email" name="email" value="" class="form-control"  required/>
												</div>

                                                <div class="col-12 form-group">
													<label for="">Phone:</label>
													<input type="name"  name="phone"  class="form-control" required/>
												</div>

												<div class="col-12 form-group">
													<label for="">Message:</label>
													<textarea class="form-control" name="message" required></textarea>
												</div>
                                    
                                                

												<div class="col-12 form-group">
													<button class="button button-3d button-black m-0"  name="submit" value="login">Get a Quote</button>
                                                    
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>
		</section><!-- #content end -->
<script>
function myFunction() {
  var x = document.getElementById("login-form-password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

<?php include "include/footer.php"; ?>