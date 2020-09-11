  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="inicio" class="brand-link ">
      <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8"> -->
      <span class="brand-text font-weight-light ml-4"> <i class="fas fa-hospital-alt mr-3"></i> Clinica</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <?php 
            if( isset($_SESSION['iniciarSesion']) && $_SESSION['iniciarSesion'] == 'ok' ){
              echo '
              <li class="nav-item">
                <a href="buscaMedico" class="nav-link">
                  <i class="nav-icon fas fa-briefcase-medical"></i>
                  <p>
                    Buscar medico
                  </p>
                </a>
              </li>
              ';
            }
          ?>
          
          <li class="nav-item">
            <a href="menuCitas" class="nav-link">
              <i class="nav-icon far fa-calendar-check"></i>
              <p>
                Citas
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="contacto" class="nav-link">
            <i class="nav-icon fas fa-file-signature"></i>
              <p>
                Contacto
              </p>
            </a>
          </li>
          <?php
          if( isset($_SESSION['iniciarSesion']) && $_SESSION['iniciarSesion'] == 'ok' ){
            echo '
              <li class="nav-item">
              <a href="historialMedico" class="nav-link">
              <i class="nav-icon fas fa-file-medical-alt"></i>
                <p>
                  Ultima cita
                </p>
              </a>
            </li>
            ';
          }
          ?>
          
          <!-- <li class="nav-item">
            <a href="index.php?ruta=inicio#misionVision" class="nav-link">
              <i class="nav-icon fas fa-braille"></i>
              <p>
                Misión y Vision
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-archway"></i>
              <p>
                Visión
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-question-circle"></i>
              <p>
                Ayuda
              </p>
            </a>
          </li> -->
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-hands-helping"></i>
              <p>
                Convenios
              </p>
            </a>
          </li> -->
          <li class="nav-item">
            <a href="evaluacionCovid" class="nav-link">
              <i class="nav-icon fas fa-microscope"></i>
              <p>
                Covid 19
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Soporte en linea
              </p>
            </a>
          </li> -->

          <?php
            if( isset($_SESSION['iniciarSesion']) && $_SESSION['iniciarSesion'] == 'ok' ){
              echo '
                <li class="nav-item">
                <a href="salir" class="nav-link">
                  <i class="nav-icon fas fa-sign-out-alt icon-salir"></i>
                  <p>
                    Salir
                  </p>
                </a>
              </li>
              ';
            }else{
              echo '
                <li class="nav-item">
                <a href="salir" class="nav-link">
                  <i class="nav-icon fas fa-sign-in-alt icon-salir"></i>
                  <p>
                    Iniciar sesion
                  </p>
                </a>
              </li>
              ';
            }
          ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>