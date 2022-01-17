<?php get_header(); ?>
	<section class="bk-blue padding-top-lg padding-bottom-lg">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1 class="title font-white padding-bottom-md">
						Schedule demo
					</h1>
					<p class="font-white padding-top-sm padding-bottom-sm">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
					</p>
					<ul class="list">
						<li class="font-white margin-top-md">
							<b>Lorem Ipsum is simply dummy</b> text of the printing and typesetting industry.
						</li>
						<li class="font-white margin-top-md">
							<b>Lorem Ipsum is simply dummy</b> text of the printing and typesetting industry.
						</li>
						<li class="font-white margin-top-md">
							<b>Lorem Ipsum is simply dummy</b> text of the printing and typesetting industry.
						</li>
					</ul>
				</div>
				<div class="col-md-6">
					<div class="bk-grey">

						<form class="row g-2 needs-validation" novalidate>

						  	<div class="col-md-6">
							  	<div class="form-group">
							    	<input type="text" class="form-control" id="firstname" placeholder="First name*" required>
							    </div>
							</div>


						  <div class="col-md-6">
						  	<div class="form-group">
						    	<input type="text" class="form-control" id="lastname" placeholder="Last name*" required>
						    </div>
						  </div>


						  <div class="col-md-12">
						    	<div class="form-group">
						      		<input type="email" class="form-control" id="email" placeholder="Email*" aria-describedby="email" required>
						   		</div>
						  </div>


						  <div class="col-md-12">
						  		<div class="form-group">
						    		<input type="text" class="form-control" id="organization" placeholder="Organization name*" required>
						    	</div>
						  </div>


						  <div class="col-md-12">
						  	<div class="form-group">
							    <select class="form-control" id="capacity" required>
							      <option selected disabled value="">Enrollment capacity</option>
							      <option>Option 1</option>
							      <option>Option 2</option>
							      <option>Option 3</option>
							      <option>Option 4</option>
							      <option>Option 5</option>
							    </select>
							</div>
						  </div>



						  <div class="col-md-12">
						    	<div class="form-group">
						      		<input type="phone" class="form-control" id="email" placeholder="Phone number*" aria-describedby="phone" required>
						   		</div>
						  </div>


						<div class="col-md-12">
						  	<div class="form-group">
							    <select class="form-control" id="preschool" required>
							      <option selected disabled value="">Preschool or child care</option>
							      <option>Option 1</option>
							      <option>Option 2</option>
							      <option>Option 3</option>
							      <option>Option 4</option>
							      <option>Option 5</option>
							    </select>
							</div>
						</div>

						  <div class="col-12">
						    <button class="btn btn-link btn-orange font-white btn-lg btn-block" type="submit">Request Your Demo</button>
						  </div>
						</form>

					</div>
				</div>
			</div>
		</div>					
	</section>
<?php get_footer(); ?>