<?php include('header.php'); ?>
<br>
<br>
	<div class="container">
		<?php if($error = $this->session->flashdata('employee_added')):  ?>
      <div class="row">
        <div class="col-lg-5">
          <div class="alert alert-dismissible alert-success">
            <?php echo $error; ?>
          </div>
        </div>
      </div>
    <?php endif; ?>
		<div class="row">
			<div class="col-lg-3">
				<ul class="nav nav-pills">
				  <li class="dropdown active">
				    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"aria-expanded="false">Employee Management<span class="caret"></span></a>
				    <ul class="dropdown-menu">
				    <center>
				      	<li><?php echo anchor("employee/createEmployee",'Create Employee'); ?></li>
				      <li> <?php echo anchor("employee/employeesList",'View Employee'); ?></li>
				  	</center>
				    </ul>
				  </li>
				</ul>
			</div>
			<br>
			<div class="col-lg-8">
				<!-- //search bar -->
				<?php echo form_open("",['class'=>'navbar-form navbar-right', 'role'=>'search']); ?>
					<div class="form-group">

					<?php echo form_input(['name'=>'query','class'=>'form-control','placeholder'=>'Search']); ?>

				</div>

					<?php echo form_submit(['value'=>'Search','class'=>'btn btn-primary']); ?>

				<?php echo form_close(); ?>


			</div>
		</div>
		<div class="row">
			<?php echo anchor("employee/deleteEmployee",'Delete',['class'=>'btn btn-danger']); ?>
		</div>
		<br/>
		<br/>
		<div class="row">
			<table class="table table-striped table-hover">
			  <thead>
			    <tr>
			    	<th></th>
			      <th>First Name</th>
			      <th>Username</th>
			      <th>Designation</th>
			      <th>User Role</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			    <td><?php echo form_checkbox(['class'=>'checkbox']); ?></td>
			      <td>Column content</td>
			      <td>Column content</td>
			      <td>Column content</td>
			      <td>Column content</td>
			    </tr>

			  </tbody>
			</table>
		</div>

	</div>

<?php include('footer.php'); ?>