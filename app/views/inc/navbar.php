<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">

  <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITE_NAME; ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php echo strpos(strtolower(CURRENTURL), 'pages/about') !== false ? '' : 'active'; ?> ">
        <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
      </li>
      <li class="nav-item <?php echo strpos(strtolower(CURRENTURL), 'pages/about') !== false ? 'active' : ''; ?>">
        <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about">About</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link text-light" href="<?php echo URLROOT; ?>/users/login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="<?php echo URLROOT; ?>/users/register">Register</a>
      </li>
    </ul>
  </div>

</nav>