
<?php $this->load->view('/templates/header'); ?>
<h1   style="text-align:center;"> Signin </h1>


<div class="col-md-12">
  

</div>



<?= form_open() ?>
        <div class="form-group" >
          <label for="username">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Your username">
        </div>
        <div  style="background-color:red; color:white; "> 
          <?php echo form_error('username'); ?>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
        </div>
        <div  style="background-color:red; color:white; "> 
          <?php echo form_error('password'); ?>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-default" value="Signin">
        </div>
      </form>

        

      <?php $this->load->view('/templates/footer'); ?>