<?php 
// Insert Code here for the HEADER

?>
<!-- // You can add Navbar Code here -->
<?php systemfunctions::sessionStart(); ?>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <a class="navbar-brand" href="#"><span class="fa fa-cloud"></span>ZaiPHP</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="#">Ball Bearings</a>
      <a class="nav-item nav-link" href="#">TNT Boxes</a>
    </div>
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <hr>
      </li>
      <li class="nav-item">
        <div class="btn-group">
          <button type="button" class="btn btn-success"><?php echo $_SESSION['txtusername']; ?></button>
          <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-toggle="dropdown">
          </button>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" data-toggle="modal" data-target="#editProfile">Edit Profile</a>
            <a class="dropdown-item" data-toggle="modal" data-target="#changePass" data-backdrop="static">Change Password</a>
            <a class="dropdown-item">
              <form method="post" class="form-inline my-2 my-lg-0">
                <button class="btn btn-danger btn-block my-2 my-sm-0" name="btnlogout">Logout <span class="fa fa-sign-out"></span></button>
              </form>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        
      </li>
    </ul>
  </div>  
 </nav>
<br>