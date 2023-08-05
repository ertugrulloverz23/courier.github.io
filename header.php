
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
  <div class="container">
    <a class="navbar-brand fs-4 text-dark" href="index.php"><p class="text">FCS</p></a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header text-dark border-bottom">
        <h5 class="offcanvas-title text-bold text-warning" id="offcanvasNavbarLabel">FCS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" id="sub-menu">
        <li class="nav-item mx-2">
            <a class="nav-link" href="index.php"  <?php if($page=="home") {echo "id='act'";} ?> >Home</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="about.php" <?php if($page=="about") {echo "id='act'";} ?> >About US</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="ship.php" <?php if($page=="ship") {echo "id='act'";} ?>>Ship Now</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="contact.php" <?php if($page=="contact") {echo "id='act'";} ?>>Contact US</a>
          </li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" id="btn">
        <button class="btn btn-outline-dark" type="submit"><a href="login.php" class="nav-link"><i class="fa-solid fa-right-to-bracket"></i>Login</a></button>
      </form>
      </div>
    </div>
  </div>
</nav>
