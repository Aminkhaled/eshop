<?php $this->view('eshop/header',$data); ?>
	
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-sm-offset-1">
					<div class="login-form"><!--login form-->
                        <span class="error" style="color: red; font-size: 24px;"><?php check_messages(); ?></span>

                        <h2>Login to your account</h2>
						<form method="post">
							<input name="email" type="email" placeholder="Email Address" />
                            <input type="password" name="password" placeholder="Password" />

                            <span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit" class="btn btn-default">Login</button>
                            <br>
                            <a href="signup">Don't have an account ? Signup here</a>
						</form>
					</div><!--/login form-->
				</div>


			</div>
		</div>
	</section><!--/form-->


<?php $this->view('eshop/footer') ?>