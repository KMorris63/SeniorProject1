<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container">
  <a class="navbar-brand" href="/SeniorProject1/Mirror1/presentation/views/home.php">Mirror Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <?php
      if (isset($_SESSION['username'])) {
    ?>
        <li class="nav-item">
          <a class="nav-link" href="/SeniorProject1/Mirror1/presentation/views/displayAllUsers.php">Users</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/SeniorProject1/Mirror1/presentation/views/displayAllLayouts.php">Layouts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/SeniorProject1/Mirror1/presentation/views/newLayout.php">New Layout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/SeniorProject1/Mirror1/presentation/handlers/logout.php">Logout</a>
        </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
                <li class="nav-item buttonLogin">
          <a class="nav-link" style="margin-right: 0px !important;" href="/SeniorProject1/Mirror1/presentation/handlers/refreshMirror.php">Refresh</a>
        </li>
    <?php
      } else {
    ?>
      <li class="nav-item">
        <a class="nav-link" href="/SeniorProject1/Mirror1/presentation/views/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/SeniorProject1/Mirror1/presentation/views/register.php">Register</a>
      </li>
    <?php }?>
    </ul>
  </div>
  </div>
</nav>
