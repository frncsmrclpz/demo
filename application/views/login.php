<?php include('header.php'); ?>
<div class="container">
  <?php echo form_open("login/user_login",['class'=>'form-horizontal']);?>
  <form>
    <fieldset>
      <legend>Login</legend>
      <?php if($error = $this->session->flashdata('login_response')):  ?>
      <div class="row">
        <div class="col-lg-5">
          <div class="alert alert-dismissible alert-danger">
            <?php echo $error; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
      <div class="row">
        <div class="col-lg-5">
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-lg-10">
              <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Email','value'=>set_value('username')]); ?>
            </div>
          </div>
        </div>
        <div class="col-lg-10">
          <?php echo form_error('username', '<div class="text-danger">','</div>'); ?>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-5">
          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Password</label>
            <div class="col-lg-10">
              <?php echo form_input(['name'=>'password','class'=>'form-control','type'=>'password','placeholder'=>'Password']); ?>
            </div>
          </div>
        </div>
        <div class="col-lg-10">
          <?php echo form_error('password', '<div class="text-danger">','</div>'); ?>
        </div>
      </div>

      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <?php echo form_error('username', '<div class="text-danger">','</div>'); ?>
          <?php echo form_submit(['value'=>'Submit','class'=>'btn btn-primary']); ?>
          <?php echo form_reset(['value'=>'Reset','class'=>'btn btn-default']); ?>
        </div>
      </div>
    </fieldset>
  <?php echo form_close(); ?>
</div>

<?php include('footer.php'); ?>