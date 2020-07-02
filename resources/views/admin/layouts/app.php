<!DOCTYPE html>
<html lang="en">

<!-- Header -->
<head>

  <meta charset="UTF-8">
  <meta name="description" content="CodeCube Framework">
  <meta name="keywords" content="PHP,HTML,CSS,XML,JavaScript">
  <meta name="author" content="Mahadi Hasan">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php startblock('title') ?><?php endblock() ?></title>

  <!-- Favicon-->
  <?php echo icon('img/favicon.png'); ?>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <?php echo style('css/bootstrap.min.css'); ?>
  <!-- Material Design Bootstrap -->
  <?php echo style('css/mdb.min.css'); ?>
  <!-- Your custom styles (optional) -->
  <?php echo style('css/style.css'); ?>

</head>
<!-- #ENDS# Header -->

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="<?php echo route('welcome'); ?>"><?php echo title(); ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <?php $auth = new Base\Authenticable; if($auth->check()){ ?>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php echo route_is('home') ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo route('admin/home'); ?>"><span class="oi oi-home pr-2"></span>Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php echo route_is('items') ? 'active' : '' ?>">
            <a class="nav-link" href="<?php echo route('admin/items/all'); ?>"><span class="oi oi-list pr-2"></span>Items <span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <span class="navbar-text">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php echo route_is('user') ? 'active' : '' ?>">
              <a class="nav-link" href="<?php echo route('admin/user/show'); ?>"><span class="oi oi-person pr-2"></span>Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="javascript:void(0);" onclick="signout();"><span class="oi oi-account-logout pr-2"></span>Sign Out</a>
              <form id="signout-form" action="<?php echo route('admin/signout') ?>" method="POST" style="display: none;">
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
              </form>
            </li>
            <script type="text/javascript">
            // Function for logging out
            function signout(){
              if ( confirm("Are you sure you want to sign out?") == true ){
                document.getElementById("signout-form").submit();
              }
            }
          </script>
        </span>
        <?php } else { ?>
        <ul class="navbar-nav mr-auto"></ul>
        <span class="navbar-text">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link <?php echo route_is('signup') ? 'active' : ''; ?>" href="<?php echo route('admin/signup'); ?>"><span class="oi oi-pencil pr-2"></span>Sign Up</a>
            </li>
            <li class="nav-item">
              <a class="nav-link <?php echo route_is('signin') ? 'active' : ''; ?>" href="<?php echo route('admin/signin'); ?>"><span class="oi oi-account-login pr-2"></span>Sign In</a>
            </li>
          </ul>
        </span>
        <?php } ?>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="mx-5 my-5">
      <?php startblock('content') ?>
      <?php endblock() ?>
    </div>
  </div>

  <!-- jQuery -->
  <?php echo script('js/jquery.min.js'); ?>
  <!-- Bootstrap tooltips -->
  <?php echo script('js/popper.min.js'); ?>
  <!-- Bootstrap core JavaScript -->
  <?php echo script('js/bootstrap.min.js'); ?>
  <!-- MDB core JavaScript -->
  <?php echo script('js/mdb.min.js'); ?>

</body>

</html>
