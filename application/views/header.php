   <!---------------------- nvarbar ----------------------->
   <link rel="icon" href="images/logo.png"  >

   <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
    <div class="container menu-top">
    <link rel="icon" href="images/logo.png"  >
      <a class="navbar-brand" href="<?= base_url() ?>Home">Dekiru Nihongo 
      <img src="<?= base_url() ?>images/1.png" >
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="<?= base_url() ?>Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>Course">Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost:8888/Project2/News/page/1">News</a>
          </li>
          <li class="nav-item">
            <a class="nav-link btn_contact" href="<?php echo base_url() ?>Contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url() ?>login">Login</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>