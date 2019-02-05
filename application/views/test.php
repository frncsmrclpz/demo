<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    </head>
    <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Employee Management System</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </li>

      </div>
    </nav>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>



---


<?php include('header.php'); ?>

<div class="container">
  <?php echo form_open("login/user_login",['class'=>'form-horizontal']);?>
    <br>
    <br>
    <fieldset>
      <legend>LOGIN</legend>
        <div class="row-lg-10">
          <div class="col-lg-6">
            <div class="form-group">
              <label for="InputEmail">Email</label>
              <div class="col-lg-10">
              <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Email','value'=>set_value('username')]); ?>
              </div>
            </div>
          </div>
       
       <div class="row-lg-10">
        <?php echo form_error('username', '<div class="text-danger">','</div>'); ?>
      </div>
     </div>
          <div class="col-lg-6">
            <div class="form-group">
              <label for="InputPassword">Password</label>
              <div class="col-lg-10">
                <?php echo form_input(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); ?>
            </div>
          </div>
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


---

<?php

  class Dashboard extends CI_Controller
  {
    public function index()
    {
      if(!$this->session->userdata('user_id'))
      {
        return redirect('login');
      }
      else
      {
        $this->load->view('Dashboard');

      }
      
    }
  }

?>

--


<?php 
  class Login extends CI_Controller
  {

    public function index()
    {
      if($this->session->userdata('user_id'))
      {
        return redirect('dashboard');
      }
      $this->load->view('login');
    }

    public function user_login()
    {
      $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_error_delimiters('<div class="text-danger">', '</div>');
            if ($this->form_validation->run())
              {
                  $username = $this->input->post('username');
                  $password = $this->input->post('password');
                  $this->load->model('Queries');
                  $user_id = $this->Queries->login_user($username, $password);
                  if($user_id)
                  {
                    $this->session->set_userdata(['user_id'=>$user_id]);
                    return redirect('dashboard');
                  }
                  else
                  {
                    $this->session->set_flashdata('login_response','Invalid Username/Password');
                    return redirect('login');
                  }
              }
            else
              {
                    $this->load->view('login');
              }
    }

    public function logout() 
    {
      $this->session->unset_userdata('user_id');
      $this->load->view('login');
    }

  }

?>

---