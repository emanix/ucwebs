<?php $this->load->view($header_view); ?>
<!-- news -->
	<div class="news-section py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Steps to 
				<span class="font-weight-bold">Order</span>
			</h3>
			<div class="row news-grids-w3l pt-md-4">
				<div class="col-md-4 news-grid">
					
						<img src="<?php echo base_url(); ?>asset/cweb/images/paper2.jpg" class="img-fluid" alt="" />
					
					<div class="news-text">
						
						<div class="detail-bottom">
							<h4 class="my-3">
								<p class="text-dark">
									Make sure you prepare the document that you wish to be evaluated in a portable document format (pdf)
								</p>
							</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 news-grid my-md-0 my-sm-5 my-4">
					
						<img src="<?php echo base_url(); ?>asset/cweb/images/register1.jpg" class="img-fluid" alt="" />
					
					<div class="news-text">
						
						<div class="detail-bottom">
							<h4 class="my-3">
								<p class="text-dark">
									To successfully upload your document, kindly register your document by clicking the continue button below and follow other instructions.
								</p>
							</h4>
							<a href="blog.html"><button style="color: green;">Continue</button></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 news-grid">
					<a href="blog.html">
						<img src="images/n3.jpg" class="img-fluid" alt="" />
					</a>
					<div class="news-text">
						<div class="news-events-agile event-colo3 py-2 px-3">
							<h5 class="float-left">
								<a href="blog.html" class="text-white"></a>
							</h5>
							<div class="post-img float-right">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-comments text-white"></i>
										</a>
									</li>
									<li class="mx-3">
										<a href="#">
											<i class="far fa-heart text-white"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-share text-white"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="detail-bottom">
							<h6 class="my-3">
								<a href="blog.html" class="text-dark">
									Eiusmod tempor incididunt ut labore sed do eiusmod
								</a>
							</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
								tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //news -->
	<?php $this->load->view($footer_view); ?>