<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/font-awesome/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>public/dist/css/ionicons.min.css">
  
  <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?= base_url() ?>public/bower_components/jvectormap/jquery-jvectormap.css">
 
  <link rel="stylesheet" href="<?= base_url() ?>css/all.min.css">
  
  

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="http://localhost:8888/Project2/admin/Login_admin/index" class="logo"  >
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="images/logo.png" alt=""></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">  <b> Course management</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button" >
        
        
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            
            
          </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
           
            
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li style="height: 52px">
            <a target="_blank" href="http://localhost:8888/project2/">
              <span class="glyphicon glyphicon-home"></span>
              <span>Website</span>
            </a>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?php echo base_url() ?>images/avatar.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?= $this->session->userdata('user_admin'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?php echo  base_url() ?>images/avatar.jpg" class="img-circle" alt="User Image">

                <p>
                 <?= $this->session->userdata('user_admin'); ?>
                
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout" class="btn btn-default btn-flat">Log out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>images/avatar.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?= $this->session->userdata('user_admin'); ?></p>
          <a href="#"><i class="fa fa-circle text-yellow"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview menu-open">
          <a href="#">
            <i class="fas fa-home"></i> <span>Manage School</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: block;">
            <li><a href="<?php echo base_url() ?>admin/Manage_teacher"><i class="far fa-edit">&nbsp</i> Manage Teacher</a></li>
            <li><a href="<?php echo base_url() ?>admin/Manage_student"><i class="far fa-edit">&nbsp</i> Manage Student</a></li>
            <li><a href="pages/forms/editors.html"><i class="far fa-edit">&nbsp</i> Manage Course</a></li>
          </ul>
          
          <li>
          </li>
          
        </li>
        <li class="treeview ">
          <a href="#">
            <i class="fas fa-images"></i> <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: block;">
            <li><a href="<?php echo base_url() ?>admin/json/Slides"><i class="far fa-edit">&nbsp</i>Add Slides</a></li>
            <li><a href="<?php echo base_url() ?>admin/json/Edit_slides"><i class="far fa-edit">&nbsp</i>Update Slides</a></li>
            <li><a href="pages/forms/advanced.html"><i class="far fa-edit">&nbsp</i>Quản lý slide</a></li>   
          </ul>
        </li>
         <li class="treeview  menu-open ">
          <a href="#">
            <i class="far fa-bookmark"></i> <span>Manage News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: block;">
            <li><a href="<?php echo base_url() ?>admin/Category"><i class="far fa-edit">&nbsp</i>Category</a></li>
            <li><a href="<?php echo base_url() ?>admin/Manage_news"><i class="far fa-edit">&nbsp</i>News</a></li>
    
          </ul>
        </li>
        <li class="treeview ">
          <a href="mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
               <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
          <ul class="treeview-menu" style="display: none;">
            <li class="active">
              <a href="<?php echo base_url() ?>admin/Mailbox">Inbox
                <span class="pull-right-container">
                  <span class="label label-primary pull-right">13</span>
                </span>
              </a>
            </li>
            <li><a href="compose.html">Compose</a></li>
            <li><a href="read-mail.html">Read</a></li>
          </ul>
        </li>

       
        
          
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>






















































  