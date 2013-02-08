

	<section>
          <div class="row-fluid">
            <div class="span6">
				<form action="?p=common_user&a=login" method="POST" class="form-signin row-fluid">
					<h2 class="form-signin-heading">Please sign in</h2>
					
						  <div class="control-group {$login_error}">
							<div class="controls">
							  <input type="text" value="{$login_name}" name="username" class="input-block-level" placeholder="Login name">
							</div>
						  </div>
						  <div class="control-group {$login_error}">
							<div class="controls">
							  <input name="pass" type="password" class="input-block-level" placeholder="Password">
							</div>
						  </div>
						  
							<div class="control-group">
							  <label class="checkbox">
								<input type="checkbox" id="optionsCheckbox2" value="true" name="remember">
								Remember me.
							  </label>
							</div>

					<button class="btn btn-large btn-primary" type="submit">Sign in</button>

				</form>
            </div>
			
            <div class="span6">
				<form action="?p=common_user&a=login" method="POST" class="form-signin">
					<h2 class="form-signin-heading">or register</h2>
					
						  <div class="control-group {$register_error}">
							<div class="controls">
							  <input type="text" name="email" class="input-block-level" placeholder="Email address">
							</div>
						  </div>
						  <div class="control-group {$register_error}">
							<div class="controls">
							  <input type="text" value="{$login_name}" name="username" class="input-block-level" placeholder="Login name">
							</div>
						  </div>
						  <div class="control-group {$register_error}">
							<div class="controls">
							  <input name="pass" type="password" class="input-block-level" placeholder="Password">
							</div>
						  </div>

					<button class="btn btn-large btn-primary" type="submit">Sign in</button>

				</form>
          </div>
		  
	</section>