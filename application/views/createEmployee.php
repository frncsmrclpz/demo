
<?php include('header.php'); ?>
<div class="container">
  <?php echo form_open("employee/insertEmployee",['class'=>'form-horizontal']);?>
  <form>
    <fieldset>
      <legend>Create Employee</legend>
      <div class="row">
        <div class="col-lg-5">
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Name</label>
            <div class="col-lg-10">
              <?php echo form_input(['name'=>'name','class'=>'form-control','placeholder'=>'Name','value'=>set_value('name')]); ?>
            </div>
          </div>
        </div>
        <div class="col-lg-10">
          <?php echo form_error('name', '<div class="text-danger">','</div>'); ?>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-5">
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Username</label>
            <div class="col-lg-10">
              <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Username','value'=>set_value('username')]); ?>
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
              <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); ?>
            </div>
          </div>
        </div>
        <div class="col-lg-10">
          <?php echo form_error('password', '<div class="text-danger">','</div>'); ?>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-5">
          <div class="form-group">
            <label for="inputEmail" class="col-sm-0 control-label">User Role</label>
            <div class="col-lg-10">


            <select class="form-control" name="user_role_id">
          		<option></option>
          		<option value=<?php echo $result; ?>>Employee</option>
          	</select>
            </div>
          </div>
        </div>
        <div class="col-lg-10">
          <?php echo form_error('user_role_id', '<div class="text-danger">','</div>'); ?>
        </div>
      </div>

      <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
          <?php echo form_submit(['value'=>'Submit','class'=>'btn btn-primary']); ?>
          <?php echo form_reset(['value'=>'Reset','class'=>'btn btn-default']); ?>
        </div>
      </div>
    </fieldset>
  <?php echo form_close(); ?>
</div>

<?php include('footer.php'); ?>
