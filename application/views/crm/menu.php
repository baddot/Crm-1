  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p class="h5">USER NAME</p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header" style="color:white">General</li>
        <li class="active treeview">
          <a href="<?php echo base_url();?>cInicio">
            <i class="fa  fa-map-signs"></i> 
            <span>Bienvenido</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>cContactos">
            <i class="fa fa-users"></i> 
            <span>Contactos</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>cNegociacion">
            <i class="fa fa-briefcase"></i>
            <span>Negociación</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>cTareas">
            <i class="fa fa-calendar-check-o"></i> <span>Tareas</span>
            <span class="pull-right-container">
            <span class="label label-primary pull-right">4</span>
            </span>
          </a>
        </li>
        <li class="header" style="color:white">Usuario</li>
        <li class="treeview">
          <a href="<?php echo base_url();?>cNotas">
            <i class="fa fa-clone"></i>
            <span>Notas</span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url();?>cUsuario">
            <i class="fa fa-male"></i>
            <span>Agregar Usuario</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<div class="content-wrapper" id="cuerpo">