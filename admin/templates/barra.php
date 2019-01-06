<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<header class="main-header">
    <!-- Logo -->
    <a href="../index.php" class="logo">
      <span class="logo-mini"><b>G</b>LD</span> <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-lg"><b>GLD</b>WEBCAMP</span>
      <!-- logo for regular state and mobile devices -->
    </a> <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top"> <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav"> <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- <img src="../../dist/img/user2-160x160.jpg" class="user-image" alt="User Image"> -->
              <img src="img/FotoCenaEgresadoSeba.jpg" class="img-circle" alt="User Image" style="height: 20px";>
              <span class="hidden-xs">Hola: <?php echo $_SESSION['nombre'];?></span>
            </a>

            <ul class="dropdown-menu">

              <li class="user-footer">
                <div class="pull-left">
                  <a href="editar-admin.php?id=<?php echo $_SESSION['id'];?>" class="btn btn-success btn-flat">Ajustes</a>
                </div>
                <div class="pull-right">
                  <a href="login.php?cerrar_sesion=true" class="btn btn-success btn-flat">Cerrar sesión</a>
                </div>
              </li>
            </ul>
          </li> <!-- Control Sidebar Toggle Button -->

        </ul>
      </div>
    </nav>
  </header>


  <!-- =============================================== -->