<?php $this->load->view('/templates/header'); ?>
<h1   style="text-align:center;"> Signup </h1>


			<?= form_open() ?>
				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Enter a username">
					<p class="help-block">At least 4 characters, letters or numbers only</p>
				</div>

				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
					<p class="help-block">A valid email address</p>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password">
					<p class="help-block">At least 6 characters</p>
				</div>
				<div class="form-group">
					<label for="password_confirm">Confirm password</label>
					<input type="password" class="form-control" id="password_confirm" name="password_confirm" placeholder="Confirm your password">
					<p class="help-block">Must match your password</p>
				</div>
				
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Signup">
				</div>
			</form>




<?php 
/*

<div class="form-content">
        <div class="form-header background-maroon white">
        	<div class="form-top-left">
		          <h3>Signup</h3>
		          <p> Be a part of uur Community </p>
		      </div>
		      <div class="form-top-right">
		      		<span class="glyphicon glyphicon-pencil"></span>
		      </div>
		      <br style="clear:both"/>
        </div>

        <div class="form-body">
			<form role="form" action="http://localhost/ci02/homeV/index" method= "post" >
	          	<div class="form-group category">
	               <label for="category"> <span class="glyphicon glyphicon-user"></span> </span> Signup as </label>
					<select  class="form-control form-element" name='category'>
						<option class='drop-down' value='student'> Student </option>			
						<option class='drop-down' value='teacher'> Teacher </option>			
						<option class='drop-down' value='administration'> Administration </option>			
					</select>
				</div>
	           
	            <div class="form-group is-hidden email">
	              <label for="Email"> <span class="glyphicon glyphicon-user"> </span> Email</label>
	        	  <input type="textbox" class="form-control form-element" name="email" placeholder="Email">
	            </div>

	            <div class="form-group password">
	              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
				  <input  type="password" class="form-control password-validation form-element" name="password" placeholder="Password" data-validation="false">
	            </div>

	            <div class="form-group confirm-password">
	              <label for="confirm-password"><span class="glyphicon glyphicon-eye-open"></span> Confirm Password</label>
				  <input  type="password" class="form-control password-confirmation form-element" name="password1" placeholder="Confirm Password" data-validation="false">
	            </div>
	            <br>
            	<button type="button" class="btn btn-default btn-danger btn-block submit-btn signup-btn"><span class="glyphicon glyphicon-pencil"></span>&nbsp; Signup </button>
				<!--<input type="submit" class="submit-btn btn btn-primary btn-danger form-element" value="Signup"> -->
            </form>
        </div>

        <div class="modal-footer">
          <!-- Message from serverside (basanth)-->
          <div class="message pull-left" id="signup-message"></div>
        </div>
      </div>
 */ ?>

 <?php $this->load->view('/templates/footer'); ?>