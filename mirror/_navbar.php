<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Mirror Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/mirror/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/mirror/register.php">Register</a>
      </li>
    <?php
      if (isset($_SESSION['username'])) {
    ?>
        <li class="nav-item">
          <a class="nav-link" href="/mirror/home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/mirror/logout.php">Logout</a>
        </li>
    <?php
      }
    ?>
    </ul>
  </div>
</nav>
