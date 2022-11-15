  <!-- NavBar -->
  <nav class="navbar-container transparent-container">
      <!-- Mobile -->
      <section class="navbar-container-mobile">
        <article class="navbar-logo-mobile">
          <img src="https://picsum.photos/200" />
        </article>
        <article class="navbar-menu-mobile">
            <div class="navbar-menu-content-mobile">
              <div class="navbar-menu-item">
                  <ul class="navbar-content-menu">
                    <li class="mobile-menu-links">
                      <a class="mobile-menu-link" href="http://localhost:9000/">Inicio</a>
                    </li>
                    <li class="mobile-menu-links">
                      <a class="mobile-menu-link" href="http://localhost:9000/?page=metologia">Metodología</a>
                    </li>
                    <li class="mobile-menu-links">
                      <a class="mobile-menu-link open-submenu" href="http://localhost:9000/?page=oposiciones">Oposiciones
                      </a>
                    </li>
                    <li class="mobile-menu-links">
                      <a class="mobile-menu-link open-submenu" href="http://localhost:9000/?page=cursos">Cursos</a>
                    </li>
                    <li class="mobile-menu-links">
                      <a class="mobile-menu-link" href="http://localhost:9000/?page=contacto">Contacto</a>
                    </li>
                    <?php if (isset($_SESSION['user'])): ?>
                        <!-- User Logger -->
                            <li>
                            <div class="user-menu-mobile">
                                <div class="user-image-mobile">
                                <img src="https://picsum.photos/200" width="30" />
                                </div>
                                <div class="user-name-mobile">
                                    <a href="http://localhost:9000/?page=logout">Pepe Alv</a>
                                </div>
                            </div>
                            </li>
                        <!-- End User Logger -->
                        <?php else: ?>
                            <!-- BUTTONS LOGIN AND REGISTER -->
                                <li>
                                <div class="mobile-buttons-menu">
                                    <a class="button-mobile button-bg" href="http://localhost:9000/?page=login">Login</a>
                                    <a class="button-mobile button-bg-hover" href="http://localhost:9000/?page=register">Register</a>
                                </div>
                                </li>
                            <!-- END BUTTONS LOGIN AND REGISTER -->
                    <?php endif; ?>
                  </ul>
              </div>
            </div>
        </article>
        <article id="open-menu" class="navbar-icon-menu-mobile">
          </i> <span class="material-icons">drag_handle</span>
        </article>
      </section>
      <!-- Desktop -->
      <section class="navbar-container-desktop">
        <article class="navbar-logo-desktop">
          <img src="https://picsum.photos/300" />
        </article>
        <article class="navbar-menu-desktop">
          <ul class="navbar-content-menu-desktop">
            <li  class="desktop-menu-links">
              <a class=" link-menu-actived desktop-menu-link" href="http://localhost:9000/">Inicio</a>
            </li >
            <li class="desktop-menu-links">
              <a class="desktop-menu-link" href="http://localhost:9000/?page=metologia">Metodología</a>
            </li>
            <li  class="desktop-menu-links">
              <a class="desktop-menu-link" href="http://localhost:9000/?page=oposiciones">Oposiciones</a>
            </li>
            <li  class="desktop-menu-links">
              <a class="desktop-menu-link" href="http://localhost:9000/?page=cursos">Cursos</a>
            </li>
            <li  class="desktop-menu-links">
              <a class="desktop-menu-link" href="http://localhost:9000/?page=contacto">Contacto</a>
            </li>
          </ul>
        </article>
        <article class="navbar-user-desktop">
          <?php if (isset($_SESSION['user'])): ?>
            <!-- User logger -->
            <div class="user-menu-desktop">
                        <div class="user-image-desktop">
                            <img src="https://picsum.photos/200" width="40" />
                        </div>
                        <div class="user-name-desktop">
                            <a href="#"><?php echo $_SESSION['user']['name']; ?><i class="ml-2 text-black fa-solid fa-angle-down"></i></a>
                            <div class="modal-info-user-desktop d-none">
                                <ul class="list-info-desktop">
                                <li>
                                    <a href="#">Favoritos</a>
                                </li>
                                <li>
                                    <a href="#">Mi perfil</a>
                                </li>
                                <li>
                                    <a href="#">Editar Perfil</a>
                                </li>
                                <li>
                                    <a href="http://localhost:9000/?page=logout">Cerrar sesion</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    <!-- User logger -->
            <?php else: ?>
            <!-- Buttons login and register -->
                <div class="desktop-buttons-menu">
                    <a class="button-desktop button-bg" href="http://localhost:9000/?page=login">Login</a>
                    <a class="button-desktop button-bg-hover" href="http://localhost:9000/?page=register">Register</a>
                </div>
            <!-- End Buttons login and register -->
          <?php endif;?>
        </article>
      </section>
    </nav>