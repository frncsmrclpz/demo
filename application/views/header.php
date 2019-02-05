<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Welcome to CodeIgniter</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <div class="col-lg-6">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">Employee Management System</a>
        </div>
      </div>

            <div class="col-lg-2">
               <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                 <ul class="nav navbar-nav navbar-right">
                  <?php if($this->session->userdata('user_id')): ?>
                   <li class="nav-link dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"  aria-expanded="false">Logout<span class="caret"></span></a>
                     <ul class="dropdown-menu" role="menu">
                      <li><?php echo anchor("dashboard/changePassword", 'Change Password'); ?></li>
                      <li><?php echo anchor("login/logout", 'Logout'); ?></li>

                     </ul>
                  </li>
                <?php else: ?>

                <?php endif; ?>
                </ul>

             </div>
         </div>
    </div>

</nav>