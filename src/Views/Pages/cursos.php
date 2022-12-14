<?php include_once __DIR__ . '/Layouts/navbar.php';?>
<main role="main" class="main-container">
      <section class="course-collection-container">
        <!-- Siderbar -->
        <article class="course-collection-sidebar">
          <section class="course-collection-sidebar-content">
            <!-- Block input search -->
            <div class="course-collection-sidebar-search">
              <div class="course-collection-sidebar-search-input">
                <input type="text" placeholder="Buscar curso..." />
              </div>
              <div class="course-collection-sidebar-search-icon">
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
            </div>
            <!-- Block input search -->

            <!-- List course -->
            <ul class="course-collection-sidebar-list">
              <li class="course-collection-sidebar-list-item">
                <a href="#">Todos los cursos</a>
              </li>
              <li class="course-collection-sidebar-list-item">
                <a href="#">Ayuntamiento</a>
              </li>
              <li class="course-collection-sidebar-list-item">
                <a href="#">Universidad</a>
              </li>
              <li class="course-collection-sidebar-list-item">
                <a href="#">Servicios</a>
              </li>
            </ul>
            <!-- List course -->
          </section>
        </article>
        <!-- End siderbar -->

        <!-- Courses -->
        <article class="course-collection-courses">
          <section class="course-collection-all">
            <!-- Item -->
            <div class="couse-collection">
              <!-- Head -->
              <div class="course-collection-head">
                <div class="course-collection-image">
                  <img src=<?php __DIR__  ?> "/assets/images/mossodesquadra.jpg" alt="Course #1" />
                </div>
              </div>
              <!-- body -->
              <div class="course-collection-body">
                <div class="course-info-block">
                  <h3>Mossos d' esquadra.</h3>
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Minus error modi ipsam, aut laboriosam assumenda.
                  </p>
                  <a href=<?= Routes::url('details') ?>>Ver detalles</a>
                </div>
              </div>
              <!-- Footer -->
              <div class="course-collection-footer">
                <div class="course-footer-block">
                  <div class="day-test">
                    <p>24/04/2054</p>
                  </div>
                  <div class="time-course">
                    <p>300h</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End item -->
            <!-- Item -->
            <div class="couse-collection">
              <!-- Head -->
              <div class="course-collection-head">
                <div class="course-collection-image">
                  <img src=<?php __DIR__  ?> "/assets/images/guardia-civil.jpeg" alt="Course #1" />
                </div>
              </div>
              <!-- body -->
              <div class="course-collection-body">
                <div class="course-info-block">
                  <h3>Guardia Civil.</h3>
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Minus error modi ipsam, aut laboriosam assumenda.
                  </p>
                  <a href=<?= Routes::url('details') ?>>Ver detalles</a>
                </div>
              </div>
              <!-- Footer -->
              <div class="course-collection-footer">
                <div class="course-footer-block">
                  <div class="day-test">
                    <p>24/04/2054</p>
                  </div>
                  <div class="time-course">
                    <p>300h</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End item -->
            <!-- Item -->
            <div class="couse-collection">
              <!-- Head -->
              <div class="course-collection-head">
                <div class="course-collection-image">
                  <img src=<?php __DIR__  ?> "/assets/images/policia-nacional.jpg" alt="Course #1" />
                </div>
              </div>
              <!-- body -->
              <div class="course-collection-body">
                <div class="course-info-block">
                  <h3>Policia Nacional.</h3>
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Minus error modi ipsam, aut laboriosam assumenda.
                  </p>
                  <a href=<?= Routes::url('details') ?>>Ver detalles</a>
                </div>
              </div>
              <!-- Footer -->
              <div class="course-collection-footer">
                <div class="course-footer-block">
                  <div class="day-test">
                    <p>24/04/2054</p>
                  </div>
                  <div class="time-course">
                    <p>300h</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End item -->

            <!-- Item -->
            <div class="couse-collection">
              <!-- Head -->
              <div class="course-collection-head">
                <div class="course-collection-image">
                  <img src=<?php __DIR__  ?> "/assets/images/military_2.jpg" alt="Course #1" />
                </div>
              </div>
              <!-- body -->
              <div class="course-collection-body">
                <div class="course-info-block">
                  <h3>Ejercito de aire.</h3>
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Minus error modi ipsam, aut laboriosam assumenda.
                  </p>
                  <a href=<?= Routes::url('details') ?>>Ver detalles</a>
                </div>
              </div>
              <!-- Footer -->
              <div class="course-collection-footer">
                <div class="course-footer-block">
                  <div class="day-test">
                    <p>24/04/2054</p>
                  </div>
                  <div class="time-course">
                    <p>300h</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End item -->
            <!-- Item -->
            <div class="couse-collection">
              <!-- Head -->
              <div class="course-collection-head">
                <div class="course-collection-image">
                  <img src=<?php __DIR__  ?> "/assets/images/military_3.jpg" alt="Course #1" />
                </div>
              </div>
              <!-- body -->
              <div class="course-collection-body">
                <div class="course-info-block">
                  <h3>Ejercito de tierra.</h3>
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Minus error modi ipsam, aut laboriosam assumenda.
                  </p>
                  <a href=<?= Routes::url('details') ?>>Ver detalles</a>
                </div>
              </div>
              <!-- Footer -->
              <div class="course-collection-footer">
                <div class="course-footer-block">
                  <div class="day-test">
                    <p>24/04/2054</p>
                  </div>
                  <div class="time-course">
                    <p>300h</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End item -->
            <!-- Item -->
            <div class="couse-collection">
              <!-- Head -->
              <div class="course-collection-head">
                <div class="course-collection-image">
                  <img src=<?php __DIR__  ?> "/assets/images/ue.jpg" alt="Course #1" />
                </div>
              </div>
              <!-- body -->
              <div class="course-collection-body">
                <div class="course-info-block">
                  <h3>Diputado Union Europea.</h3>
                  <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    Minus error modi ipsam, aut laboriosam assumenda.
                  </p>
                  <a href=<?= Routes::url('details') ?>>Ver detalles</a>
                </div>
              </div>
              <!-- Footer -->
              <div class="course-collection-footer">
                <div class="course-footer-block">
                  <div class="day-test">
                    <p>24/04/2054</p>
                  </div>
                  <div class="time-course">
                    <p>300h</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- End item -->
          </section>
        </article>
        <!-- End courses -->
      </section>

    </main>
