<?php

  require 'includes/helpers.php';
  require 'includes/db-connect.php';
  require 'includes/functions.php';
  require 'includes/templates.php';

  get_header('Sign Up');

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    print_d($_POST, '$_POST');

    $received_fields = check_fields(['name', 'email', 'password']);

    print_d($received_fields, '$data');

  }

?>

  <div class="container-xxl">
    <div class="row justify-content-center">
      <form class="col-sm-10 col-md-8 col-lg-6 pt-5" method="post">
        <div class="form-floating mb-3">
          <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="name" required>
          <label for="name">Name</label>
        </div>

        <div class="form-floating mb-3">
          <input type="email" class="form-control" id="email" name="email" placeholder="email" required>
          <label for="email">Email</label>
        </div>

        <div class="form-floating mb-4">
          <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
          <label for="password">Password</label>
        </div>

        <button type="submit" class="btn btn-primary">Sign Up</button>
      </form>
    </div>
  </div>

<?php get_footer(); ?>


